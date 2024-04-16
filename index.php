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

    $vote = isset($_POST['vote']) ? $_POST['vote'] : 0;

    if(!isset($_POST['parking'])){
        foreach($filtered_hotels as $hotels){
            if($hotel['vote'] >= $vote){
                $filtered_hotels[] = $hotel;
            }
        }
    }else{
        foreach($hotels as $hotel){
            if($hotel['parking'] && $hotel['vote'] >= $vote){
                $filtered_hotels[] = $hotel;
            }
        }
    };

    $vote = isset($hotel['vote']) ? $hotel['vote'] : 0;
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
    <h4 class="text-center">Filtri:</h4>

    <form action="index.php" method="POST">
        <div class="text-center">

        <div class="my-3">
            <input class="form-check-input" type="checkbox" value="Parcheggio" id="parking" name="parking">
            <label for="parking">Solo con parcheggio</label>
        </div>
            
        <div class="my-3">Voto:
            <?php for($i = 0; $i <= 5; $i++): ?>
                <input class="form-check-input" type="radio" name="vote" id="vote<?php echo $i ?>" value="<?php echo $i ?>">
                <label class="form-check-label me-2 " for="vote<?php echo $i ?>"><?php echo $i ?></label>
                <?php endfor ?>
        </div>
        </div>
    </form>
    
    <div class="container my-5  text-center">

        <div class="row row-cols-3 gap-1 d-flex justify-content-center">
                
            <?php foreach ($hotels as $hotel) { ?>
                <div class="card col-4" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $hotel['name']; ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $hotel['description']; ?></h6>
                        <h6>Parcheggio: <?php echo ($hotel['parking']) ? 'Si' : 'No'; ?></h6>
                        <h6 class="card-title">Voto: <?php echo $hotel['vote']; ?></h6>
                        <h6 class="card-title">Distanza dal centro: <?php echo $hotel['distance_to_center']; ?> Km</h6>
                    </div>
                </div>
            <?php } ?>

        </div>

    </div>

  
</body>
</html>