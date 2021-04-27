

<?php
  $month=array("", "Jan", "Fev", "Mar", "Avr", "Mai", "Jui", "Jui", "Aou", "Sep", "Oct", "Nov", "Dec");
  $presentTime = new DateTime('now');
  $destinationTime = new DateTime('2021-01-14 10:56');

  $interval = new DateTime();
  $interval = $presentTime->diff($destinationTime);

  $presentTimeMinutes = strtotime($presentTime->format('Y-m-d-H-m'));
  $destinationTimeMinutes  = strtotime($destinationTime->format('Y-m-d-H-m'));
  $diffMinutes = ($destinationTimeMinutes-$presentTimeMinutes) / 60;
  $carburants = abs($diffMinutes / 10000);

  if ($presentTime->format('H')>12){
      $presentTimeAmPm = 'Pm';
  } else {
      $presentTimeAmPm = 'Am';
  }
  if ($destinationTime->format('H')>12){
      $destinationTimeAmPm = 'Pm';
  } else {
      $destinationTimeAmPm = 'Am';
  }
  if ($interval->h > 12){
    $intervalAmPm = 'Pm';
  } else {
    $intervalAmPm = 'Am';
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
  <H1>Retour vers le futur</H1>
  <section class="dashbord">
    <table>
      <tbody>
        <tr>
          <th>Month</th>
          <th>Day</th>
          <th>year</th>
          <th>am/pm</th>
          <th>Hour</th>
          <th>Min</th>
        </tr>
        <tr class="destinationTime">
          <td><?=$destinationTime->format('m')?></td>
          <td><?=$destinationTime->format('d')?></td>
          <td><?=$destinationTime->format('Y')?></td>
          <td><?=$destinationTimeAmPm?></td>
          <td><?=$destinationTime->format('h')?></td>
          <td><?=$destinationTime->format('i')?></td>
        </tr>
      </tbody>
    </table>
        <label>destination time</label>
    <table>
      <tbody>
        <tr>
          <th>Month</th>
          <th>Day</th>
          <th>year</th>
          <th>am/pm</th>
          <th>Hour</th>
          <th>Min</th>
        </tr>
        <tr class="presentTime">
          <td><?=$presentTime->format('m')?></td>
          <td><?=$presentTime->format('d')?></td>
          <td><?=$presentTime->format('Y')?></td>
          <td><?=$presentTimeAmPm?></td>
          <td><?=$presentTime->format('h')?></td>
          <td><?=$presentTime->format('i')?></td>
        </tr>
      </tbody>
    </table>
    <label>present time</label>
    <table>
      <tbody>
          <tr>
            <th>Month</th>
            <th>Day</th>
            <th>year</th>
            <th>am/pm</th>
            <th>Hour</th>
            <th>Min</th>
          </tr>
          <tr class="presentTime">
            <td><?= $interval->m; ?></td>
            <td><?= $interval->d; ?></td>
            <td><?= $interval->y; ?></td>
            <td><?= $intervalAmPm; ?></td> 
            <td><?= $interval->h; ?></td>
            <td><?= $interval->i; ?></td>
          </tr>
        </tbody>
      </table>
    <label>difference</label>
  </section>
  <p>Entre c'est 2 dates il y a un ecart de : <?= $diffMinutes ?> minutes et donc il aurait realisé <?= $carburants ?> pleins.</p> 
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>

