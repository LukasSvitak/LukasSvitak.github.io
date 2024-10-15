<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domů</title>
</head>
<style>
  @media (max-width: 815px) {
    .grid {
    position: relative;
    display: grid;
    grid-template-columns: 1fr 1fr;
    z-index: 2;
    background-color: black;
    padding: 30px; 
    box-shadow: 0 0 30px 15px rgba(0, 0, 0, 5);
    }

    .vse {
    background-color: black;
    position: relative;
    z-index: 2;

    }
}

@media (max-width: 600px) {
    .container {
    font-size: smaller;
    }

    .grid img {
    width: 30px;
    }

    .grid h2 {
    font-size: 17px;
    }
}
</style>
<body>
<div class="container">
        <h1 class="animate-text">Škoda R5 Závodní legenda</h1>
        <p class="animate-text">Sportovní vůz vyvinutý pro soutěže mistrovství světa v rally. <br>
         Tento vůz, s jeho výkonným motorem a pokročilou aerodynamikou, se stal oblíbeným mezi závodníky i fanoušky.</p>
    </div>
    <div class="vse">
    <div class="grid">
    <div class="grid1">
    <img src="car-engine.png" alt="">
    <h2>Motor: 1.6 TSI</h2>
    </div>
    <div class="grid2">
    <img src="dashboard.png" alt="">
    <h2>Výkon: 280 koní</h2>
    </div>
    <div class="grid3">
    <img src="weight.png" alt="">
    <h2>Hmotnost: 1230 kg</h2>
    </div>
    <div class="grid4">
    <img src="car.png" alt="">
    <h2>Délka: 4,1 m</h2>
    </div>
    </div>
    </div>  
</body>
</html>