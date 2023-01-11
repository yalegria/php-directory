<?php
echo "Traversing...\n";
$dir = "ssw";


$all = glob($dir);

if ($all) {
    foreach ($all as $ff) {
        if (is_dir($ff)) {
            echo "{$ff} \n";
        }
    }
}
else {
    echo 'No directory to traverse';
}


?>
