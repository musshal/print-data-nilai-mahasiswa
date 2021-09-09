<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Print Data Nilai Mahasiswa</title>
</head>
<body>
  <?php 
    $array_mhs = array(
      'Abdul' => array(89, 90, 54),
      'Budi' => array(78, 60, 64),
      'Nina' => array(67, 56, 84),
      'Budi' => array(87, 69, 50),
      'Budi' => array(98, 65, 74)
    );

    function hitung_rata($array) {
      $sum = 0;

      for ($i = 0; $i < count($array); $i++) {
        $sum += $array[$i];
      }

      $rerata = $sum / count($array);

      return $rerata;
    }

    function print_mhs($array_mhs) {
      echo '<table border="1">';
      echo '<tr>
              <td>Nama</td>
              <td>Nilai 1</td>
              <td>Nilai 2</td>
              <td>Nilai 3</td>
              <td>Rata2</td>
            </tr>';

      foreach ($array_mhs as $name => $nilai) {
        echo '<tr>';

        echo '<td>'.$name.'</td>';
        echo '<td>'.$nilai[0].'</td>';
        echo '<td>'.$nilai[1].'</td>';
        echo '<td>'.$nilai[2].'</td>';
        echo '<td>'.hitung_rata($nilai).'</td>';
      }

      echo '</table>';
    }

    print_mhs($array_mhs);
   ?>
</body>
</html>
