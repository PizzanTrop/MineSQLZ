<?php
include('conn.php');
$name = base64_encode($_POST['nameadd']);
$id = $_POST['realidadd'];
$http = $_POST['httpadd'];
if($name != '' && $id != '' && $http != ''){
$link;
mysql_select_db($db_base);
mysql_query("INSERT INTO $db_items(item, name, http) VALUES ('$id', '$name', '$http')");
}
?>
<FORM METHOD="POST">
<table>
<tr>
<td>
					Название</td><td>
					<b><input type="text" name="nameadd"></b></td></tr>
				<tr>
<td>	Ссылка на картинку</td><td>
					<input type="text" name="httpadd"><br></td></tr>
<tr>
<td>					Ид предмета</td><td>
					<input type="text" name="realidadd">
						</td></tr>
						<tr>
						<td>
<INPUT TYPE="submit"  VALUE="Добавить" class="nbutton">	
</td></tr>				
					</form>