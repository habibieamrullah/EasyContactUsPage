<?php
$emailhost = "mail.yourwebsite.com";
$emailusername = "someemail@yourwebsite.com"; // Change it to yours
$emailpassword = "yourpassword";
include("mailing.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Easy Contact Us Page with PHP</title>
	</head>
	<body>
		<?php
		if(isset($_POST["sendername"])){
			sendmail("habibieamrullah@gmail.com", "New Inquiry from Contact Us Page", "<p>Dear Administrator, <br>New inquiry message has been submitted from Contact Us Page. Here is the message:</p><p>" .$_POST["senderinquiry"]. "</p><p>Here is detailed information about the sender of this message:</p><p>Name: " .$_POST["sendername"]. "<br>Company: " .$_POST["sendercompany"]. "<br>Email address: " .$_POST["senderemail"]. "<br>Phone: " .$_POST["senderphone"]. "<br>Product/Services: " .$_POST["senderprodser"]. "</p>");
		
			?>
			<div id="emailsent">Thank you! We will response to your message as soon as possible.</div>
			<?php
		}
		?>
		<h4 style="font-size: 25px; text-align: left; margin-bottom: 20px;">Please fill this form below and click submit button:</h4>
		<form method="post">
			<table style="width: 100%;">
				<tr>
					<td>Name</td>
					<td><input name="sendername"></td>
				</tr>
				<tr>
					<td>Company</td>
					<td><input name="sendercompany"></td>
				</tr>
				<tr>
					<td>Email Address</td>
					<td><input name="senderemail" type="email"></td>
				</tr>
				<tr>
					<td>Phone</td>
					<td><input name="senderphone" type="number"></td>
				</tr>
				<tr>
					<td>Product/Services</td>
					<td>
					<select name="senderprodser">
						<option>--Please Select--</option>
						<option>Audio/Video</option>
						<option>Design Services</option>
						<option>Events</option>
					</select>
					</td>
				</tr>
				<tr>
					<td>Message</td>
					<td><textarea name="senderinquiry"></textarea></td>
				</tr>
				
				<tr>
					<td></td>
					<td><input type="submit" value="Submit"></td>
				</tr>
			</table>
		</form>
	</body>
</html>