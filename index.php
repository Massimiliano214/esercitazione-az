<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invio Form</title>
    <link rel="stylesheet" type="text/css" href="./assets/styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link>
</head>

<body>
    <header>
        <div class="head_space">
            <img class="logo" src="assets/images/logo.png" alt="logo azienda">
        </div>
    </header>

    <main class="main_box">
        <div class="option">
            <h2 class="my_title">Invio Campi</h2> </br>
        </div>

        <div class="info_user">

            <form action="CRUD/send.php" method="post" id="send_site">

                <label for="name_user">
                    <h4 class="title">inserisci nome</h4>
                </label>
                <div class="text_style">
                    <input id="name_user" name="name_user" class="my_input" type="text" placeholder="Mario">
                    <span id="name-error" class="error-message"></span>
                </div>

                <label for="surname_user">
                    <h4 class="title">inserisci cognome</h4>
                </label>
                <div class="text_style">
                    <input id="surname_user" name="surname_user" class="my_input" type="text" placeholder="Rossi">
                    <span id="surname-error" class="error-message"></span>
                </div>

                <label for="register_mail">
                    <h4 class="title">inserisci l'e-mail</h4>
                </label>
                <div class="text_style">
                    <input id="register_mail" name="register_mail" class="my_input" type="email" placeholder="name@example.com">
                    <span id="mail-error" class="error-message"></span>
                </div>

                <label for="register_cv">
                    <h4 class="title">inserisci il codice tessera</h4>
                </label>
                <div class="text_style">
                    <input id="register_cv" name="register_cv" class="my_input" type="text" placeholder="MRARSS80L06F205O">
                    <span id="cv-error" class="error-message"></span>
                </div>


                <div class="my_login">
                    <button type="submit" class="login_bt">Invia</button>
                </div>
            </form>

        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>