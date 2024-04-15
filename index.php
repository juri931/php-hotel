<?php
  $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css' integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==' crossorigin='anonymous'/>
  <title>PHP Hotel</title>
</head>
<body>
    <h1 class="text-center">PHP Hotel</h1>
    <h3 class="text-center">Lista hotel</h3>
    
    <div class="container m-5 text-center">

        <div class="row row-cols-3  d-flex justify-content-center">
                
            <?php foreach ($hotels as $hotel){
            echo '<div class="card col-4" style="width: 18rem;">' 
                . '<div class="card-body">' 
                    . '<h5 class="card-title">' . $hotel['name'] . '</h5>' 
                    . '<h6 class="card-subtitle mb-2 text-muted">' . $hotel['description'] . '</h6>' 
                    . '<h6>Parcheggio: ' . $hotel['parking'] = ($hotel['parking']) ? 'Si' : 'No' . '</h6>' 
                    . '<h5 class="card-title">Voto: ' . $hotel['vote'] . '</h5>' 
                    . '<h5 class="card-title">Distanza dal centro: ' . $hotel['distance_to_center'] . ' Km' . '</h5>' 
                . '</div>' 
            . '</div>';
            }?>

        </div>

    </div>

  
</body>
</html>