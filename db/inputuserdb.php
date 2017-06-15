<?php

$db = new SQLite3('m4.db');
?>
<form action="inputuserdb.php" method="post">
 <p>login: <input type="text" name="login" /></p>
 <p>password: <input type="password" name="pass" /></p>
 <p><input type="submit" /></p>
</form>

<?php
$login=htmlspecialchars($_POST['login']);
echo  $login; ?> </br>
<?php
$pass=md5(htmlspecialchars($_POST['pass']));
echo $pass; 
$sql="insert into user(username,passord) values(".$login.",".$pass.")";
//$db->exec("insert into user(username,passord) values(".htmlspecialchars($_POST['login']).",".md5(htmlspecialchars($_POST['pass'])).")");
$result=$db->query($sql);
if($result) {echo "OK!";}
?>