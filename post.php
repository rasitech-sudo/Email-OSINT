<?php
$a = $_POST['domain'];
$b = $_POST['title'];
$c = $_POST['extension'];
if ($empty($a)) {
    $d = "https://www.google.com/search?q=$b filetype:$c"
    header("location: $d");

} else {

    $e = "https://www.google.com/search?q=$b filetype:$c site:$c"
    header("location: $e");
}

>