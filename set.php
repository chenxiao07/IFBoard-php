<?php
$m = $_GET["m"];
if(preg_match("/^[x]-?\d+[y]-?\d+$/", $m)) {
if(is_readable("tmp/".$m)) {
$data = $_POST["textdata"];
file_put_contents("tmp/".$m, $data);
echo "Update Success!";
}
}
?>
