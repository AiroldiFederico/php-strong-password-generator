<?php
    
    //Lunghezza password
    $passLenght = $_POST['LenghtPass'];

    //Caratteri password
    $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()';
    
    //genero la stringa casuale
    function CasualString($passLenght, $caratteri ) {
        
        //dichiaro le variabili locali
        $password = '';
        $caratteri_length = strlen($caratteri);

        for ( $i = 0; $i < $passLenght; $i++ ) {

            $password .= $caratteri[rand(0, $caratteri_length - 1)];
        };

        return $password;
    };
    
    //var_dump($passLenght, CasualString($passLenght, $caratteri));



    //Creazione variabile di sessione
    session_start();
    $_SESSION['passwordgenerated'] = CasualString($passLenght, $caratteri );


    // Ridireziona l'utente a password.php
    header('Location: password.php');
    exit();

?>


