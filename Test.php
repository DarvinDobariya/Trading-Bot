<?php

try {
    if (isset($_POST['DE'])) {
        echo "success";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>