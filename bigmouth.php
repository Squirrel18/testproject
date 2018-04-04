<?php

        header("Access-Control-Allow-Origin: *");
        $postRequest = $_GET;
        if ($postRequest.array_key_exists("imdbid")) {
            if ($_GET["imdbid"] == "tt6524350") {
                if ($_GET["season"] == "1") {
                    $file_dummy = fopen("episodes.json", "r") or die ("failed open file");
                    $data = fread($file_dummy, filesize("episodes.json"));
                    echo $data;
                } else if ($_GET["season"] == "2") {
                    $file_dummy = fopen("episodes_2.json", "r") or die ("failed open file");
                    $data = fread($file_dummy, filesize("episodes_2.json"));
                    echo $data;
                } else {
                    header(http_response_code(404));
                }
            }
        }
    /* } else {
        header("Access-Control-Allow-Origin: *");
        header(http_response_code(404));
        exit;
    }  */
?>
