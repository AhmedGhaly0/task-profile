<?php


// function connect in Data
$connect =  mysqli_connect("localhost","root","","profil");





// start code update db 
if(isset($_POST['username'])){
    // var
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];

    $updatequery = " UPDATE  `user` SET `username`='$username' , `password` = '$password' WHERE `id` = $id ";
      
    mysqli_query($connect,$updatequery);


    $result = mysqli_affected_rows($connect);

    if ($result == 1) {
        # code...
        header('LOCATION:index.html');
            
    }else{
        echo '<div style="width:500px; margin:150px auto; padding-top:100px; font-size:40px; height:200; background:black; color:red; text-align: center;"> ERROR !</div>';
        
    }
}