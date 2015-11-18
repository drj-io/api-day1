<?php
  require('inc/helpers.php');

 ?>

 <form method="POST">
  <div><input placeholder="name" name="name"/></div>
  <div><input placeholder="address" name="address"/></div>
  <div><input placeholder="alias" name="alias" /></div>
  <div><input type="submit" value="create user!"/></div>
</form>

<?php



  if(isset($_POST)){
    $response = request("http://weblab.us/users", $_POST, "POST");


    print_r($response);
  }
?>
