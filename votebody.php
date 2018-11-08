<?php $thisPage = "Vote";
session_start();
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
                  <br><br>
                      City: " . htmlentities($destination['city']) . "<br>
                      State: " . htmlentities($destination['state']) . "<br>
                      Country: " . htmlentities($destination['country']) . "<br><br>


                      <hr>
          </td>
<td>
<input type="."radio"." name="."votedestination"." value="."id"."> <br>
        </td>
        </tr>";
        }

    ?>
  </table>
<br>
  <button type="submit" value="Submit Vote" name="SubmitVote">Submit Vote</button>
</form>
</body>
</div>
</html>
