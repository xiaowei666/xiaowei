<?php
include "db.php";
$name = $_POST["name"];
$mess = $_POST["mess"];
$sql = "insert into ('name','pass') where ('{$name}','{$mess}')";
$result = mysql_query($sql);
if(mysql_fetch_array($result)>0){
	echo "<script>alert('注册成功');location href = './index.html'; </script>"
}else{
	echo "<script>alert('注册失败');</script>"
}

?>