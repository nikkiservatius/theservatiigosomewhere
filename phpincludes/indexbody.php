<?php session_start(); ?>

<body>

    <div class = "bodytext">

      Sign up to participate in voting!

      <?php if (isset($_SESSION['messages'])) {
  foreach ($_SESSION['messages'] as $message) {?>
      <div class="message">
      <?php echo $message; ?></div>
<?php  }
 unset($_SESSION['messages']);
?>

<?php } ?>

      <form action = "phpincludes/Loginhandler.php" method = "POST">
          <h5>
            Username:
            <input type= "text" placeholder = "username here" name = "username" >
          </h5>
          Password:
          <input type= "text"><br>
          <input type= "submit" value = "CreateAccount">
          <input type= "submit" value = "Login">
      </form>
    </div>
  </body>
