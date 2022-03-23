<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <title>File Upload</title>
</head>
<body>
  <form action="upload.php" method="POST" enctype="mutipart/form.data">
      <input type="name" placeholder="Name" name="name"><br><br>
      <input type="email" placeholder="Email" name="email"><br><br>
      
      <label>Upload File</label>
      <p><input type="file" name="file"/></p>
      <p><input type="submit" name="upload" value="Upload"></p>
  </form>

  