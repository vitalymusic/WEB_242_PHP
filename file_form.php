<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload_file.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file_upload[]" id="" multiple>
        <input type="submit" value="Upload">
    </form>
</body>
</html>