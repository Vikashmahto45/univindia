<?php
$keywords = file('keyword.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$content = strtolower(file_get_contents('index.php') . file_get_contents('mgsu-results.php'));
$u = 0;
foreach($keywords as $w){
    if(trim($w)!='' && strpos($content, strtolower(trim($w)))!==false) {
        $u++;
    }
}
echo "Total: ".count($keywords)."\nUsed: $u\nNot Used: ".(count($keywords)-$u)."\n";
?>
