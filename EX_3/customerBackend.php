
<?php

echo "<link rel='stylesheet' type='text/css' href='styles.css' />";
$user= $_POST["u_name"];
$pass= $_POST["u_pass"];
echo "<h1> Welcome, purchase processed for: <br> </h1>";
echo "<h2>Username: ".$user. "<br> </h2>";
echo "<h2>Password: ".$pass."<br></h2>";
echo "<h2>Receipt: <br></h2>";

$var1 = $_POST["necklace"];
$var2 = $_POST["dress"];
$var3 = $_POST["shirt"];
$var4 = $_POST["myRadio1"];
$ship=0;


echo '<table>
  <tr>
  <th> </th>
  <th>Quantity</th>
  <th>Cost Per Item</th>
  <th>Sub Total</th>
  </tr>
  <tr>
    <td>Item 1</td>
    <td>', $var1, '</td>
    <td>$25.00</td>
    <td>', "$".($var1*25).".00". '</td>
  </tr>
  <tr>
    <td>Item 2</td>
    <td>', $var2, '</td>
    <td>$30.00</td>
    <td>', "$".($var2*30).".00". '</td>
  </tr>
  <tr>
    <td>Item 3</td>
    <td>', $var3, '</td>
    <td>$15.00</td>
    <td>', "$".($var3*15).".00". '</td>
  </tr>';
  if ($var4==1)
  {
    $ship=0;

    echo'<tr>
      <td>Shipping</td>
      <td colspan=2>Free 7 day </td>
      <td>', "$".$ship.".00". '</td>
    </tr>';
  }
  if ($var4==2)
  {
    $ship=50;

    echo'<tr>
      <td>Shipping</td>
      <td colspan=2>Over night</td>
      <td>', "$".$ship.".00". '</td>
    </tr>';
  }
  if ($var4==3)
  {
    $ship=5;

    echo'<tr>
      <td>Shipping</td>
      <td colspan=2>Three day</td>
      <td>', "$".$ship.".00". '</td>

    </tr>';
  }
  echo'<tr>
  <td colspan=3 align="center" bgcolor="lightgreen">Total Cost: </td>
    <td>', "$".($var1*25+$var2*30+$var3*15+$ship).".00". '</td>
  </tr>';


'</table>';

?>
