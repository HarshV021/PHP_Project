<!DOCTYPE html>
<html>
<title>THIS IS A DEMO </title>
    <title>File Upload in PHP</title>

</head>
<body>
    <h2>Upload a File</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label>Select file:</label>
        <input type="file" name="fileToUpload" required>
        <br><br>
        <input type="submit" value="Upload File" name="submit">
    </form>
</body>
</html>
