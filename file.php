<?php
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server , $username , $password);

if(!$con){
  die("connection to this databse failed due to " . mysqli_connect_error());
}
//echo "success connecting to db.";

$name = $_POST['name'];
$sql = "INSERT INTO `roll`.`roll` (`Payer won`) VALUES ('$name');";

// echo $sql;

if($con->query($sql)==true){
//  echo "Successfully inserted";
}
else{
  echo"ERROR: $sql <br> $con->error";
}
$con->close();
}
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Dicee</title>
     <link rel="stylesheet" href="styles.css">
     <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lobster" rel="stylesheet">

   </head>
   <body>

     <div class="container">
       <h1>Refresh Me</h1>

       <div class="dice">
         <p>Player 1</p>
         <img class="img1" src="images\dice6.png">
       </div>

       <div class="dice">
         <p>Player 2</p>
         <img class="img2" src="images\dice6.png">
       </div>
     </div>
     <form action="file.php" method="post">
  <p>
 <center>
   <h6>Player won :</h6>
 <textarea class="text-area" name="name" rows="5" cols="50" placeholder="                    Enter the player number who won round           "></textarea><br>
 <button class="btn">submit</button>
 </center>
  </p>
     <script src="index.js" charset="utf-8"></script>
   </body>
   </html>
