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
$z = 1;
$j = 3;
if (isset($_POST['cetak'])) {
  for ($i=1; $i <= $ukuran; $i++) {
    for ($a=1; $a <= $ukuran; $a++) {
      if ($a == 1 || $a == $ukuran) {
        echo "@";
      }else{
        if ($i % 2 == 0) {
          echo "&nbsp;&nbsp;&nbsp;  ";
        }else {
          if ($a == 2 && $i == 1) {
            echo "&nbsp;&nbsp;&nbsp;";
            $z = $z + 4;
          }elseif ($a == 2 && $i == $z) {
            echo "&nbsp;&nbsp;&nbsp;";
            $z = $z + 4;
          }elseif ($a == $c && $i == $j ) {
            echo "&nbsp;&nbsp;&nbsp;";
            $j = $j + 4;
          }
          else{
              echo "@";
          }
        }
      }
    }
    echo "<br>";
  }
}
