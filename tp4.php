<?php


echo "imprime nùmeros del 1 al 100"."<br>";

$i=1;
while($i<101){
      echo $i;
      $i++;
}
echo "imprime nùmeros del 100 al 1"."<br>";

$i=100;
while($i>0){
      echo $i;
      $i--;

}
echo "imprime nùmeros pares del 1 al 100"."<br>";

$i=2;
while($i<101){
      echo $i;
      $i=$i+2;

}
echo "imprime nùmeros impares del 1 al 100"."<br>";

$i=1;
while($i<101){
      echo $i;
      $i=$i+2;
      

}
echo "mostrar la suma de los numeros del 1 al 20"."<br>";

$i=1;
$suma=0;
while($i<=20){
      $suma+=$i;
      $i++;



}
{echo "la suma es:".$suma;}
echo "mostrar la suma de los numeros pares del 1 al 20"."<br>";

$i=2;
$suma=0;
while($i<=20){
      $suma+=$i;
      $i=$i+2;



}
{echo "la suma de los numeros pares del 1 al 20 es:".$suma;}

?>