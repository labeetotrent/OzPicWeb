<?php


$folder_path = '../photo/'; //image's folder path

$num_files = glob($folder_path . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);

$folder = opendir($folder_path);
$output = array();
 
if($num_files > 0)

{
 while(false !== ($file = readdir($folder))) 
 {
  $file_path = $folder_path.$file;
  $extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));

if($extension=='jpg' || $extension =='png' || $extension == 'gif' || $extension == 'bmp') 
 {
		$path = "http://{$_SERVER['HTTP_HOST']}". substr($file_path, 2);

	$data = array(
	'src' => $path,
	'thumb' => $path);   
	array_push($output, $data);
}
 }
}
else
{
 echo "the folder was empty !";
}
closedir($folder);
echo json_encode(array_values($output));
?>

