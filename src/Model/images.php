<?php

use CoffeeCode\Uploader\File;
use CoffeeCode\Uploader\Image;

require __DIR__ ."../../../vendor/autoload.php";

$upload = new Image(uploadDir:"storage", fileTypeDir:"image");
$files = $_FILES;

if(!empty($files["image"])){
    $file = $files["image"];
    if(empty($file["type"]) || !in_array($file["type"], $upload::isAllowed())){
        echo"<p>selecione uma imagem</p>";
    }else{
        $uploaded = $upload->upload($file, pathinfo($file["type"],PATHINFO_FILENAME), width:"350");
        echo "<img src= {$uploaded} />";
    }

}
?>

<?php
    if(!empty($files["images"])){
        $images = $files["images"];

        for ($i = 0; $i < count($images["type"]); $i++){
            foreach (array_keys($images) as $keys){
                $imageFiles[$i][$keys] = $images[$keys][$i];
            }
            
        }
        foreach($imageFiles as $file){

                if(empty($file["type"]) ){
                echo "<p>selecione uma imagem</p>";
            }elseif(!in_array($file["type"], $upload::isAllowed())){
                echo "O arquivo {$file["name"]} não é válido";
            }else{
                $uploaded = $upload->upload($file, pathinfo($file["type"],PATHINFO_FILENAME), width:"350");
                echo "<img src= {$uploaded} />";
            }
        }
}
?>



