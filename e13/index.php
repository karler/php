<?php
   //Mostrar números desde el 100 hasta el 200 de 5 en 5
   $valor = 100;
   do{
       echo "$valor, ";
       $valor = $valor + 5;
   }while($valor <= 200);

   /*
   while ($valor <= 200){
       echo "$valor, ";
       $valor = $valor + 5;
   }
   */
?>
<?php
   //Sumar los 100 primeros números
   $suma = 0;
   $valor = 1;
   Do {
       $suma = $suma + $valor;
       $valor++;
   }while ($valor <= 100);
   echo "<br>la suma es: $suma";
   
   /*
   echo "<br><br>";
   $suma = 0;
   $valor = 1;
   while ($valor <= 200 ){
       $suma = $suma + $valor;
       $valor = $valor + 1;
   }
   echo "Suma: $suma";
   */
?>