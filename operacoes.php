<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php

            function imprime_resultado ($resultado) {
                echo "O resultado : ".$resultado;
            }
            
            function soma($x, $y){
                $z = $x + $y;
                return $z;
            }
            function subtração($x, $y){
                $z = $x - $y;
                return $z;
            }
            function multiplicação($x, $y){
                $z = $x * $y;
                return $z;
            }
            function divisão ($x, $y){
                if ($y == 0 ){
                    echo "Não existe divisão por zero!";
                }
                else{    
                    $z = $x / $y;
                    return $z;
                }    
            }
               ?>
    </body>
</html>

