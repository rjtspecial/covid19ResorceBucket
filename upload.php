<?php
$ftmp= $_FILES["fnm"]["tmp_name"];
$fn =$_FILES["fnm"]["name"];
move_uploaded_file($ftmp, "img/".$fn);
?>
file sucessfully uploaded 
<br>
<img src='<?php echo "img/".$fn; ?>' alt= "">




