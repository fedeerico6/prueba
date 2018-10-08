<?php
namespace views;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artista</title>
</head>
<body>
    <form action="artist/addArtist" method="POST">
        <div>
            <label for="name">Name: </label>
            <input type="text" name='name' value='name'>
            <pre> </pre>
        </div>

        <div>
            <label for="apellido">Apellido: </label>
            <input type="text" name='apellido' value='apellido'>
            <pre> </pre>
        </div>

        <div>
            <input type="submit">
        </div>
    
    </form>
</body>
</html>

