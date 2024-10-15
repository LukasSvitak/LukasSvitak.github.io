<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="skoda.css">
    <title>Multiupload</title>
    <style>
    .background h2 {
    color: white;
    font-size: 16px;
    text-align: center;
    }
    </style>
</head>
<body>
<div class="nadpis">
<h1>Nahrajte soubor do naší galerie</h1>
</div>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <br>
    <input type="submit" name="submit" value="Nahrát">
</form> 

<div class="background">
<?php
if (isset($_POST['submit'])) {

    if (empty($_FILES['file']['name'])) {
        echo "<h2>Prosím, vyberte soubor před odesláním.</h2>";
    } else {
    $dir = "images/";
    $target_file = $dir . basename($_FILES['file']["name"]);
    $file_type = mime_content_type($_FILES['file']["tmp_name"]);
    $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];

    if (in_array($file_type, $allowed_types)) {
        if (move_uploaded_file($_FILES['file']["tmp_name"], $target_file)) {
            echo "<h2>Soubor byl úspěšně nahrán.</h2>";
        } else {
            echo "<h2>Při nahrávání souboru došlo k chybě.</h2>";
        }
    } else {
        echo "<h2>Nepovolený typ souboru. Pouze JPG, PNG nebo GIF jsou povoleny.</h2>";
        }
    }
}
?>
</div>
</body>
</html>

