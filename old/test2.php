<!DOCTYPE html>
<html>
  <head>

  </head>
  <body>
    <?php
    if(isset($_GET['id'])){
        $userId = $_GET['id'];
    }
    echo'<script>';
    echo 'var jsUserId = "' . $userId . '";';
    echo '</script>';

    
    
    echo'
      <p id="tname"></p>.
      "<p id="p1" value="ok">okkk</p>
      '
    ?>
   
  </body>
</html>
