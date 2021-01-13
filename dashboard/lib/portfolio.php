<?php


function addNewPro($image , $desc , $user_id){
    $con = mysqli_connect("localhost","root","","porfolio");

    $sql= "INSERT INTO `portfolio` (`image`,`description`,`user_id`) VALUES ('$image' , '$desc' , '$user_id')";
    mysqli_query($con , $sql); 
  
    $res = mysqli_affected_rows($con);
  
    if($res == 1){
      return true;
    }else {
      return false;
    }
}


function getPortfolios() {
    $con = mysqli_connect("localhost","root","","porfolio");

    $sql= "SELECT * FROM `portfolio`";
    $q = mysqli_query($con , $sql); 

    $projects = [];

    while($res = mysqli_fetch_assoc($q)){
        $projects[] = $res;
    }
    return $projects;
}

