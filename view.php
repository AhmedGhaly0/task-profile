
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content ="welcome to new">
        <title>Task 3</title>
   
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <div class="link" ><a href="index.html"> Add Data</a>  <a href="update.html"> Update Data</a> <a href="delete.html"> Delete Data</a></div>
</body>
</html>        



<?php


// function connect in Data
$connect =  mysqli_connect("localhost","root","","profil");


//  select data
$alldata = [];
$selectall = " SELECT * FROM `user`";
$query = mysqli_query($connect,$selectall);
while ($result = mysqli_fetch_assoc($query)) {
    

   
    $alldata[] = $result ;
}

foreach($alldata as $key){
    foreach($key as $k => $v){

        echo "<div style =\"background :rgba(0, 0,0,4); margin:15px;  text-align:center; display:inline-block; width:300px; padding:20px 0 20px 0 ; color:white; \">".'<br>'. $k . ' : '. '<br>'. '<span style="color: rgb(230, 13, 13); display: inline-block;">'.  $v .' </span>' ."</div> " ;
        
    }
}
?>

