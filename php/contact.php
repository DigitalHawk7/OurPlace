<?php
if($_POST["message"]) {
    mail("ourplaceiowa@gmail.com", "Contact Form", $_POST["contact us"], "From: ourplaceiowa.com");
}
?>
