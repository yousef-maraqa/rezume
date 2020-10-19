<?php
if($_POST["message"]) {
    mail("yousefmaraqa98@gmail.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>