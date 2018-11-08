<?php $thisPage = "Vote";

require_once "Dao.php";
$dao = new Dao();
$destinations = $dao->getDestination();

?>

<html>

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

</html>
