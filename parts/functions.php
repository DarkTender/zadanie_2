<?php 
function generateSlides($dir) {
    $files = glob($dir . "/*.jpg");
    $json = file_get_contents("data/datas.json");   
    $data = json_decode($json, true);
    $text = $data["text_banner"];
    foreach ($files as $file) {
        echo '<div class="col-25 portfolio text-white text-center">';
        echo '<img src="' . $file . '">';
        echo ($text[basename($file)]);
        echo '</div>';
        }
    }
?>