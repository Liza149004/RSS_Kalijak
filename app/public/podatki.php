<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Podatki</title>
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
                background-color: rgb(240, 238, 238);
                padding: 5px;
                border-radius: 4%;
            }
            .kosarica-button{
                background-color: #72AC45;
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
        </style>
    </head>

        <body>

        <?php include 'orodna_vrstica_zgoraj.php'; ?>

            <!-- Glava strani -->
            <?php include 'header_temno.php'; ?>

             <!-- Telo - vsebina -->
            <main class="container my-3">
                <div class="conteiner-fluid form">
                    <form class="container-fluid" action="/action_page.php" class="was-validated">
                        <h2 class="shop-title">KONTAKTNI PODATKI</h2>
                        <hr>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Ime">
                          <input type="text" class="form-control" placeholder="Priimek">
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Naslov">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Poštna številka">
                            <input type="text" class="form-control" placeholder="Kraj">
                          </div>
                        <hr>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Telefonska številka">
                        </div>
                        <hr>
                    </form>
                
                    <form class="container-fluid">
                        <h2 class="shop-title">NAČIN PLAČILA</h2>
                        <hr>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Ime na kartici">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Številka kartice">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Datum poteka">
                            <input type="text" class="form-control" placeholder="CVV">
                        </div>
                        <hr>
                        <button type="submit" class="btn text-white kosarica-button">Potrdi in plačaj</button>
                    </form>
                </div>  
        </main>

        <!-- Noga -->
        <?php include 'footer.php'; ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>