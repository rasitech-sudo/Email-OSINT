<?php
$a = $_POST['username'];
$b = $_POST['domain'];
if (empty($a) or empty($b)) {
    
   echo '<script>window.location = "http://rasitech.herokuapp.com/"</script>';
    

} else {
    $c = 'https://www.google.com/search?q=intext%3A%22'.$a.'@'. $b .'%22%20OR%20intext%3A%22'.$a.'%22';
    echo '<script>window.location = "'. $c .'"</script>';
}
