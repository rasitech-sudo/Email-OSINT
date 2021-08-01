<?php
$a = $_POST['username'];
$b = $_POST['domain'];
if ($empty($a) or $empty($b)) {
    
    header("location: ../");

} else {

    $c = 'https://www.google.com/search?q=intext:"'.$a.'@'. $b '" OR intext"'.$a.'"';
    header("location: $c");
}

>