<?php
    
    //Lunghezza password
    $passLenght = $_POST['LenghtPass'];

    //Caratteri password
    $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()';
    $caratteriNumeri = '0123456789';
    $caratteriLettere = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $caratteriSimboli = '!@#$%^&*()';

    //Filtri
    $lettere = isset($_POST['lettere']) ? $_POST['lettere'] : false;
    $numeri = isset($_POST['numeri']) ? $_POST['numeri'] : false;
    $simboli = isset($_POST['simboli']) ? $_POST['simboli'] : false;
    
//Genero stringa caratteri
function characterstring($lettere, $numeri, $simboli) {
        $caratteri = '';

        if ($lettere && $numeri && $simboli) {
                $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
        } elseif ($lettere && $numeri) {
                $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        } elseif ($lettere && $simboli) {
                $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()';
        } elseif ($numeri && $simboli) {
                $caratteri = '0123456789!@#$%^&*()';
        } elseif ($lettere) {
                $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        } elseif ($numeri) {
                $caratteri = '0123456789';
        } elseif ($simboli) {
                $caratteri = '!@#$%^&*()';
        }

        return $caratteri;
}
        
$caratteriGenerati = characterstring($lettere, $numeri, $simboli);
    
    //genero la stringa casuale
    function CasualString($passLenght, $caratteriGenerati ) {
        
        //dichiaro le variabili locali
        $password = '';
        $caratteri_length = strlen($caratteriGenerati);

        for ( $i = 0; $i < $passLenght; $i++ ) {

            $password .= $caratteriGenerati[rand(0, $caratteri_length - 1)];
        };

        return $password;
    };
    
    //var_dump($passLenght, CasualString($passLenght, $caratteri));



    //Creazione variabile di sessione
    session_start();
    $_SESSION['passwordgenerated'] = CasualString($passLenght, $caratteriGenerati );


    // Ridireziona l'utente a password.php
    header('Location: password.php');
    exit();

?>


