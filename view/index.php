<center>
<?php
include('conn.php');
 mysql_connect($host_cms, $user_cms, $pass_cms);
 mysql_select_db($db_cms);
 $row = mysql_query("SELECT * from $table_cms where user_id='$uid'");
 $sql = mysql_fetch_array($row);
 $realpass = $sql['password'];
 $name = $sql['name'];
 if(md5($password) == $realpass) {

 $uname = $name; 
 $link = mysql_connect($db_host, $db_user, $db_pass);
 ?>
<?Php 
echo "Привет $uname , вот твоя таблица вещей!";
$link;
mysql_select_db($db_base);
$row = mysql_query("SELECT * FROM $db_table where playername='$uname'");
?>
<table border="1">
<?php
while($sql = mysql_fetch_array($row)){
$id = $sql['itemid'];
$subid = $sql['itemsubid'];
if($subid != '0' && $subid != NULL){
$did = $id.":".$subid;
}
else{
$did = $id;
}
echo $did;
$amount = $sql['amount'];
$key = $sql['keyint'];
$sql1 = mysql_query("SELECT * from $db_items where item='$did'");
$row1 = mysql_fetch_assoc($sql1);
if($row1 != ''){
$http = $row1['http'];
$name = base64_decode($row1['name']);

echo "<tr><td><img src=\"$http\" height=\"35px\" wight=\"35px\"></td><td>$name</td><td>Количество $amount шт.</td><td>Для получения введите /imsql get $key</td></tr>";
}

else {
echo "<tr><td>No img</td><td>Ид $did</td><td>Количество $amount шт.</td><td>Для получения введите /imsql get $key</td></tr>";}
}
}
else {
echo "Пожалуйста авторизуйтесь!";
}
?>
</table>
</center>