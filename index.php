<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>File Upload</title>

</head>
<body>
<div class="container">
    <h2>File Upload</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="file-upload" class="custom-file-upload">
            Choose File
        </label>
        <input id="file-upload" type="file" name="file" accept=".doc, .docx, .pdf" required>
        <br>
        <input type="submit" value="Upload" class="submit-btn">
    </form>
</div>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #e2e3e3;
    }
    .container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
        text-align: center;
    }
    form {
        margin-top: 20px;
        text-align: center;
    }
    input[type="file"] {
        display: none;
    }
    .custom-file-upload {
        border: 1px solid #a69e9e;
        display: inline-block;
        padding: 6px 12px;
        cursor: pointer;
        background-color: #f9f9f9;
        border-radius: 4px;
    }
    .custom-file-upload:hover {
        background-color: #e9e9e9;
    }
    .submit-btn {
        margin-top: 20px;
        background-color: #0fd617;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    .submit-btn:hover {
        background-color: #45a049;
    }
</style>

</body>
</html>
