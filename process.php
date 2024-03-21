<?php
$username=$_POST['username'];
$password=$_POST['password'];

//to prevent mysql injection
$username=stripslashes($username);
$password=stripslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);
//connect to server and database
mysql_connect("localhost","root","");
mysql_select_db("login"); 
//query the database for user
if(isset($_POST['username'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];
}
$sql="select * from 'loginform' where 'username'='$username' AND password='$password' ";
$result=mysql_query($sql);
if(mysql_num_rows($result)==1){
    echo "login sucessful";
    exit();
}
else{
    echo "login failed";
    exit();
}
?>    