<html>
<body>
<?php
if(isset($_POST['send']))
{
echo"Nama : ".$_POST["nama"]."<br>";
echo"Alamat : ".$_POST["alamat"]."<br>";
echo"E_mail : ".$_POST["email"]."<br>";
echo"Komentar : ".$_POST["komentar"]."<br>";
}
?>
</body>
</html>