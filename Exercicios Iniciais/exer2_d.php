<?php
$jan = "Janeiro";
$fev = "Fevereiro";
$mar = "Março";
$abr = "Abril";
$mai = "Maio";

$vMeJan = 173.00;
$vMeFev = 113.58;
$vMeMar = 145.67;
$vMeAbr = 98.50;
$vMeMai = 123.60;

$mediaFinal = ($vMeJan + $vMeFev + $vMeMar + $vMeAbr + $vMeMai)/5;

echo"
    <table>
     <tr>
        <td>Meses</td>
        <td>Valor Mensal</td>
      </tr>
      <tr>
        <td>$jan<td>
        <td>$vMeJan<td>
      </tr>
      <tr>
        <td>$fev<td>
        <td>$vMeFev<td>
      </tr>
      <tr>
        <td>$mar<td>
        <td>$vMeMar<td>
      </tr>
      <tr>
        <td>$abr<td>
        <td>$vMeAbr<td>
      </tr>
      <tr>
        <td>$mai<td>
        <td>$vMeMai<td>
      </tr>
      <tr>
        <td>Media Final:<td>
        <td>$mediaFinal<td>
      </tr>
      </table>";
?>