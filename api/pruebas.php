<?php
try {
    $content = file_get_contents('https://steamspy.com/api.php?request=a');

    if (empty($content)) {
        echo("No hay nada ");
    }
    else {
      echo("Hay algo".$content);
    }
} catch (Exception $e) {
  echo("Hay algo".$content);
}
?>