<?php
session_start();
session_destroy();
print"<script>alert('Obrigado, volte sempre!');
location.href='login.php';
</script>";
exit();
?>