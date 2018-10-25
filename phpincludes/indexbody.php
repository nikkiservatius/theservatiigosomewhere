
<?php session_start(); ?>

<body>

    <div class = "bodytext">

      Sign up to participate in voting!

      <?php if (isset($_SESSION['messages'])) {
          foreach ($_SESSION['messages'] as $message) {?>
            <div id = "error">
              <?php echo $message; ?>
            </div>

            <?php  }
            unset($_SESSION['messages']);
            ?>
          <?php } ?>

      <form method = POST action = "phpincludes/Loginhandler.php">
          <h5>
            Username:
            <input type= "text" placeholder = "username here" name = "name"><br>
          Password:
          <input type= "password" placeholder = "password here" name = "password" ><br>
          <input type= "submit" value = "CreateAccount" name ="CreateButton">
          <input type= "submit" value = "Login" name="loginButton">
      </form>
    </div>
  </body>
