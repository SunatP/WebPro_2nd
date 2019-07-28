<?php session_start();?>
<!DOCTYPE html>
<html>
<head>

<?php


//


error_reporting(0);
ini_set('display_errors', 0);
$fileNamenew = uniqid('', true) .".".$fileAct;
$target_dir = "upload/".$fileNamenew;
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is a/an - " . $check["mime"] . "."."<br />";
        echo "Upload: ".$_FILES["fileToUpload"]["name"]."<br />";
        echo "Type: ".$_FILES["fileToUpload"]["type"]."<br />";
        echo "size: ".($_FILES["fileToUpload"]["size"]/1000)."Kb<br />";
        echo "Temp file: ".$_FILES["fileToUpload"]["tmp_name"]."<br />";
        echo "You upload the picture at " . date("l jS \of F Y h:i:s A") ."<br>";
        
$uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }
// Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "nef" && $imageFileType != "cr2") {
    echo "Sorry, only JPG, JPEG,NEF,CR2, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    echo"<p>System will bring you to Upload page just wait for <span id=\"counter\">5</span> Sec</p>  
    ";
    header("refresh:5 ;url=upload-pic.html");
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo " ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

        echo "<br> File name length is ".strlen(basename( $_FILES["fileToUpload"]["name"])) . "<br>";
        echo "Your reverse file name is " .strrev(basename( $_FILES["fileToUpload"]["name"]));
        
         echo"<p>System will bring you to Upload text to read output just wait for <span id=\"counter\">5</span> Sec</p>  ";
     header("refresh:5 ;url=upload-text.html");
    } else {
        echo "Sorry, there was an error uploading your file.";
       
    }
}
?>

<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=1) {
        location.href = 'upload-text.html';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);
</script>
</head>
</html>
