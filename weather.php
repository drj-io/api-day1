<?php include('inc/helpers.php'); ?>

<form method="post">

  <input name="city" placeholder="city" />
  <input type = "submit" />
</form>

<?php

  if($_SERVER['REQUEST_METHOD'] == "POST"){
    $url = "http://api.openweathermap.org/data/2.5/forecast?q=".urlencode($_POST['city'])."&mode=json&appid=2de143494c0b295cca9337e1e96b00e0&units=imperial";
    $response = request($url,null, "GET");

    print "<pre>".print_r($response->list[0]->main->temp, true)."</pre>";
  }

 ?>
