<?php $thisPage = "Destinations";

if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
		header('Location: index.php');
		exit;
	}

require_once "Dao.php";
$dao = new Dao();
$destinations = $dao->getDestination();

?>

<html>
<div class = "bodytext">
<body>
  <table>

    <?php

      foreach ($destinations as $destination)
        {
          echo "<tr>
                  <td>
                      City: " . htmlentities($destination['city']) . "<br>
                      State: " . htmlentities($destination['state']) . "<br>
                      Country: " . htmlentities($destination['country']) . "<br><br>
                      <hr>
          </td>
        </tr>";
        }

    ?>
  </table>
</body>
</div>
</html>
