<?php


// Check if user is logged in
if (!isset($_SESSION['username'])) {
    echo '<div style="position: absolute; top: 10px; right: 10px">
    <form method="post" action="login.php">
      <input type="submit" value="Log in" name="login" />
    </form>
  </div>';
}
else{
    echo '<div style="position: absolute; top: 10px; right: 10px">
        <form method="post" action="bcknd/logout.php">
          <input type="submit" value="Logout" name="logout" />
        </form>
      </div>';}
?>
