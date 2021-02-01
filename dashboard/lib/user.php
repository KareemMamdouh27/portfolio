<?php

class user{

  public function connection()
  {
    return mysqli_connect("localhost","root","","porfolio");
  }

  public function addNewUser($name , $email , $password)
  {
    $sql= "INSERT INTO `user` (`name`,`email`,`password`) VALUES ('$name' , '$email' , '$password')";
    mysqli_query($this->connection() , $sql); 
  
    $res = mysqli_affected_rows($this->connection());
  
    if($res == 1){
      return true;
    }else {
      return false;
    }
  }

  public function login($email,$password)
  {
  $con = mysqli_connect("localhost","root","","porfolio");

  $sql= "SELECT * FROM `user` WHERE `email` = '$email' && `password` = '$password' ";
  
  $q = mysqli_query($this->connection() , $sql); 
  $res = mysqli_fetch_assoc($q);
  print_r($res);

  return $res;
  }

}


?>