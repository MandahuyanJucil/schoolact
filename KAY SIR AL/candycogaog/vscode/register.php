<?php   
session_start();
if(isset($_POST['submit'])){
 
      $uname=$_POST['uname'];
      $username=$_POST['username'];
      $email=$_POST['email'];
      $pass=$_POST['pass'];
      


     try{
       include_once 'database.php';

       $query="INSERT INTO users (pname,username,useremail,userpassword) VALUES(?,?,?,?);";
       $stmt= $pdo->prepare($query);

       if($username==$_SESSION['username']){
        header("location:register.php?error=usernametaken");
        die();
    }

    if($email== $_SESSION['useremail']){
        header("location:register.php?error=emailtaken");
        die();
    }
 
       $stmt->execute([ $uname,$username,$email,$pass]);
        
    
    
     }

     catch(PDOException $e){
    die("Failed Connection". $e->getMessage());
     }

}



?>













<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Document</title>
</head>
<body>

<header class="header">

</header>


<main class="main">
    <div class="mainform">
         <div class="formcontaioner">
              <h5><?php 
              if(isset($_GET["error"])){
                if($_GET["error"] =="usernametaken"){
                    echo 'UserName Taken';
                }
                else if($_GET["error"] =="emailtaken"){
                    echo 'Email Taken';
                }
                else if($_GET["error"] =="none"){
                    echo 'Register Success';
                }
            }
              ?></h5>
             <form action="register.php?error=none" method="post">
               <input type="text" placeholder="Name" name="uname">
               <input type="text" placeholder="Username" name="username">
               <input type="text" placeholder="Email" name="email">
               <input type="password" placeholder="Password" name="pass">
               <input type="Password" placeholder="ReType Password" name="repass">
               <input type="submit" name="submit">
             </form>
             <a href="index.php">main</a>
             
         </div>
    </div>
</main>

<footer class="footer">

</footer>



</body>
</html>