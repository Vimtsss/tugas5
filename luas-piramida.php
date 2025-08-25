<?php
function luasPermukaanLimasSegiempat($a, $t) {
   
    $tinggiSegitiga = sqrt(pow(($a/2), 2) + pow($t, 2));
    $luasAlas = pow($a, 2);
    $luasSisi = 2 * $a * $tinggiSegitiga;
    return $luasAlas + $luasSisi;
}

echo "Luas Permukaan Limas Segiempat: " . luasPermukaanLimasSegiempat(6, 8);
?>
