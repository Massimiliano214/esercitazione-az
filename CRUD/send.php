<?php

    require_once 'db_connection.php';
    require_once '../Models/user.php';

    $user = new User($pdo);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get user information from form
        $newName = $_POST['name_user'];
        $newSurname = $_POST['surname_user'];
        $newEmail = $_POST['register_mail'];
        $newCv = $_POST['register_cv'];

        // Check if required fields are empty
        if (empty($newName) || empty($newSurname) || empty($newEmail) || empty($newCv)) {
            echo "<script>
                    alert('Invio Fallito. Compila tutti i campi obbligatori.');
                    document.location.href = '../index.php';
                </script>";
        } else {
            // Insert the new user into the database using the user 
            if ($user->createUser($newName, $newSurname, $newEmail, $newCv)) {
                header("Location: ../index.php?show_alert=true");
                exit;
            } else {
                echo "<script>
                        alert('Invio Fallito');
                        document.location.href = '../index.php';
                    </script>";
            }
        }
    }
?>


if ($insertStmt->execute()) {
                header("Location: ../index.php?show_alert=true");
                exit;
            } else {
                echo "<script>
                    alert('Invio Fallito');
                    document.location.href = '../index.php';
                </script>";
        }   }