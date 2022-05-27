<html>
    <body>
        <h3> Recursividade - Fatorial </h3>
        <?php
            $num1 = $_GET["num1"];

            echo fatorial ($num1);
            function fatorial ($num1) {
                if ($num1 == 0)
                return 1;
                return $num1 * fatorial($num1-1);
        }
        ?>
    </body>
</html>