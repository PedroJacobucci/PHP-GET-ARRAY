<html>
    <body>
        <h3> Recursividade - Atividade LabJaça </h3>
            <?php
                $i = $_GET["num1"];

                echo func ($i);
                function func ($a) {
                if ($a < 2)
                    return 1;
                    return ($a-1) * func($a-1);
            }
            ?>
    </body>
</html>