<html>
   <body>
      <h3> Recursividade - Soma de um array </h3>
      <?php
      $lista = array();
      
      $lista[0] = $_GET["num1"];
      $lista[1] = $_GET["num2"];
      $lista[2] = $_GET["num3"];
      
      $n=5;

         
         echo soma ($lista, $n);
         function soma ($lista, $n) {
           if ($n == 1)
               return $lista[0];
           else
              return soma ($lista, $n-1) + $lista[$n-1];
            }
            ?>
        </body>
    </html>