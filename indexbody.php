
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

      <form method = POST action = 'Loginhandler.php'>
          <h5>
            Username:
            <input type= "text" placeholder = "username here" name = "username"><br>
          Password:
          <input type= "password" placeholder = "password here" name = "password" ><br>
          <button type= "submit" value = "CreateAccount" name ="CreateButton"> Create Account</button>
          <button type= "submit" value = "Login" name="LoginButton"> Login</button>
      </form>
    </div>
  </body>
