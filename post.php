<?php
$a = $_GET['Username'];
$b = $_GET['Domain'];
$c = 'https://www.google.com/search?q=intext%3A%22'.$a.'@'. $b .'%22%20OR%20intext%3A%22'.$a.'%22';
    echo '<script>window.location = "'. $c .'"</script>';
