<?php

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="../assetsBack/css/control.css">
<div class="container">
    <h2 class="tex-center">Bienvenido</h2>
    <br><br>
    <div class="form">
        <form action="../php/guardarDB.php" method="POST">
        <p>Numro de Carta a afectar</p>
        <label for="name" class="">Numero</label>
        <br>
        <input type="number" name="number" min="1" max="3" step="" placeholder="1 OR 2 OR 3" required>
        
        <p>Imagen en la card</p>
        <label for="imgs" class="">URL de la imagen</label>
        <br>
        <input type="text" name="imgs" placeholder="url de la imagen" required>

        <p>Titulo que contendra la tarjeta</p>
        <label for="title">Titulo de la tarjeta</label>
        <br>
        <input type="text" name="title" placeholder="Titulo" required>
        
        <p>Texto que contendra la tarjeta</p>
        <label for="texto">El texto aqui</label>
        <br>
        <textarea name="text" id="#" cols="30" rows="10" placeholder="Texto de la tarjeta" required></textarea>
        <br><br><br>
        <input type="submit" value="actualizar">

        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>