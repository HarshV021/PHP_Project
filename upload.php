<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] === UPLOAD_ERR_OK) {
        $fileName = $_FILES["fileToUpload"]["name"];
        $fileTmp = $_FILES["fileToUpload"]["tmp_name"];
        $fileType = $_FILES["fileToUpload"]["type"];

        $allowed = ['image/jpeg', 'image/png', 'application/pdf', 'text/plain'];

        if (in_array($fileType, $allowed)) {
            move_uploaded_file($fileTmp, "uploads/" . basename($fileName));
            echo "File uploaded successfully.";
        } else {
            echo "Only JPG, PNG, PDF & TXT files are allowed.";
        }
    } else {
        echo "No file uploaded or upload error.";
    }
} else {
    // Show upload form if it's not a POST request
    ?>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="fileToUpload">
        <input type="submit" value="Upload File">
    </form>
    <?php
}
?>
