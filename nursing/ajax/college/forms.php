<?php
    //require("/home/klr06rdih2rt/public_html/test/mail/phpmailer/class.phpmailer.php");
   $name = isset($_REQUEST['name'])?$_REQUEST['name']:"";	
   $email = isset($_REQUEST['email'])?$_REQUEST['email']:"";
   $phone = isset($_REQUEST['phone'])?$_REQUEST['phone']:"";
   $mess = isset($_REQUEST['mess'])?$_REQUEST['mess']:"";
//Import PHPMailer classes into the global namespace
$to = "a.jaheer786@gmail.com";
$subject = "Regards - Admission";



$message = "
		<html>
		<head>
		<title>Admission</title>
		</head>
		<body>
		
 <center>
	 
	 	<table width='700' style='background: #513f95; border-collapse: collapse;' cellpadding='0'>
	 		<tr>
	 			<td><img src='https://www.drkmh.com/images/logo-kmh.png' style='width: 200px; padding: 10px;'></td>
	 			<td width='200'>
	 				<table width='200'>
	 					<tr>
	 						<td>
	 							<a class='facebook sh-tooltip' data-placement='bottom' title='Facebook /drkmh' target='_blank' href='' rel='noopener'><img src='https://www.oncodheep.com/test/images/facebook.png' width='25' height='25' /></a>
	 						</td>
	 						<td>
	 							<a class='instagram sh-tooltip' data-placement='bottom' title='Instagram /drkmh' target='_blank' href='' rel='noopener'><img src='https://www.oncodheep.com/test/images/instagram.png'  width='25' height='25'/></a>
	 						</td>
	 						<td>
	 							<a class='twitter sh-tooltip' data-placement='bottom' title='Twitter /drkmh' target='_blank' href='' rel='noopener'><img src='https://www.oncodheep.com/test/images/twitter.png'  width='25' height='25'/></a>
	 						</td>
	 						<td>
	 							<a class='whatsapp sh-tooltip' data-placement='bottom' title='Whatsapp /drkmh' target='_blank' href='' rel='noopener'><img src='https://www.oncodheep.com/test/images/whatsapp.png'  width='25' height='25'/></a>
	 						</td>
	 						<td>
	 							<a class='youtube sh-tooltip' data-placement='bottom' title='youtube /drkmh' target='_blank' href='' rel='noopener'><img src='https://www.oncodheep.com/test/images/youtube.png'  width='25' height='25'/></a>
	 						</td>
	 					</tr>
	 				</table>
	 			</td>
	 		</tr>
	 	</table>
	 	<table width='700' style='border-collapse: collapse;' cellpadding='0'>
	 		<tr>
	 			<td><img src='https://www.drkmh.com/images/kmh_care/whatsapp/banner_w.webp' width='100%' style='display:block'/></td>
	 		</tr>
	 	</table>
	 	<table  width='700' cellpadding='0' style='border-collapse: collapse;'>
	 		<tr>
	 			<td style='background: #386cb7; padding: 10px 5px 10px 5px; font-family: sans-serif; color: white; font-weight: bold; font-size:20px' align='center'>Kamakshi College of Nursing</td>
	 		</tr>
	 		<tr>
	 			<td style='background: #386cb7; padding: 10px 5px 10px 5px; font-family: sans-serif; color: white; font-weight: bold;' align='center'>Admission Enquiry</td>
	 		</tr>
	 	</table>
	 	<table width='700' style='border-collapse: collapse; border:1px solid #eee; border-bottom: none' >
	 		<tr>
	 			<td style='font-family: sans-serif; padding: 10px 10px 0px 10px;'>
	 				Hi Team,
	 			</td>
	 		</tr>
	 	</table>
	 	<table width='700' style='border-collapse: collapse; border:1px solid #eee; border-top: none; border-bottom: none;' >
	 		<tr>
	 			<td width='700'>
	 				<center>
		 				<table width='60%'  style='font-family: sans-serif; font-size: 14px'>
 							<tr>
 								<td colspan='2' style='border-bottom:1px solid #eee; padding: 10px 5px 10px 5px; width: 50%;'><b>Patient Name: &nbsp;&nbsp;</b>".$name."</td>
 							</tr>
 							<tr>
 								<td colspan='2' style='border-bottom:1px solid #eee; padding: 10px 5px 10px 5px; width: 50%'><b>Email: &nbsp;&nbsp;</b>".$email."</td>
 								
 							</tr>
 							<tr>
 								<td colspan='2' style='border-bottom:1px solid #eee; padding: 10px 5px 10px 5px; width: 50%'><b>Mobile Number: &nbsp;&nbsp;</b>+91&nbsp;&nbsp; ".$phone." </td>
 							</tr>
 							<tr>
 								<td colspan='2' style='border-bottom:1px solid #eee; padding: 10px 5px 10px 5px; width: 50%'><b>Message: &nbsp;&nbsp;</b>".$mess."</td>
 							</tr>
 						
 						</table>
	 				</center>
	 			</td>
	 		</tr>
	 	</table>
	 	
	 	<table width='700' style='border-collapse: collapse; background: #eee'>
	 		
	 		<tr>
	 			<td colspan='6' style='width: 100%; text-align: center; padding: 10px; font-family: sans-serif; font-weight: bold;'>
	 				For Appointment
	 			</td>
	 		</tr>
	 		<tr>
	 			<td rowspan='2' width='6%'><center><img src='https://www.drkmh.com/images/phone_01.png'  /></center></td>
	 			<td width='30%' style='text-align: center; padding: 10px; font-family: sans-serif; font-size: 13px; text-transform: uppercase; font-weight: bold;'>Admission</td>
	 			
	 			
	 			<td rowspan='2' width='1%'><center></center></td>
	 			<td rowspan='2' width='6%'><center><img src='https://www.drkmh.com/images/whatsapp.png'/></center></td>
	 			<td width='15%' style='text-align: center; padding: 10px; font-family: sans-serif; font-size: 13px; text-transform: uppercase; font-weight: bold;'>Whats App</td>
	 		</tr>
	 		<tr>
	 			
	 			<td style='text-align: center; padding: 5px; font-family: sans-serif; font-size: 13px;'>+91 9344 674 515</td>
	 			
	 	
	 			
	 			<td style='text-align: center; padding: 5px; font-family: sans-serif; font-size: 13px;'>+91 9344 674 515</td>
	 		</tr>
	 		
	 	</table>
	 
</center>

		</body>
		</html>
		";





$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <info@drkmh.com>' . "\r\n";
$headers .= 'Cc:academicboard@drkmh.com, drkcon@drkmh.com, nursingcollege@drkmh.in, kamal@drkmh.com,itd@drkmh.com,v4@drkmh.com, webdev@drkmh.in' . "\r\n";

if(mail($to,$subject,$message,$headers)){
?>
    	<p>
			Hello, <?php echo $name; ?> your request for Nursing admission is successfully registered. You will get a confirmation call from our appointment desk shortly.
		</p>
<?php
}else{
    echo "Mail Not Sent";   
}

			
?>