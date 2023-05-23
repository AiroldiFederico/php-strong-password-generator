<?php



?>

<!doctype html>
<html lang="en">
    <head>

        <title>STRONG PASSWORD GENERATOR</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <!-- Style CSS -->
        <link rel="stylesheet" href="./asset/css/reset.css">
        <link rel="stylesheet" href="./asset/css/style.css">
        <!-- <link rel="stylesheet" href="./asset/css/media-queries.css"> -->

        <!-- Font style -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">

        <!-- Icon style -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Favicon -->
        <!-- <link rel="icon" type="image/x-icon" href="./asset/img/favicon.ico"> -->

        <!-- JS Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous" defer></script>

    </head>


    <body>

        <main class="col-8 m-auto p-4 d-flex flex-column justify-content-center h-100">

            <h1>STRONG PASSWORD GENERATOR</h1>

            <form class="d-flex flex-column gap-3 align-items-start position-relative p-4 rounded bg-info bg-opacity-10 border border-info" method="POST" action="functions.php">
              
                <!-- Definisci lunghezza -->
                <div class="form-group d-flex align-items-center col-10">
                    <label for="numero" class="col-4">Password length:</label>
                    <input type="number" class="form-control w-50" id="numero" placeholder="Inserisci un numero" name="LenghtPass">
                </div>

                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkbox1" name="lettere">
                        <label class="form-check-label" for="checkbox1">Lettere</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkbox2" name="numeri">
                        <label class="form-check-label" for="checkbox2">Numeri</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkbox3" name="simboli">
                        <label class="form-check-label" for="checkbox3">Simboli</label>
                    </div>
                </div>

                <div class="form-group d-flex gap-3">
                    <label class="form-check-label" for="radio">Escludere ripetizione caratteri?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radiorepeat" id="radio1" value="option1">
                        <label class="form-check-label" for="radio1">Sì</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radiorepeat" id="radio2" value="option2">
                        <label class="form-check-label" for="radio2">No</label>
                    </div>
                </div>


                <!-- submit -->
                <button type="submit" class="btn btn-primary ms-4 position-absolute bottom-0 end-0 mb-4 me-4">Generate</button>

            </form>



        </main>

    </body>
    </html>