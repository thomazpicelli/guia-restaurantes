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
            
            $n1 = 10;
            $n2 = 20;
    
            $resultado = soma($n1, $n2);
            imprime_resultado($resultado);
            
            echo "<br><br>";
            
            $resultado = subtração($n1, $n2);
            imprime_resultado($resultado);
            
            echo "<br><br>";
            
            $resultado = multiplicação($n1, $n2);
            imprime_resultado($resultado);
            
            echo "<br><br>";
            
            $resultado = divisão($n1, $n2);
            imprime_resultado($resultado);
            
            
            echo "<br><br>";

               ?>
    </body>
</html>

