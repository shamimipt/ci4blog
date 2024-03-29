<p> Dear <?php echo $mail_data['user']->name; ?> </p>
<p>
	We are recevied a request to reset password for CI4BLOG account associated with <i><?php echo $mail_data['user']->email; ?></i>
	you can reset your password by clicking the button blew:
	<br><br>
	<a href="<?php echo $mail_data['actionLink']; ?>">Reset Password</a>
	<br><br>
	<b>NB:</b> This link will still valid within 15 minutes
	<br><br>
	If you did not request for password reset, Please ignore this email.
</p>