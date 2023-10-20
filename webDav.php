<?php 
    $userId = $_POST['userId'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Carrito.css">
    <title>Pizzeria</title>
</head>
<header class="title">
    <h1>Pizzeria Il Forno di Napoli</h1>
</header>
<nav>
    <ul id="barra">
        <li class="barraa"><a class="linkNav" href=Carrito.php>Retornar</a>
        </li>
    </ul>
</nav>
<body>
    <h2 class="Slogan">
        Compras
    </h2>
    <div class="general">
        <table>
        <thead>
            <tr>
                <th style="width: 25%;"></th>
                <th style="width: 75%;"></th>
            </tr>
            <tr>
                <th colspan="2">Pdf</th>
            </tr>
            <tr>
                <th style="width: 20%;"></th>
                <th style="width: 80%;"></th>
            </tr>
        </thead>
        <?php 
            $pdf_directory = "pdf/";
            $files = scandir($pdf_directory);
            rsort($files);
            foreach($files as $file){
                $parts = explode('_', $file);
                if($parts[0] == $userId){
                    $fecha_hora = $parts[1] . ' ' . str_replace('-', ':', $parts[2]);
                ?> 
            <tr>
                <td style="text-align: center;">
                    <div>
                        <div>Pedido de la fecha : <?php echo $fecha_hora ?></div>
                    </div>
                </td>
                <td style="text-align: center;">
                    <div>
                        <iframe src='<?php echo $pdf_directory . $file ?>#zoom=50' width='80%' height='400vw'></iframe>
                    </div>
                </td>
            </tr>
            <?php
                }
            }
            ?>    
        </table>
    </div>   
</body>
<footer>
    <div class="container">
        <div class="social-icons">
            <a href="https://www.instagram.com" target="_blank"> <img src="Imagenes/instagram.png" alt=""><i>Il Forno di Napoli</i></a>
            <a href="https://www.facebook.com" target="_blank"><img src="Imagenes/facebook.png" alt=""><i>Forno_di_Napoli</i></a>
        </div>
        <p>© 2023 Pizzería Il Forno di Napoli</p>
      </div>
</footer>
</html>