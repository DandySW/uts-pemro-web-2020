<?php

if (isset($_GET["id"])) {
    $id = (int) $_GET["id"];
    $getjson = file_get_contents('article.json');
    $getjson = json_decode($getjson, true);
    $data = $getjson["article"];
    $data = $data[$id];

    if ($data) {
        unset($getjson["article"][$id]);
        $getjson["article"] = array_values($getjson["article"]);
        file_put_contents('article.json', json_encode($getjson, JSON_PRETTY_PRINT));
    }
    header("Location: index.php");
}
