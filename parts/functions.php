<?php
function generatePortfolio($dir, $jsonPath) {
    $files = glob($dir . "/*.jpg");
    sort($files); 
    $json = file_get_contents($jsonPath);
    $data = json_decode($json, true);

    $text = $data["text_banner"] ?? [];

    $chunks = array_chunk($files, 4);

    foreach ($chunks as $row) {
        echo '<div class="row">';

        foreach ($row as $file) {
            echo '<div class="col-25 portfolio text-white text-center" 
                  style="background-image: url(' . $file . ')">';
        
            $filename = basename($file);
            $nadpis = $text[$filename] ?? "Bez nadpisu";
        
            echo '<h3>' . $nadpis . '</h3>';
            echo '</div>';
        }

        echo '</div>';
    }
}
?>