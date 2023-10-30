<?php 
$presentTime = new DateTime('2015-10-21 04:29:00');
$destinationTime = new DateTime('2023-10-31 12:00:00');

$formattedPresentTime = $presentTime->format('M-d-Y A g:i');
$formattedDestinationTime = $destinationTime->format('M-d-Y A g:i');
$interval = $presentTime->diff($destinationTime);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <div class="dateOfFutur">
        <p>
<?php 
 echo "Date de départ : $formattedPresentTime <br>";
 echo "Date de destination : $formattedDestinationTime<br>";
 echo "Interval entre les époques : ". $interval->format("%y année(s) %m mois %d jour(s) %H heure(s) %I minute(s)")
 ?>
        </p>
     </div>


    
</body>
</html>



