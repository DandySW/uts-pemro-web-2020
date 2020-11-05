<?php namespace uts;

//Make temporary array
date_default_timezone_set('Asia/Jakarta');
if ( !empty($_POST)) {
  $title = $_POST['title'];
  $author = $_POST['author'];
  $created = date('j F Y');
  $picture = $_POST['picture'];
  $content = $_POST['content'];

//Get JSON file
$getjson = file_get_contents('article.json');
$getjson = json_decode($getjson,true);

//Save to JSON file
$getjson["article"] = array_values($getjson["article"]);
array_push($getjson["article"],$_POST);
file_put_contents('article.json', json_encode($getjson, JSON_PRETTY_PRINT));
header("Location: index.php");
}
?>
