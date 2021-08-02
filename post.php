<?php
$a = $_POST['username'];
$b = $_POST['domain'];
$c = 'https://www.google.com/search?q=intext:"'.$a.'@'. $b .'" OR intext"'.$a.'"';
    echo '<script>window.location = "'. $c .'"</script>';
