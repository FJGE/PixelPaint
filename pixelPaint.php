<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/pixelPaint.css">
    <title>Pixel Paint - Creación</title>
</head>
<body>
    <section>
        <div class="getColors">
            <h1><b>Colores</b></h1>
            <p id="colorName"><b>Ninguno</b></p>
            <table border="1" class="palette">

            <?php
                $squares = $_POST["dimensiones"];
                $idV = 0;
                $idH = 0;

                for ($i=0; $i < 2; $i++) { 
                    echo '<tr>';
                    $idV++;
                
                    for ($j=0; $j < 10; $j++) {
                        echo "<td id='$idV$idH' onclick='getColor(this.id)'></td>";
                        $idH++;
                    }
                    echo '</tr>';
                }
            ?>

            </table>
        </div>

        <div class="grid">
            <table border="1" class="picture">
            
            <?php
                for ($i=0; $i < $squares; $i++) { 
                    echo '<tr>';
                    $idV++;
            
                    for ($j=0; $j < $squares; $j++) {
                        echo "<td id='$idV$idH' onclick='Paint(this.id)'></td>";
                        $idH++;
                    }
                    echo '</tr>';
                }
            ?>
            </table>
        </div>
        <button type="button" class="reset" onclick="Clean()">Reiniciar</button>
    </section>
    <script src="./js/scripts.js"></script>
</body>
</html>