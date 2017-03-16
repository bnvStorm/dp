<html>
<body>
<?php
if(isset($_POST['fio']))
{
    $fio=$_POST['fio'];
}
if(isset($_POST['iin']))
{
    $iin=$_POST['iin'];
}
if(isset($_POST['tn']))
{
    $tn=$_POST['tn'];
}
if(isset($_POST['clien_id']))
{
    $client_id=$_POST['client_id'];
}
$db=mysql_connect("localhost","root","usbw");
mysql_select_db("surf",$db);
$result=mysql_query("INSERT INTO CLIENT(FIO,IIN,TN,CLIENT_ID)
VALUES
('$fio','$iin','$tn','$client_id')");
if ($result=='true')
{
    echo "Информация в базу успешно добавлена";
}
else
{
    echo "Информация в базу не добавлена";
}
?>
</body>
</html>