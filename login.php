<!DOCTYPE html>
<?php include './db_conn.php' ?>
<html >
<head>
  <meta charset="UTF-8">
  <title>Flat UI Login</title>
  
  
  <!--<script src=""></script>-->
  <link rel="stylesheet" href="flat-ui-login/css/style.css">

  
</head>

<body>
  <div id="wrap">
  <div id="regbar">
    <div id="navthing">
      <h2><a href="#" id="loginform">Login</a> | <a href="registration.php">Register</a></h2>
    <div class="login">
      <div class="arrow-up"></div>
      <div class="formholder">
        <div class="randompad">
            <form action="index.php" method="POST">
           
           <fieldset>
             <label name="email">Email</label>
             <input type="text" value="" name="username" />
             <label name="password">Password</label>
             <input type="password" name="password" />
             <input type="submit" value="Login" />
 
           </fieldset>
                 </form>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  <script  src="flat-ui-login/js/index.js"></script>

</body>
</html>
<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
