<?php
function convertToBinary($post) {
    echo 'Converting '.$post."\n";
    $text = file_get_contents('original/'.$post.'.txt');
    $data = hex2bin(str_replace(array("\r", "\n", " ", "\t"), "", $text));
    file_put_contents('binary/'.$post.'.bin', $data);
}
?>