<?php
include_once('mysql-fix.php');
  $nomeutente = $_POST['user'];
  $password = $_POST['pass'];

  $nomeutente = stripcslashes($nomeutente);
  $passoword = stripcslashes($password);

  mysql_connect("localhost", "root", "");
  mysql_select_db("login");

  $result = mysql_query("select * from utenti where username = '$nomeutente' and password = '$password'")
    or die("Failed to query database".mysql_error());

  $row = mysql_fetch_array($result);

  if($row['username'] == $nomeutente && $row['password'] == $password){
    echo "Login success! Welcome ";
  }else{
    echo "Failed to login!";
  }

 ?>
