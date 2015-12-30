
<?php


$new_image_name = uniqid();


mail("trent@thetelstrastore.com.au", "test", "test". $_FILES["file"]["tmp_name"].  $new_image_name);
//if (!file_exists('./'. $_POST["eventCode"])) {
//    mkdir('./'. $_POST["eventCode"], 0777, true);
//}
$uploads_dir = '../photo';



//$myfile = fopen($uploads_dir . "newfi2le.txt", "w") or die("Unable to open file!");
//$txt = "John Doe\n";
//fwrite($myfile, $txt);
//$txt = "Jane Doe\n";
//fwrite($myfile, $txt);
//fclose($myfile);

//print_r($_FILES);
move_uploaded_file($_FILES["file"]["tmp_name"], "$uploads_dir/$new_image_name.jpg");



?>
