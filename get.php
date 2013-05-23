<?php
$m = $_GET["m"];
if(preg_match("/^[x]-?\d+[y]-?\d+$/", $m)) {
if(is_readable("tmp/".$m)==false) {
$data = system("perl maze.pl");
file_put_contents("tmp/".$m, $data);
} else {
echo file_get_contents("tmp/".$m);
}
}
?>
