<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Naša ponudba - sadike</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <style>
            body {
                background-color: #FFFFFF;
                font-family: 'Antonio', sans-serif;
            }
            .ponudba-title {
                font-size: 1.8em;
                font-weight: bold;
                margin-bottom: 10px;
                color: #393325;
            }
            .toggle-container {
                display: flex;
                justify-content: center;
                margin-bottom: 15px;
                margin-left: 23%;
                margin-right: 23%;
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
                object-position: center;
            }
            .item-title {
                font-weight: bold;
                margin-bottom: 3px;
                font-size: 1em;
                color: #393325;
            }
            .item-description {
                color: #393325;
                font-size: 0.85em;
                margin-bottom: 8px;
                flex-grow: 1;
            }
            .button-icon-row {
                display: flex;
                justify-content: center;
                gap: 10px;
                margin-top: auto;
            }
            .view-button {
                display: inline-block;
                padding: 6px 12px;
                background-color: #72AC45;
                color: white;
                text-decoration: none;
                border-radius: 5px;
                font-size: 13px;
            }
            .calendar-icon {
                display: inline-block;
                color: #72AC45;
                font-size: 30px;
                text-decoration: none;
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
            .vrh_strani {
                display: none;
                text-align: center;
                width: 20px;
                height: 20px;
                z-index: 1000;
                cursor: pointer;
            }
        </style>
    </head>

        <body>
          
        <?php include 'puščica.php'; ?>

        <?php include 'orodna_vrstica_zgoraj.php'; ?>

            <!-- Glava strani -->
            <?php include 'header_svetlo.php'; ?>

             <!-- Telo - vsebina -->
            <main class="container my-3">
                <h2 class="ponudba-title text-center">NAŠA PONUDBA</h2>
                <div class="toggle-container">
                    <button class="toggle-button active" onclick="window.location.href='sadike.php'">Sadike</button>
                    <button class="toggle-button" onclick="window.location.href='zelenjava.php'">Zelenjava</button>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Sadike/cesnjev paradiznik.jpg" alt="Češnjev paradižnik">
                                </div>
                                <h3 class="item-title">Češnjev paradižnik</h3>
                                <div class="button-icon-row">
                                    <a href="trgovina_sadike.php" class="view-button">Poglej v trgovini</a>
                                    <a href="setveni_koledar.php" class="calendar-icon"><i class="fa-regular fa-calendar"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Sadike/volovsko srce.jpg" alt="Volovsko srce">
                                </div>
                                <h3 class="item-title">Volovsko srce</h3>
                                <div class="button-icon-row">
                                    <a href="trgovina_sadike.php" class="view-button">Poglej v trgovini</a>
                                    <a href="setveni_koledar.php" class="calendar-icon"><i class="fa-regular fa-calendar"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Sadike/rumen paradićnik.jpg" alt="Rumen paradižnik">
                                </div>
                                <h3 class="item-title">Rumen paradižnik</h3>
                                <div class="button-icon-row">
                                    <a href="trgovina_sadike.php" class="view-button">Poglej v trgovini</a>
                                    <a href="setveni_koledar.php" class="calendar-icon"><i class="fa-regular fa-calendar"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Sadike/sladka paprika.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Sladka paprika</h3>
                                <div class="button-icon-row">
                                    <a href="trgovina_sadike.php" class="view-button">Poglej v trgovini</a>
                                    <a href="setveni_koledar.php" class="calendar-icon"><i class="fa-regular fa-calendar"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Sadike/pekoča paprika.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Pekoča paprika</h3>
                                <div class="button-icon-row">
                                    <a href="trgovina_sadike.php" class="view-button">Poglej v trgovini</a>
                                    <a href="setveni_koledar.php" class="calendar-icon"><i class="fa-regular fa-calendar"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Sadike/paprika babura.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Paprika babura</h3>
                                <div class="button-icon-row">
                                    <a href="trgovina_sadike.php" class="view-button">Poglej v trgovini</a>
                                    <a href="setveni_koledar.php" class="calendar-icon"><i class="fa-regular fa-calendar"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Sadike/kumare.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Solatne kumare</h3>
                                <div class="button-icon-row">
                                    <a href="trgovina_sadike.php" class="view-button">Poglej v trgovini</a>
                                    <a href="setveni_koledar.php" class="calendar-icon"><i class="fa-regular fa-calendar"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Sadike/kumarice.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Kumare za vlaganje</h3>
                                <div class="button-icon-row">
                                    <a href="trgovina_sadike.php" class="view-button">Poglej v trgovini</a>
                                    <a href="setveni_koledar.php" class="calendar-icon"><i class="fa-regular fa-calendar"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Sadike/rumene bucke.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Rumene bučke</h3>
                                <div class="button-icon-row">
                                    <a href="trgovina_sadike.php" class="view-button">Poglej v trgovini</a>
                                    <a href="setveni_koledar.php" class="calendar-icon"><i class="fa-regular fa-calendar"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Sadike/maslenka.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Buča maslenka</h3>
                                <div class="button-icon-row">
                                    <a href="trgovina_sadike.php" class="view-button">Poglej v trgovini</a>
                                    <a href="setveni_koledar.php" class="calendar-icon"><i class="fa-regular fa-calendar"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Sadike/hokaido.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Buča hokaido</h3>
                                <div class="button-icon-row">
                                    <a href="trgovina_sadike.php" class="view-button">Poglej v trgovini</a>
                                    <a href="setveni_koledar.php" class="calendar-icon"><i class="fa-regular fa-calendar"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Sadike/krhka solata.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Krhkolistna solata</h3>
                                <div class="button-icon-row">
                                    <a href="trgovina_sadike.php" class="view-button">Poglej v trgovini</a>
                                    <a href="setveni_koledar.php" class="calendar-icon"><i class="fa-regular fa-calendar"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Sadike/rdeča solata.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Rdeča solata</h3>
                                <div class="button-icon-row">
                                    <a href="trgovina_sadike.php" class="view-button">Poglej v trgovini</a>
                                    <a href="setveni_koledar.php" class="calendar-icon"><i class="fa-regular fa-calendar"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Sadike/ledenka.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Kristalka</h3>
                                <div class="button-icon-row">
                                    <a href="trgovina_sadike.php" class="view-button">Poglej v trgovini</a>
                                    <a href="setveni_koledar.php" class="calendar-icon"><i class="fa-regular fa-calendar"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Sadike/blitva.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Blitva</h3>
                                <div class="button-icon-row">
                                    <a href="trgovina_sadike.php" class="view-button">Poglej v trgovini</a>
                                    <a href="setveni_koledar.php" class="calendar-icon"><i class="fa-regular fa-calendar"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Sadike/spinača.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Špinača</h3>
                                <div class="button-icon-row">
                                    <a href="trgovina_sadike.php" class="view-button">Poglej v trgovini</a>
                                    <a href="setveni_koledar.php" class="calendar-icon"><i class="fa-regular fa-calendar"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Sadike/rukula.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Rukula</h3>
                                <div class="button-icon-row">
                                    <a href="trgovina_sadike.php" class="view-button">Poglej v trgovini</a>
                                    <a href="setveni_koledar.php" class="calendar-icon"><i class="fa-regular fa-calendar"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Sadike/radič.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Radič</h3>
                                <div class="button-icon-row">
                                    <a href="trgovina_sadike.php" class="view-button">Poglej v trgovini</a>
                                    <a href="setveni_koledar.php" class="calendar-icon"><i class="fa-regular fa-calendar"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Sadike/koleraba.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Koleraba</h3>
                                <div class="button-icon-row">
                                    <a href="trgovina_sadike.php" class="view-button">Poglej v trgovini</a>
                                    <a href="setveni_koledar.php" class="calendar-icon"><i class="fa-regular fa-calendar"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Sadike/brokoli.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Brokoli</h3>
                                <div class="button-icon-row">
                                    <a href="trgovina_sadike.php" class="view-button">Poglej v trgovini</a>
                                    <a href="setveni_koledar.php" class="calendar-icon"><i class="fa-regular fa-calendar"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Sadike/cvetača.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Cvetača</h3>
                                <div class="button-icon-row">
                                    <a href="trgovina_sadike.php" class="view-button">Poglej v trgovini</a>
                                    <a href="setveni_koledar.php" class="calendar-icon"><i class="fa-regular fa-calendar"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Sadike/zelje.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Zelje</h3>
                                <div class="button-icon-row">
                                    <a href="trgovina_sadike.php" class="view-button">Poglej v trgovini</a>
                                    <a href="setveni_koledar.php" class="calendar-icon"><i class="fa-regular fa-calendar"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Sadike/ohrovt.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Ohrovt</h3>
                                <div class="button-icon-row">
                                    <a href="trgovina_sadike.php" class="view-button">Poglej v trgovini</a>
                                    <a href="setveni_koledar.php" class="calendar-icon"><i class="fa-regular fa-calendar"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Sadike/grah.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Grah</h3>
                                <div class="button-icon-row">
                                    <a href="trgovina_sadike.php" class="view-button">Poglej v trgovini</a>
                                    <a href="setveni_koledar.php" class="calendar-icon"><i class="fa-regular fa-calendar"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Sadike/nizek fizol.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Nizek fizol</h3>
                                <div class="button-icon-row">
                                    <a href="trgovina_sadike.php" class="view-button">Poglej v trgovini</a>
                                    <a href="setveni_koledar.php" class="calendar-icon"><i class="fa-regular fa-calendar"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-container">
                                <div class="image-container">
                                    <img src="fotografije/Ponudba/Sadike/strocji fizol rastlina.jpg" alt="Sladka paprika">
                                </div>
                                <h3 class="item-title">Stročji fizol</h3>
                                <div class="button-icon-row">
                                    <a href="trgovina_sadike.php" class="view-button">Poglej v trgovini</a>
                                    <a href="setveni_koledar.php" class="calendar-icon"><i class="fa-regular fa-calendar"></i></a>
                                </div>
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