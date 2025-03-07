<?php
if (isset($_GET['link'])) {
    file_put_contents("links.txt", $_GET['link'] . PHP_EOL, FILE_APPEND);
}
?>