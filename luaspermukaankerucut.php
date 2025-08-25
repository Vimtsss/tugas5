<?php
function luasPermukaanKerucut($r, $t) {
    $s = sqrt(pow($r, 2) + pow($t, 2));
    return M_PI * $r * ($r + $s);
}

echo "Luas Permukaan Kerucut: " . luasPermukaanKerucut(5, 12);
?>
