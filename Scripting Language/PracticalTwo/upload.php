<?php
$target_dir = "uploads/";
// if (isset($_POST["submit"])) {
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
<html>
<body>
    <?php if (isset($target_file)) : ?>
        <img src="<?= $target_file ?>" alt="Uploaded Image">
        <p>Download the image: <a href="<?= $target_file ?>" download>Download</a></p>
    <?php endif; ?>
</body>
</html>