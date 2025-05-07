<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>O nas</title>
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
            .shop-title {
                font-size: 1.8em;
                font-weight: bold;
                margin: 10px;
                color: #393325;
                text-align: center;
            }
            .form {
                background-color: rgb(187, 187, 187);
                padding: 5px;
                border-radius: 4%;
            }
            .kosarica-button{
                background-color: #72AC45;
            }
            .link{
                color: #FFFFFF;
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
            main {
                text-align: center;  
            }
            .container main{
                max-width: 600px;
                margin: 20px auto;
                padding: 20px;
            }

            h2 {
                color: #333;
                margin-bottom: 20px;
            }

            .map-container {
                width: 100%;
                border: 4px solid #aed581; 
                border-radius: 8px;
                overflow: hidden;
                margin-bottom: 10px; 
                height: 200px; 
            }

            iframe {
                display: block;
                width: 100%;
                height: 100%; 
                border: 0;
            }

            .address {
                background-color: #d7f1db;
                color:#72AC45;
                padding: 10px;
                border-radius: 15px; 
                margin-top: 5px; 
                margin-bottom: 20px; 
            }

            .about-us {
                background-color: #72AC45;
                color: #ffffff;
                padding: 20px;
                border-radius: 10px;
                margin-top: 20px;
                text-align: left;
            }

            .about-us h3 {
                font-size: 1.8em;
                font-weight: bold;
                color: #ffffff;
                text-align: center;
                margin-top: 0;
                margin-bottom: 15px;
            }

            .certificates {
                margin-top: 30px;
                padding: 20px;
                background-color: #f9f9f9;
                border-radius: 10px;
                text-align: center;
            }

            .certificates h3 {
                color: #72AC45;
                margin-bottom: 20px;
            }

            .certificate-list {
                list-style: none;
                padding: 0;
            }

            .certificate-item {
                display: flex;
                align-items: center;
                margin-bottom: 15px;
                padding-bottom: 15px;
                border-bottom: 1px solid #eee;
            }

            .certificate-item:last-child {
                border-bottom: none;
                margin-bottom: 0;
                padding-bottom: 0;
            }

            .certificate-logo {
                width: 60px; 
                height: 60px; 
                margin-right: 15px;
                border: 1px solid #ddd;
                border-radius: 5px;
                object-fit: contain;
            }

            .certificate-info {
                text-align: left;
            }

            .certificate-info h4 {
                color: #72AC45;
                margin-top: 0;
                margin-bottom: 5px;
                font-size: 1.1em;
            }

            .certificate-info p {
                color: #393325;
                font-size: 0.9em;
                margin-bottom: 0;
            }

            /* Za manjše zaslone postavimo sliko nad besedilo */
            @media (max-width: 600px) {
                .certificate-item {
                    flex-direction: column;
                    text-align: center;
                }

                .certificate-logo {
                    margin-right: 0;
                    margin-bottom: 10px;
                }

                .certificate-info {
                    text-align: center;
                }
            }
            .back-to-top {
                position: fixed;
                bottom: 20px;
                left: 93%;
                transform: translateX(-50%);
                z-index: 999;
                cursor: pointer;
                background-color: #ffffff;
                border-radius: 10%;
                padding: 5px;
            }
            .back-to-top img {
                width: 25px; /* prilagodi po potrebi */
                height: auto;
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
                <div class="container">
                    <h2 class="shop-title">KJE NAS NAJDETE</h2>
                    <hr>
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2768.842988819879!2d15.0042946!3d45.9159134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4764db0c76a808a3%3A0x36a5a934b61c43c9!2sPekel%203%2C%203210%20Trebnje!5e0!3m2!1ssl!2ssi!4v1682278347983!5m2!1ssl!2ssi"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="address">📍 Pekel 3, 3210 Trebnje</div>
            
                    <div class="about-us">
                        <h3>O NAS</h3>
                        <hr>
                        <p>Smo ena redkih slovenskih ekoloških kmetij, ki se ukvarja z gojenjem lastnih sadik zelenjave, sadja in zelišč, ter lastno pridelavo zelenjave.</p>
                    </div>
                </div>
            </br>
                <h3 class="shop-title">KONTAKT</h3>
                <hr>
                <p>E-pošta: kalijak.eko@gmail.com</br>
                    tel. +386 70 700 007</p>
                <div class="certificates">
                    <h3 class="shop-title">NAŠI CERTIFIKATI</h3>
                    <hr>
                    <ul class="certificate-list">
                        <li class="certificate-item">
                            <img src="fotografije/O nas/EU_ekološki_certifikat.png" alt="Euro Cert" class="certificate-logo">
                            <div class="certificate-info">
                                <h4>EURO CERT</h4>
                                <p>EU ekološki certifikat</p>
                            </div>
                        </li>
                        <li class="certificate-item">
                            <img src="fotografije/O nas/EU_ekološka_živila.jpg" alt="Uradni znak EU" class="certificate-logo">
                            <div class="certificate-info">
                                <h4>Uradni znak EU za ekološka živila</h4>
                                <p>Kontrolira SI-EKO-002 Kmetijstvo EU</p>
                            </div>
                        </li>
                        <li class="certificate-item">
                            <img src="fotografije/O nas/Ekološko kmetijstvo Slovenije.jpg" alt="Ekološko kmetijstvo Slovenije" class="certificate-logo">
                            <div class="certificate-info">
                                <h4>Ekološko kmetijstvo Slovenije</h4>
                                <p>BIO certifikat (Inštitut KON-CERT Maribor)</p>
                            </div>
                        </li>
                        <li class="certificate-item">
                            <img src="fotografije/O nas/BIO Slovenija.png" alt="BIO Slovenija" class="certificate-logo">
                            <div class="certificate-info">
                                <h4>BIO Slovenija</h4>
                                <p>Ekološki certifikat Slovenije</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
            </main>

        <!-- Noga -->
        <?php include 'footer.php'; ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
        
    </body>
</html>