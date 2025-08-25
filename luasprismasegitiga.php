<?php
function luasPermukaanPrismaSegitiga($a, $tSegitiga, $tPrisma) {

    $luasAlas = 0.5 * $a * $tSegitiga;
    $kelilingAlas = $a + $tSegitiga + sqrt(pow($a, 2) + pow($tSegitiga, 2)); // asumsi segitiga siku2
    return (2 * $luasAlas) + ($kelilingAlas * $tPrisma);
}

echo "Luas Permukaan Prisma Segitiga: " . luasPermukaanPrismaSegitiga(6, 8, 10);
?>
