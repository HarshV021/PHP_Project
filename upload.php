<?php
$targetDir = "uploads/";
$targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($targetFile)) {
    echo "Sorry, file already exists.<br>";
    $uploadOk = 0;
}

// Limit file size to 2MB
if ($_FILES["fileToUpload"]["size"] > 2000000) {
    echo "Sorry, your file is too large.<br>";
    $uploadOk = 0;
}

// Allow only specific file formats
$allowedTypes = ["jpg", "png", "pdf", "txt"];
if (!in_array($fileType, $allowedTypes)) {
    echo "Only JPG, PNG, PDF & TXT files are allowed.<br>";
    $uploadOk = 0;
}

// Upload file if checks passed
if ($uploadOk) {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
        echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
        
    }
    
}
?>
