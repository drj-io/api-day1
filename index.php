<?php


error_reporting(0);
//$data_string = json_encode($data);

$ch = curl_init('http://weblab.us/users');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);

$result = curl_exec($ch);


$json = json_decode( $result );



?>

<table>
  <?php  forEach($json as $row){  ?>
    <tr>
      <td>
        <?= $row->name ?>
      </td>


      <td>
        <?= $row->alias ?>
      </td>

      <td>
        <?= $row->address ?>
      </td>
    </tr>


    <?php } ?>

</table>
