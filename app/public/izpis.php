<html>
<head>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Izpis naročila</title>
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
            .form {
                background-color: rgb(240, 238, 238);
                padding: 5px;
                border-radius: 4%;
            }
            .form2 {
                background-color: rgb(240, 238, 238);
                padding: 5px;
                border-radius: 1%;
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
<?php include 'header_temno.php'; ?>

<main class="container">
    <div class="container-fluid form">
        <h2 class="shop-title">Povzetek naročila:</h2>
        <?php
            include 'povzetek_narocila.php';
        ?>
    </div>

</br>

    <div class="container-fluid form2">
        <h2 class="shop-title">Status prejetih naročil:</h2>
        
    <?php if($_SERVER['REQUEST_METHOD']==='POST'){
        include 'db_insert.php';
    }
    ?>

        <article class="row">
            <?php include 'db_fetch.php';?>

        </article>
    </div>    
        
</main>
    <?php include 'footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>