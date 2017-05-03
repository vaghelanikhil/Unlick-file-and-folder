<?php
$temp_dir = "Your folder path like d:/xampp/htdocs/your project folder/temp";
delete_files($temp_dir, true); // delete all file and folder from you project directory.
rmdir($temp_dir); // remove your temp folder if empty 
?>
