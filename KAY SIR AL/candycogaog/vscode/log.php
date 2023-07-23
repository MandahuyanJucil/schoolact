

<?php          

      include 'database.php';
    
       $query ="SELECT * FROM  users";
       $stm=$pdo->prepare($query);
       $stm->execute();

       $result= $stm->fetchAll();
       
        if(isset($_POST["logsubmit"])){
          $username=$_POST['username'];
          $email=$_POST['email'];
          $pass=$_POST['pass'];

          if($result){
            foreach($result as $row){
              if($username == $row['username']){
                   if( $pass == $row['userpassword']){
                      session_start();
                     $_SESSION['name']=$row['pname'];
                     $_SESSION['username']=$row['username'];
                     $_SESSION['useremail']=$row['useremail'];
                     $_SESSION['id']=$row['id'];
                    header("location:index.php?loginSuccess=".$_SESSION['id']."");
                   }
                 
                   
              }   
              
            }
            if(!isset($_SESSION['id'])){
              header("location:log.php?error=invalidusername");
            }

        }
      
     }
    
    ?>



 















<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<title>HTML5 Login Form with validation Example</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="css/login.css">

</head>
<body background="images/bg3.jpg">

  <main class="main">
<div id="login-form-wrap">

    <div class="top__section">
        <h2>Login</h2>
        <?php 
        if(isset($_GET['error'])){
            if($_GET['error']=="invalidusername"){
              echo'<h2>Wrong Username</h2>';
            }
        }
       
        ?>
        <P></P>
       <!--  <i style='font-size:24px' class='fab'>&#xf09a;</i>
        <i style='font-size:24px' class='fab'>&#xf082;</i>
        <i style='font-size:24px' class='fab'>&#xf082;</i> -->
        <br>
        <p></p>
    </div>
      
    <form id="login-form" action="log.php" method="post">
    
  <div class="inputs">
    <div class="usernameinputs1">
          <input type="text" id="username" name="username" placeholder="Username" required><i class="validation">
          </div>

          <div class="usernameinputs2">
          <input  type="password" id="email" name="pass" placeholder="Password" required><i class="validationss">
          </div>  
          <input class="loginbtn" type="submit" id="login" name="logsubmit" value="Login">
          <br>
<div class="regiter_container">
         <input type="checkbox" id="rememberme"><label class="marginrememberme" for="rememberme">Remember me </label>

  </div>
          
    </form>
    
    <p class="not">Not a member?<a href="register.php"  class="member">Register</a></p>
    </div>
    <a href="index.php"><h4>Back to main</h4></a>
</div>


</main>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-80520768-2" type="dfa2647a99c649226aacfc9c-text/javascript"></script>
<script type="dfa2647a99c649226aacfc9c-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-80520768-2');
</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3890417145988448" crossorigin="anonymous" type="dfa2647a99c649226aacfc9c-text/javascript"></script>

<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3890417145988448" data-ad-slot="1824421207" data-ad-format="auto" data-full-width-responsive="true"></ins>
<script type="dfa2647a99c649226aacfc9c-text/javascript">
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-80520768-2" type="dfa2647a99c649226aacfc9c-text/javascript"></script>
<script type="dfa2647a99c649226aacfc9c-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-80520768-2');
</script><script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="dfa2647a99c649226aacfc9c-|49" defer></script></body>
</html>
