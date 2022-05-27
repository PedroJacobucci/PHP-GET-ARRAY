<html>
    <body>
        <h3> Recursividade - Máximo valor de um array </h3>
            <?php
                $lista = array();
                $lista[0] = $_GET["num1"];
                $lista[1] = $_GET["num2"];
                $lista[2] = $_GET["num3"];
                $lista[3] = $_GET["num4"];
        
        
                $n = sizeof($lista);
                echo maximo ($lista, $n);
                function maximo ($lista, $n) {
                if ($n == 1)
                    return $lista[0];
                    return max($lista[$n-1], maximo($lista, $n-1));
            }
            ?>
    </body>
</html>