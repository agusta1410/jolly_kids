<div id="header">
  <div> <a href="index.html"><img src="images/logo1.gif" alt=""></a>
    <ul>
      <li <?php if($page =="home"){
        echo " class='current'";
      }?>><a href="index.php">Home</a></li>
      <li <?php if($page =="services"){
        echo " class='current'";
      }?>><a href="services.php">Services</a></li>
      <li
      <?php if($page =="about"){
        echo " class='current'";
      }?>><a href="about.php">About us</a></li>
      <li
      <?php if($page =="login"){
        echo " class='current'";
      }?>><a href="login.php">Login</a></li>
      <li
      <?php if($page =="sign"){
        echo " class='current'";
      }?>><a href="sign.php">Sign Up</a></li>
      <li
      <?php if($page =="registration"){
        echo " class='current'";
      }?>><a href="registration.php">Registration Form</a></li>
      <li
      <?php if($page =="contact"){
        echo " class='current'";
      }?>><a href="contact.php">Contact us</a></li>
    </ul>
  </div>
</div>