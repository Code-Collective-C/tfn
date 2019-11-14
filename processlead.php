<?php

if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['submitbut']))):

	// SANITIZE //
	if (isset($_POST['firstname'])) { 
		$firstname = trim($_POST['firstname']);
		$firstname = preg_replace("/\s{2,}/"," ", $firstname);
		$firstname = filter_var($firstname, FILTER_SANITIZE_STRING );
		}
	if (isset($_POST['compname'])) { 
		$compname = trim($_POST['compname']);
		$compname = preg_replace("/\s{2,}/"," ", $compname);
		$compname = filter_var($compname, FILTER_SANITIZE_STRING );
		}
	if (isset($_POST['emailadd'])) { 
		$emailadd = trim($_POST['emailadd']);
		$emailadd = preg_replace("/\s{2,}/"," ", $emailadd);
		$emailadd = filter_var($emailadd, FILTER_SANITIZE_STRING );
		}
	if (isset($_POST['cellno'])) { 
		$cellno = trim($_POST['cellno']);
		$cellno = preg_replace("/\s+/", "", $cellno);
		$cellno = filter_var($cellno, FILTER_SANITIZE_STRING );
		}
	if (isset($_POST['comments'])) { 
		$comments = trim($_POST['comments']);
		$comments = filter_var($comments, FILTER_SANITIZE_STRING );
		}

$formerrors = false;

	// VALIDATE REQUIRED //
	if ($firstname === '') :
		$err_firstname = '<div class="error"> First name is a required field.</div>';
		$formerrors = true;
	endif;
	if ($compname === '') :
		$err_compname = '<div class="error"> Company is a required field.</div>';
		$formerrors = true;
	endif;
	if ($emailadd === '') :
		$err_emailadd = '<div class="error"> Email address is a required field.</div>';
		$formerrors = true;
	endif;
	if ($cellno === '') :
		$err_cellno = '<div class="error"> Contact number is a required field.</div>';
		$formerrors = true;
	endif;

	// VALIDATE PATTERN //
	if ( !(preg_match('/^[\pL\pM\p{Zs}.-]+$/u', $firstname)) ) :
		$err_firstnamepattern = '<div class="error"> First name must be characters only.</div>';
		$formerrors = true;
	endif;
	if ( !(preg_match('/^[\pL\pM\p{Zs}.-]+$/u', $compname)) ) :
		$err_compnamepattern = '<div class="error"> Company name must be characters only.</div>';
		$formerrors = true;
	endif;
	if (!(filter_var($emailadd, FILTER_VALIDATE_EMAIL))):
		$err_emailaddpattern = '<div class="error"> Email address is not valid.</div>';
		$formerrors = true;
	endif;
	if ( !(preg_match('/^[0-9]*$/', $cellno)) ) :
		$err_cellnopattern = '<div class="error"> Contact number must be digits only.</div>';
		$formerrors = true;
	endif;


	// SANITIZED AND VALIDATED PROCEED //
	if (!($formerrors)) :

			$msgsent = '<div class="alert alert-light">Thank you. Your message has been sent successfully</div>';
	
			$to      = "sales@tfn.co.za";
			$subject = 'TFN Website Lead Form';
			$headers  = "MIME-Version: 1.0\n";
			$headers .= "From: TFN Website <sales@tfn.co.za>\r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\n";
			$headers .= "X-Mailer: PHP\n"; 
			$headers .= "X-Priority: 1\n"; 
			$message =  "<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #333;\">
						<strong>TFN Website Lead Form</strong> <br><br>
						<strong>From: </strong>".$firstname."
                        <br><strong>Company: </strong>".$compname."
						<br><strong>Email: </strong>".$emailadd."
						<br><strong>Tel: </strong>".$cellno."
						<br><br>
						<br><br></p>";
		  
		mail($to, $subject, $message, $headers);

	endif;

endif;

?>