<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
}

?>

<?php

function load_image($filename, $type){
    if ($type == IMAGETYPE_JPEG){
        $image = imagecreatefromjpeg($filename);
    }elseif($type == IMAGETYPE_PNG){
        $image = imagecreatefrompng($filename);
    }elseif($type == IMAGETYPE_GIF){
        $image = imagecreatefromgif($filename);
    }
    return $image;
}

function resize_image($new_width, $new_height, $image, $width, $height) {
    $new_image = imagecreatetruecolor($new_width, $new_height);
    imagecopyresampled($new_image, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
    return $new_image;
}

function resize_image_to_width($new_width, $image, $width, $height) {
    $resize_ratio = $new_width / $width;
    $new_height = $height * $resize_ratio;
    return resize_image($new_width, $new_height, $image, $width, $height);
}

function resize_image_to_height($new_height, $image, $width, $height) {
    $ratio = $new_height / $height;
    $new_width = $width * $ratio;
    return resize_image($new_width, $new_height, $image, $width, $height);
}

function scale_image($scale, $image, $width, $height) {
    $new_width = $width * $scale;
    $new_height = $height * $scale;
    return resize_image($new_width, $new_height, $image, $width, $height);
}

function save_image($new_image, $new_filename, $new_type='jpeg', $quality=80) {
    if( $new_type == 'jpeg' ) {
        imagejpeg($new_image, $new_filename, $quality);
    }
    elseif( $new_type == 'png' ) {
        imagepng($new_image, $new_filename);
    }
    elseif( $new_type == 'gif' ) {
        imagegif($new_image, $new_filename);
    }
}
?>



    <form action="<?= $_SERVER["PHP_SELF"]?>" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>

<?php
function resizeImage() {

    $afbeeldingenmap = "uploads/";
    $afbeeldingenmap_resized = "uploads/resized-";
    $afbeelding = $afbeeldingenmap . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $resized_image = $afbeeldingenmap_resized . basename($_FILES["fileToUpload"]["name"]);

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $afbeelding)) {
            // echo "The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " has been uploaded.";

            $filename = $afbeelding;
            list($width, $height, $type) = getimagesize($filename);
            $old_image = load_image($filename, $type);

            $new_image = resize_image(280, 180, $old_image, $width, $height);
            save_image($new_image, 'uploads/resized-'.basename($filename), 'jpeg', 1);

            $newfilename = 'uploads/resized-'.basename($filename);
            $html = '<img src="'.$afbeelding.'"/><br/>';
            $html2 = '<img src="'.$resized_image.'"/><br/>';
            $html3 = $html. $html2;
            return $html3;
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo resizeImage();
}

?>