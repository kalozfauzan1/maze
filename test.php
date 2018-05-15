<form method="post">
  <table>
    <tr>
      <td>Input Ukuran : </td>
      <td><input type="text" name="ukuran" value=""></td>
    </tr>
    <tr>
      <td><input type="submit" name="cetak" value="cetak"></td>
    </tr>
  </table>
</form>
<?php
error_reporting(0);
$ukuran = $_POST['ukuran'];
$c = $ukuran - 1;
if (isset($_POST['cetak'])) {
  for ($i=1; $i <= $ukuran; $i++) {
    for ($a=1; $a <= $ukuran; $a++) {
      if ($a == 1 || $a == $ukuran) {
        echo "0";
      }else{
        if ($i % 2 == 0) {
          echo "&nbsp;&nbsp;";
        }else {
          if ($a == 2 && $i == 1) {
            echo "&nbsp;&nbsp;";
          }elseif ($a == 2 && $i % 5 == 0) {
            echo "&nbsp;&nbsp;";
          }elseif ($a == $c && $i % 3 == 0 ) {
            echo "&nbsp;&nbsp;";
          }
          else{
              echo "0";
          }
        }
      }
    }
    echo "<br>";
  }
}
