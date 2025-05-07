<html>
  <head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kmetija Kalijak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
      body {
        padding-top: 70px;
        font-family: 'Antonio', sans-serif;
      }
      .hero-logo {
        background-color: #72AC45;
        border-radius: 50%;
        width: 200px;
        height: 200px;
        margin: 0 auto;
        align-items: center;
        justify-content: center;
        margin-top: -100px;
        z-index: 10;
        position: relative;
      }
      .hero-logo img {
        width: 140px;
      }
      .slogan {
        text-align: center;
        font-weight: bold;
        font-size: 1.3rem;
        color: #52463D;
      }
      .section-title {
        font-weight: bold;
        color: #ffffff;
        background-color: #72AC45;
        padding: 10px;
        border-radius: 10px 10px 0 0;
      }
      .content-box {
        background-color: #EAF5E4;
        border-radius: 15px;
        padding: 15px;
        margin-bottom: 20px;
      }
      .btn-custom {
        background-color: #72AC45;
        color: white;
        border: none;
        border-radius: 25px;
      }
      .info-section {
        background-color: #72AC45;
        border-radius: 0 0 20px 20px;
        padding: 20px;
        color: white;
      }
      .content-box {
        background-color: #72AC45;
        color: white;
        padding: 1rem;
        flex-direction: column;
        justify-content: center;
        border-radius: 1rem;
        font-size: small;
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
        background-image: url('fotografije/Domača stran/Posnetek zaslona 2025-04-22 221429.png');
        background-position: center;
       background-repeat: repeat;
      }
    </style>
  </head>

    <body class="ozadje">

    <?php include 'orodna_vrstica_zgoraj.php'; ?>

      <!-- Glava strani -->
      <header class="conteiner my-2">
        <div style="text-align: center;">
          <img src="fotografije/logotip/logoKalijak_končno_brez obrobe.png" alt="Kalijak logotip" width="200px">
        </div>
          
        <div class="text-center mt-3">
          <h3 class="slogan">“NARAVA V VSAKEM ZRNU”</h3>
          <p class="text-muted">since 1932</p>
        </div>
      </header>

      <!-- Telo - vsebina -->
      <main class="container my-4">

        <div class="container-fluid p-3">
          <div class="row g-2">
            
            <!-- text zgoraj levo -->
            <div class="col-6 no-padding">
              <div class="content-box">
                <h6 class="fw-bold">LASTNA PRIDELAVA SEZONSKE ZELENJAVE</h6>
                <p class="mb-2 small">Na naši kmetiji pridelujemo svežo, ekološko sezonsko zelenjavo, ki raste z ljubeznijo in skrbjo za naravo. Vsak pridelek dozori na soncu in brez nepotrebnih kemikalij, da lahko uživate v pristnih okusih domače hrane.</p>
                <a href="zelenjava.php" class="btn btn-light btn-sm fw-bold">Preveri našo ponudbo<i class="bi bi-play"></i></a>
              </div>
            </div>
        
          
        
            <!-- Text spodaj desno -->
            <div class="col-6">
              <div class="content-box">
                <h6 class="fw-bold">GOJENJE SADIK SADJA, ZELENJAVE IN ZELIŠČ</h6>
                <p class="mb-2 small">V naših rastlinjakih vzgajamo kakovostne sadike zelenjave, sadnega drevja in zelišč, ki so pripravljene, da uspevajo tudi na vašem vrtu. Na voljo so gomoljnice, stročnice, razhudniki, jagodičevje in še mnogo več – za bogat in zdrav pridelek doma!</p>
                <a href="sadike.php" class="btn btn-light btn-sm fw-bold">Preveri našo ponudba<i class="bi bi-play"></i></a>
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
