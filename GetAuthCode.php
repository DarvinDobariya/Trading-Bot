<?php
if(isset($_GET['code'])){
    $code = $_GET['code'];
    echo "<h2>Your AuthCode is ".$code."</h2>";
}else{
    echo "<h2>No Work</h2>";
}
?>