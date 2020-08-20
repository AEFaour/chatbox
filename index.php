<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>
    <script src="assets/chatbox.js"></script>
</head>
<body>
<header class="bg-dark text-light text-center py-3">
    <h1>ChatBox v 1.0</h1>
</header>
<main class="container">
    <div class="row">
        <div class="col my-4 border rounded" id="messages">


        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="" method="post">

                <div class="form-row">
                    <div class="form-group col-3">
                        <input type="text" class="form-control" id="pseudo"
                               value="<?php echo 'Pseudo' .uniqid() ?>">
                    </div>
                    <div class="form-group col-7">
                        <input type="text" class="form-control" id="message">
                    </div>
                    <div class="form-group col-2">
                        <input type="submit" class="btn btn-danger" id="btnEnvoyer" value="Envoyer">
                    </div>
                </div>
            </form>
        </div>

    </div>
</main>
<footer class="bg-dark text-light text-center py-3 w-100">
    &copy; <?php echo date('Y') ?> - chatbox - tous droits reservés
</footer>
</body>
</html>
