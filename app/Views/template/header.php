<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titânium Veículos</title>
    <link href='<?php base_url() ?>/css/style.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/71d37f4069.js" crossorigin="anonymous"></script>
    <style>
        .modal-fullscreen{
            width: 25vw;
            float: right;
        }
        #header{
            height: 10vh;
        }
    </style>
</head>
<body class='bg-light'>
    <div class="row bg-dark border-bottom border-danger border-3" id='header'>
        <div class="col-5 offset-1 text-white ">
            <h3>Titânium Veículos</h3>
        </div>
        <div class="col-1 offset-3 text-danger">
            <button type="button" class="btn border-danger text-white col-12 border-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Menu</button>
        </div>
        <div class="col-1 text-danger">
            <a class="btn border-danger text-white col-12 border-3" href='login'>Cadastro</a>
        </div>
        <div class="col-1 text-danger">
            <a class="btn border-danger text-white col-12 border-3" href='usuario'>Login</a>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
            <div class="modal-header border-bottom border-danger bg-dark text-white border-3">
                <h5 class="modal-title" id="exampleModalLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <a class='nav' href="home">Home</a>
                <a class='nav' href="sobre">Quem Somos</a>
                <a class='nav' href="contato">Contato</a>
                <a class='nav' href="veiculo">Veículos</a>
            </div>
            </div>
        </div>
    </div>