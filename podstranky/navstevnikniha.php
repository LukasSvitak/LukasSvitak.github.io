<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="skoda.css">
    <title>Návštěvní kniha</title>
</head>
<body>
    <div class="nadpis">
    <h1>Napište odezvu na naše fotky</h1>
    </div>
<form action="" method = "post">
<textarea name="textarea" id="" cols="30" rows="5" placeholder="Napište názor..."></textarea><br>
<input type="submit" value="Odeslat" name = "submit">
</form>
<div class="nadpis">
<div class="nazory">

<?php
if (isset($_POST['submit'])) {

    $soubor = 'nazory.txt';
    $nazor = $_POST['textarea'];

    if (!empty($nazor)) {  
        if (file_exists($soubor)) {
            $obsah = file_get_contents($soubor);
            
            if (!empty($obsah)) {
                $obsah .= ";";
            }
        } else {
            $obsah = '';
        }

        $obsah .= $nazor;

        $zapsano = file_put_contents($soubor, $obsah);
    }

    if (isset($obsah) && !empty($obsah)) {
        $rozdeleni = explode(';', $obsah);

        foreach ($rozdeleni as $cast) {
            echo "<p>$cast</p>";
        }
    }
}
?>

</div>
</body>
</html>


