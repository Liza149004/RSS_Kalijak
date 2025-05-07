<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Trgovina-zelenjava</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <style>
            body {
                background-color: #FFFFFF;
                font-family: 'Antonio', sans-serif;
            }
            .shop-title {
                font-size: 1.8em;
                font-weight: bold;
                margin: 10px;
                color: #393325;
                text-align: center;
            }
            .toggle-container {
                display: flex;
                justify-content: center;
                margin-bottom: 15px;
                background-color: #e0eee0;
                padding: 3px;
                border-radius: 25px;
            }
            .toggle-container {
                display: flex;
                justify-content: center;
                margin-bottom: 15px;
                margin-left: 79px;
                margin-right: 79px;
                background-color: #72AC45; 
                padding: 3px; 
                border-radius: 25px; 
            }
            .toggle-button {
                border: none;
                padding: 8px 16px;
                cursor: pointer;
                font-weight: bold;
                color: #d9f1c8; 
                background-color: transparent;
                border-radius: 25px;
                font-size: 15px;
            }
            .toggle-button.active {
                background-color: #d9f1c8; 
                color: #72AC45;
            }
            .grid-container {
                padding: 0 10px;
            }
            .row {
                display: flex;
                flex-wrap: wrap;
                margin-left: -5px;
                margin-right: -5px;
            }
            .col-md-6 {
                width: 50%;
                padding: 0 5px;
                margin-bottom: 15px;
            }
            .item-container {
                background-color: white;
                border-radius: 8px;
                padding: 10px;
                text-align: center;
                margin-bottom: 15px;
                display: flex;
                flex-direction: column;
                height: 100%;
            }
            .image-container {
                background-color: #f5f5dc;
                height: 120px;
                margin-bottom: 8px;
                border-radius: 5px;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 0.75em;
                border: 3px solid #72AC45;
                overflow: hidden;
            }
            .image-container img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            .item-title {
                font-weight: bold;
                margin-top: 10px;
                margin-bottom: 5px;
                font-size: 1em;
                color: #393325;
            }
            .separator {
                border-top: 1px solid #ccc;
                margin: 5px 0;
            }
            .item-price {
                color: #393325;
                font-size: 0.9em;
                margin-bottom: 8px;
            }
            .kosarica-button {
                display: inline-block;
                padding: 6px 12px;
                background-color: #72AC45;
                color: white;
                text-decoration: none;
                border-radius: 5px;
                font-size: 0.8em;
            }
            .footer.bg-image {
                background-image: url('fotografije/logotip/trava.png');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }
            .container-footer {
                margin-top: 70px;
            }
            .navbar {
                background-color: #72AC45;
            }
            .ozadje {
                background-image: url('fotografije/Ponudba/ozadje trgovina-01-01.png');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }
        </style>
    </head>

        <body>

        <?php include 'puščica.php'; ?> 

        <?php include 'orodna_vrstica_zgoraj.php'; ?>

        <?php include 'header_svetlo.php'; ?>

                <main class="container my-3">
                <h2 class="shop-title">TRGOVINA</h2>
                <div class="toggle-container">
                    <button class="toggle-button" onclick="window.location.href='trgovina_sadike.php'">Sadike</button>
                    <button class="toggle-button active" onclick="window.location.href='trgovina_zelenjava.php'">Zelenjava</button>
                </div>

                <div class="grid-container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Zelenjava/cesnjev.jpg" alt="Češnjev paradižnik">
                                </div>
                                <h3 class="item-title">Češnjev paradižnik</h3>
                                <p class="item-price">3,50 €/kg</p>
                                <button class="kosarica-button">V KOŠARICO</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Zelenjava/volovsko.jpg" alt="Volovsko srce">
                                </div>
                                <h3 class="item-title">Volovsko srce</h3>
                                <p class="item-price">3,50 €/kg</p>
                                <button class="kosarica-button">V KOŠARICO</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Zelenjava/Yellow-tomatoes-.png" alt="Rumen paradižnik">
                                </div>
                                <h3 class="item-title">Rumen paradižnik</h3>
                                <p class="item-price">3,00 €/kg</p>
                                <button class="kosarica-button">V KOŠARICO</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Zelenjava/sweetpeper.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Sladka paprika</h3>
                                <p class="item-price">2,80 €/kg</p>
                                <button class="kosarica-button">V KOŠARICO</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Zelenjava/pekočapaprika.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Pekoča paprika</h3>
                                <p class="item-price">5,00 €/kg</p>
                                <button class="kosarica-button">V KOŠARICO</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Zelenjava/sweetpeper.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Paprika babura</h3>
                                <p class="item-price">3,00 €/kg</p>
                                <button class="kosarica-button">V KOŠARICO</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Zelenjava/solatnekumarice.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Solatne kumare</h3>
                                <p class="item-price">2,50 €/kg</p>
                                <button class="kosarica-button">V KOŠARICO</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Zelenjava/vloženekumarice.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Kumare za vlaganje</h3>
                                <p class="item-price">3,00 €/kg</p>
                                <button class="kosarica-button">V KOŠARICO</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Zelenjava/rumene bučke.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Rumene bučke</h3>
                                <p class="item-price">2,50 €/kg</p>
                                <button class="kosarica-button">V KOŠARICO</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Zelenjava/butternut-squash.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Buča maslenka</h3>
                                <p class="item-price">2,80 €/kg</p>
                                <button class="kosarica-button">V KOŠARICO</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Zelenjava/hokaido.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Buča hokaido</h3>
                                <p class="item-price">2,80 €/kg</p>
                                <button class="kosarica-button">V KOŠARICO</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Zelenjava/krhka solata.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Krhkolistna solata</h3>
                                <p class="item-price">1,50 € na galvico</p>
                                <button class="kosarica-button">V KOŠARICO</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Zelenjava/rdečasolata.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Rdeča solata</h3>
                                <p class="item-price">1,50 € na galvico</p>
                                <button class="kosarica-button">V KOŠARICO</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Zelenjava/ledenka.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Kristalka</h3>
                                <p class="item-price">1,50 € na galvico</p>
                                <button class="kosarica-button">V KOŠARICO</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Zelenjava/blitva.png" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Blitva</h3>
                                <p class="item-price">3,00 €/kg</p>
                                <button class="kosarica-button">V KOŠARICO</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Zelenjava/spinaca.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Špinača</h3>
                                <p class="item-price">4,00 €/kg</p>
                                <button class="kosarica-button">V KOŠARICO</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Zelenjava/rucola.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Rukola</h3>
                                <p class="item-price">6,00 €/kg</p>
                                <button class="kosarica-button">V KOŠARICO</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Zelenjava/radic.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Radič</h3>
                                <p class="item-price">3,50 €/kg</p>
                                <button class="kosarica-button">V KOŠARICO</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Zelenjava/koleraba.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Koleraba</h3>
                                <p class="item-price">2,50 €/kg</p>
                                <button class="kosarica-button">V KOŠARICO</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Zelenjava/brokoli.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Brokoli</h3>
                                <p class="item-price">3,50 €/kg</p>
                                <button class="kosarica-button">V KOŠARICO</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Zelenjava/cvateača2.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Cvetača</h3>
                                <p class="item-price">3,50 €/kg</p>
                                <button class="kosarica-button">V KOŠARICO</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Zelenjava/zelje.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Zelje</h3>
                                <p class="item-price">2,00 €/kg</p>
                                <button class="kosarica-button">V KOŠARICO</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Zelenjava/ohrovt.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Ovhrot</h3>
                                <p class="item-price">2,50 €/kg</p>
                                <button class="kosarica-button">V KOŠARICO</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Zelenjava/grahž.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Grah</h3>
                                <p class="item-price">4,50 €/kg</p>
                                <button class="kosarica-button">V KOŠARICO</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Zelenjava/nizek fizol.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Nizek fižol</h3>
                                <p class="item-price">6,00 €/kg</p>
                                <button class="kosarica-button">V KOŠARICO</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Zelenjava/Strocji-fizol-ESTERKA.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Stročji fižol</h3>
                                <p class="item-price">4,00 €/kg</p>
                                <button class="kosarica-button">V KOŠARICO</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Noga -->
        <?php include 'footer.php'; ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
        </body>
</html>