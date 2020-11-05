<?php
if (isset($_POST["id"])) {
    $id = (int) $_POST["id"];
    $getjson = file_get_contents('article.json');
    $jsonfile = json_decode($getjson, true);
    $data = $jsonfile["article"];
    $data = $data[$id];

    $post["title"]    = isset($_POST["title"]) ? $_POST["title"] : "";
    $post["author"]   = $data["author"];
    $post["picture"]  = isset($_POST["picture"]) ? $_POST["picture"] : "";
    $post["content"]  = isset($_POST["content"]) ? $_POST["content"] : "";
    $post["created"]  = $data["created"];
    $post["editor"]   = isset($_POST["editor"]) ? $_POST["editor"] : "";
    $post["edited"]   = date('j F Y');


    if ($data) {
        $jsonfile["article"][$id] = $post;
        $jsonfile["article"] = array_values($jsonfile["article"]);
        file_put_contents("article.json", json_encode($jsonfile, JSON_PRETTY_PRINT));
    }
    header("Location:index.php");
}
?>
