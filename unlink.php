<php
$temp_dir = "Your folder path like d:/xampp/htdocs/your project folder/temp"
array_map('unlink', glob("$temp_dir/*.*")); // remove all files and folder in you temp directory
rmdir($temp_dir); / remove your temp folder if empty 

/** array_map()

==> Applies the callback to the elements of the given arrays
==> http://php.net/manual/en/function.array-map.php
**/
?>
