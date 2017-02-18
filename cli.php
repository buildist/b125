<?php
require('functions.php');
$command = $argv[1];
switch ($command) {
    case 'convert-all':
        $dh = opendir('original/');
        while ($file = readdir($dh)) {
            if (is_file('original/'.$file)) {
                $name = str_replace('.txt', '', $file);
                convertToBinary($name);
            }
        }
    break;
}
?>