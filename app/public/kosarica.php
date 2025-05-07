<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Košarica</title>
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
                padding: 10px;
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
            .ozadje-temno {
                background-image: url('fotografije/ozadje temno-01.png');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }
            .card {
                border-radius: 15px; 
                border: none; 
                margin-bottom: 15px;
            }

            .card-body {
                background-color: #fff;
                border-radius: 15px;
                padding: 15px;
                display: flex; 
                align-items: center; 
                justify-content: space-between; 
            }

            .product-info {
                display: flex;
                align-items: center;
            }

            .product-image {
                width: 50px;
                height: 50px;
                margin-right: 10px;
            }

            .input-group-quantity { 
                width: 90px;
            }

            .input-group-quantity .btn {
                border-radius: 8px;
                border: 1px solid #ced4da;
                font-size: 0.8rem;
                padding: 0.1rem 0.4rem;
            }

            .input-group-quantity .form-control {
                border-radius: 8px;
                text-align: center;
                font-size: 0.9rem;
                width: 30px;
                padding: 0.1rem 0.2rem;
            }

            .product-details-right { 
                display: flex;
                align-items: center;
            }

            .product-price {
                font-weight: bold;
                margin-left: 15px;
                white-space: nowrap; 
            }

            .list-group-flush > .list-group-item {
                border-radius: 5px;
                padding: 0.75rem 0;
                border-bottom: 1px solid #eee;
            }

            .font {
                margin-left: 5px;
                margin-right: 5px;
               
            }

            .list-group-flush > .list-group-item:last-child {
                border-bottom: none;
            }

            .kosarica-button{
                background-color: #72AC45;
            }
            a {
                text-decoration: none;
                color: #FFFFFF;
            }
        </style>
    </head>

        <body>

        <?php include 'orodna_vrstica_zgoraj.php'; ?>

            <!-- Glava strani -->
            <?php include 'header_temno.php'; ?>

             <!-- Telo - vsebina -->
            <main class="container my-3">
                <div class="container mt-4 form">
                    <h2 class="shop-title">KOŠARICA</h2>
                    <hr>
                    <div class="row row-cols-1 g-3">
                      <div class="col">
                        <div class="card shadow-sm">
                          <div class="card-body">
                            <div class="product-info">
                              <img src="fotografije/Ponudba/Zelenjava/cesnjev.jpg" alt="Češnjev paradižnik" class="product-image">
                              <h6 class="card-title mb-0">Češnjev paradižnik</h6>
                            </div>
                            <div class="product-details-right">
                              <div class="input-group input-group-sm me-2 input-group-quantity">
                                <button class="btn btn-outline-secondary px-2 py-1" type="button">-</button>
                                <input type="number" class="form-control text-center px-0 py-1" value="3" min="1" style="width: 30px; padding: 0.1rem 0.2rem;">
                                <button class="btn btn-outline-secondary px-2 py-1" type="button">+</button>
                              </div>
                              <span class="product-price">6,00 €</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card shadow-sm">
                          <div class="card-body">
                            <div class="product-info">
                              <img src="fotografije/Ponudba/Sadike/sladka paprika.jpg" alt="Sladka paprika" class="product-image">
                              <h6 class="card-title mb-0">Sladka paprika</h6>
                            </div>
                            <div class="product-details-right">
                              <div class="input-group input-group-sm me-2 input-group-quantity">
                                <button class="btn btn-outline-secondary px-2 py-1" type="button">-</button>
                                <input type="number" class="form-control text-center px-0 py-1" value="3" min="1" style="width: 30px; padding: 0.1rem 0.2rem;">
                                <button class="btn btn-outline-secondary px-2 py-1" type="button">+</button>
                              </div>
                              <span class="product-price">9,00 €</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                
                    <div class="mt-3">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          <span class="font">Vmesna cena</span>
                          <span class="font">...</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          <span class="font">DDV</span>
                          <span class="font">...</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          <span class="font">Koda za popust</span>
                          <div>
                            <input type="text" class="form-control form-control-sm me-2" placeholder="Vnesite kodo" style="width: 120px; display: inline-block;">
                            <button class="btn btn-outline-secondary btn-sm">Uporabi</button>
                          </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center fw-bold">
                          <span class="font">Končni znesek</span>
                          <span class="font">...</span>
                        </li>
                      </ul>
                      <div class="d-grid gap-2 mt-3">
                        <button class="btn text-white kosarica-button" type="button"><a href="podatki.php">Oddaj naročilo</a></button>
                      </div>
                    </div>
                  </div>
            </main>

        <!-- Noga -->
        <?php include 'footer.php'; ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>