<?php
require_once 'db_connection.php';
require_once '../Models/user.php';

$user = new User($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $newName = $_POST['name_user'];
    $newSurname = $_POST['surname_user'];
    $newEmail = $_POST['register_mail'];
    $newCv = $_POST['register_cv'];

    
    if (empty($newName) || empty($newSurname) || empty($newEmail) || empty($newCv)) {
        // echo json_encode(['status' => 'error', 'message' => 'Compila tutti i campi obbligatori.']);
        exit;
    }

    // API call
    $codice_tessera = $newCv;
    $api_url = "https://www.aicod.it/test_data/user_info.php?codice_tessera=$codice_tessera";
    $api_response = file_get_contents($api_url);
    $api_data = json_decode($api_response, true);

    
    if ($api_data && isset($api_data['success']) && $api_data['success'] === true) {
        
        $userType = $api_data['user_type'];

        if ($userType === 'subscriber') {
            
            $user->createUser($newName, $newSurname, $newEmail, $newCv);

            echo "<script>
                    alert('Invio dati completo: Subscribed');
                    document.location.href = '../index.php';
                </script>";

        } elseif ($userType === 'unsubscriber') {
            
            $user->createUser($newName, $newSurname, '', '');

            echo "<script>
                    alert('Invio dati parziale: Unsubscriber');
                    document.location.href = '../index.php';
                </script>";
                
        } elseif ($userType === 'blocked') {
            
            echo "<script>
                    alert('Invio dati nullo: Blocked');
                    document.location.href = '../index.php';
                </script>";

        } else {
            echo "<script>
                    alert('Errore chiamata');
                    document.location.href = '../index.php';
                </script>";
        }
    } else {
        
        echo "<script>
                    alert('Errore ');
                    document.location.href = '../index.php';
                </script>";

    }

    echo json_encode($phpResponse);
} else {
    
    echo "<script>
            alert('Errore ');
            document.location.href = '../index.php';
        </script>";
}
?>
