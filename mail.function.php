<?php
/*-------------------- FUNCTIONS ----------------------------*/
//SEND_MAIL
function SendEmail($to,$from,$subject,$content)
{
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$headers .= "From: ".$from."\r\n";
		$headers .= "Reply-To: ".$from."\r\n";
		$headers .= "Return-Path: ".$from."\r\n";
		$message="<html>
					<body>
						<table width='100%' border='0' cellspacing='0' cellpadding='0'>
							<tr>
								<td>".$content."</td>
							</tr>
						</table>
					</body>
					</html>";
		if(isset(mail($to,$subject,$message,$headers)))
			return true;
		else
			return false;
}
$result  = SendEmail('midexigner@gmail.com','design@midexigner.com','MI Test','21');
echo $result ; 
/*-------------------- FUNCTIONS  END----------------------------*/
?>