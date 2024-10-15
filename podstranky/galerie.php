<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie</title>
    <style>

        .galerie {
            display: grid;
            grid-template-columns: repeat(6, 1fr); 
            justify-items: center; 
        }

        .galerie img {
            width: 200px; 
            height: auto; 
        }


        @media (max-width: 1200px) {
            .galerie {
                grid-template-columns: repeat(4, 1fr); 
            }
        }

        @media (max-width: 815px) {
            .galerie {
                grid-template-columns: repeat(2, 1fr);
                position: relative;
                background-color: black;
                z-index: 2;
                padding-top: 20px;
                box-shadow: 0 0 30px 15px rgba(0, 0, 0, 5);
            }

            .footer {
            position: relative;
            z-index: 1;
            }



        }

        @media (max-width: 480px) {
            .galerie {
                grid-template-columns: repeat(1, 1fr); 
            }

            .galerie img {
            width: 100%;
            }
        }
    </style>
</head>
<body>
<div class="nadpis">
    <h1>Galerie</h1>
</div>

<div class="galerie">
<?php
$dir = "images/";
$images = scandir($dir);

foreach ($images as $image) {
    if (mb_strpos($image, '.') != 0) {
        echo '<a href="'.$dir. $image.'" data-lightbox="mygallery"><img class="obrazky" src="'.$dir . $image.'"></a>';
    }
}
?>  
</div>
</body>
</html>
