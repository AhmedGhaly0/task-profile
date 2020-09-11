<?php

// function connect in Data
$connect =  mysqli_connect("localhost","root","","profil");


// var 







// start code insert db

if(!empty($_POST['username'])){

  
  //  var 
  $username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
  

  $insertquery = "INSERT INTO `user` (`username`,`email`,`password`) VALUES ('$username','$email','$password')";



  mysqli_query($connect,$insertquery);

  
  $result = mysqli_affected_rows($connect);

  if ($result == 1) {
      # code...
      header('LOCATION:index.html');
          
  }else{
      echo '<div style="width:500px; margin:150px auto; padding-top:100px; font-size:40px; height:200; background:black; color:red; text-align: center;"> ERROR !</div>';
      
  }


}


// start code delete db 

if(!empty($_POST['id'])){

  //  vra 
  $id= $_POST['id'];

$deletequery = " DELETE FROM `user` WHERE `id` =$id";
  
mysqli_query($connect,$deletequery);


$result = mysqli_affected_rows($connect);

if ($result == 1) {
    # code...
    header('LOCATION:index.html');
        
}else{
    echo '<div style="width:500px; margin:150px auto; padding-top:100px; font-size:40px; height:200; background:black; color:red; text-align: center;"> ERROR <br> Undefined : id </div>';
    
}


}











































