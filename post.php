<?php
$a = $_POST['username'];
$b = $_POST['domain'];
if (empty($a) or empty($b)) {
    
   echo '<script>window.location = "http://rasitech.herokuapp.com/"</script>';

} else {

    $c = 'https://www.google.com/search?q=intext:"'.$a.'@'. $b '" OR intext"'.$a.'"';
    echo '<script>window.location = "'. $c .'"</script>';
}
