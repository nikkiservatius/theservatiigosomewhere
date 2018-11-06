<?php
session_start();


$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];

$destinations = array();

$bad = false;
if (strlen($city) == 0) {
  $_SESSION['destinations'][] = "City is required.";
  $bad = true;
}
if ($country) == United States) {
  $_SESSION['destinations'][] = "State is required because you choose the United States";
  $bad = true;
}
if (strlen($country) == 0) {
  $_SESSION['destinations'][] = "Country is required.";
  $bad = true;
}
if ($bad) {
  header( "Location: ../Destinations.php");
  $_SESSION['validated'] = 'bad';
  exit;
}

<?php if (isset($_SESSION['destinations'])) {
    foreach ($_SESSION['destinations'] as $destinations) {?>
      <div id = "error">
        <?php echo $destinations; ?>
      </div>

      <?php  }
      unset($_SESSION['destinations']);
      ?>
    <?php } ?>
// Got here, means everything validated, and the comment will post.

require_once 'Dao.php';
$dao = new Dao();
$dao->saveLogin($city, $state, $country);
header('Location: ../Destinations.php');
exit;
?>
