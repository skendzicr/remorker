<?php
if (isset($_POST['btnSubmit'])) {
     $to = 'ckehua@gmail.com'; // Use your own email address
     $subject = 'Feedback from my site';
	 $message = 'Name: ' . $_POST['first_name'] . "\r\n\r\n";
	 $message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
	 $message .= 'Telephone: ' . $_POST['telephone'] . "\r\n\r\n";
	 $message .= 'Comments: ' . $_POST['comments'];
	 $success = mail($to, $subject, $message);
}
?>
<?php if (isset($success) && $success) { ?>
<script>alert("Vaš zahtev je uspešno prosleđen.");</script>
<?php } else { ?>
<h1>Oops!</h1>
Sorry, there was a problem sending your message.
<?php } ?>