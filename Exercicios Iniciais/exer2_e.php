<?php
// ALUNO A
$bim1A = 75;
$bim2A = 86;
$bim3A = 83;
$bim4A = 91;
$mediaA = ($bim1A + $bim2A + $bim3A + $bim4A)/4;

// ALUNO B
$bim1B = 78;
$bim2B = 98;
$bim3B = 67;
$bim4B = 99;
$mediaB = ($bim1B + $bim2B + $bim3B + $bim4B)/4;

// ALUNO C
$bim1C = 83;
$bim2C = 84;
$bim3C = 89;
$bim4C = 87;
$mediaC = ($bim1C + $bim2C + $bim3C + $bim4C)/4;

// ALUNO D
$bim1D = 98;
$bim2D = 65;
$bim3D = 87;
$bim4D = 77;
$mediaD = ($bim1D + $bim2D + $bim3D + $bim4D)/4;

echo"O aluno A: 1ºbim:$bim1A 2ºbim:$bim2A 3ºbim:$bim3A 4ºbim:$bim4A Media: $mediaA";
echo"<br>O aluno B: 1ºbim:$bim1B 2ºbim:$bim2B 3ºbim:$bim3B 4ºbim:$bim4B Media: $mediaB";
echo"<br>O aluno C: 1ºbim:$bim1C 2ºbim:$bim2C 3ºbim:$bim3C 4ºbim:$bim4C Media: $mediaC";
echo"<br>O aluno D: 1ºbim:$bim1D 2ºbim:$bim2D 3ºbim:$bim3D 4ºbim:$bim4D Media: $mediaD";

if($mediaA > $mediaB and $mediaA > $mediaC and $mediaA > $mediaD)
{
    echo"<br> O aluno vencedor da bolsa foi A, com a média de $mediaA";
}
elseif($mediaB > $mediaA and $mediaB > $mediaC and $mediaB > $mediaD)
{
    echo"<br> O aluno vencedor da bolsa foi B, com a média de $mediaB";
}
elseif($mediaC > $mediaA and $mediaC > $mediaB and $mediaC > $mediaD)
{
    echo"<br> O aluno vencedor da bolsa foi C, com a média de $mediaC";
}
else{
    echo"<br> O aluno vencedor da bolsa foi D, com a média de $mediaD";
}
?>