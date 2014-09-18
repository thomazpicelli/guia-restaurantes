<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php include "operacoes.php"; 
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