<!DOCTYPE html>
<html lang="sl">
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
            padding: 15px;
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
        .error-message {
            color: red;
            font-size: 0.9em;
            margin-top: 5px;
        }
    </style>
</head>
<body>

<?php include 'orodna_vrstica_zgoraj.php'; ?>
<?php include 'header_temno.php'; ?>

<main class="container my-3">
    <div class="container-fluid form">
        <form class="container-fluid" action="izpis.php" method="POST" onsubmit="return preveriPodatke()">
            <h2 class="shop-title">KONTAKTNI PODATKI</h2>
            <hr>
            <div class="mb-3">
                <div class="input-group">
                    <input type="text" class="form-control" id="ime" name="ime" placeholder="Ime">
                    <input type="text" class="form-control" id="priimek" name="priimek" placeholder="Priimek">
                </div>
                <div id="error-ime" class="error-message"></div>
                <div id="error-priimek" class="error-message"></div>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="naslov" name="naslov" placeholder="Naslov">
                <div id="error-naslov" class="error-message"></div>
            </div>
            <div class="mb-3">
                <div class="input-group">
                    <input type="number" class="form-control" id="postna_stevilka" name="postna_stevilka" placeholder="Poštna številka">
                    <input type="text" class="form-control" id="kraj" name="kraj" placeholder="Kraj">
                </div>
                <div id="error-postna_stevilka" class="error-message"></div>
                <div id="error-kraj" class="error-message"></div>
            </div>
            <hr>
            <div class="mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                <div id="error-email" class="error-message"></div>
            </div>
            <div class="mb-3">
                <input type="tel" class="form-control" id="telefonska_stevilka" name="telefonska_stevilka" placeholder="Telefonska številka">
                <div id="error-telefonska_stevilka" class="error-message"></div>
            </div>
            <hr>
            <h2 class="shop-title">NAČIN PLAČILA</h2>
            <hr>
            <div class="mb-3">
                <input type="text" class="form-control" id="ime_na_kartici" name="ime_na_kartici" placeholder="Ime na kartici">
                <div id="error-ime_na_kartici" class="error-message"></div>
            </div>
            <div class="mb-3">
                <input type="number" class="form-control" id="stevilka_kartice" name="stevilka_kartice" placeholder="Številka kartice">
                <div id="error-stevilka_kartice" class="error-message"></div>
            </div>
            <div class="mb-3">
                <div class="input-group">
                    <input type="month" class="form-control" id="datum_poteka" name="datum_poteka" placeholder="Datum poteka (MM/LL)">
                    <input type="number" class="form-control" id="cvv" name="cvv" placeholder="CVV" maxlength="3">
                </div>
                <div id="error-datum_poteka" class="error-message"></div>
                <div id="error-cvv" class="error-message"></div>
            </div>
            <hr>
            <button type="submit" class="btn text-white kosarica-button" name="narocilo">Potrdi in plačaj</button>
        </form>
    </div>
</main>

<?php include 'footer.php'; ?>

<script>
    function preveriPodatke() {
        let napake = false;

        document.querySelectorAll('.error-message').forEach(el => el.textContent = '');

        // Preveri kontaktne podatke
        if (document.getElementById('ime').value.trim() === '') {
            document.getElementById('error-ime').textContent = 'Vnesite ime.';
            napake = true;
        }
        if (document.getElementById('priimek').value.trim() === '') {
            document.getElementById('error-priimek').textContent = 'Vnesite priimek.';
            napake = true;
        }
        if (document.getElementById('naslov').value.trim() === '') {
            document.getElementById('error-naslov').textContent = 'Vnesite naslov.';
            napake = true;
        }
        if (document.getElementById('postna_stevilka').value.trim() === '') {
            document.getElementById('error-postna_stevilka').textContent = 'Vnesite poštno številko.';
            napake = true;
        }
        if (document.getElementById('kraj').value.trim() === '') {
            document.getElementById('error-kraj').textContent = 'Vnesite kraj.';
            napake = true;
        }
        if (document.getElementById('email').value.trim() === '') {
            document.getElementById('error-email').textContent = 'Vnesite email.';
            napake = true;
        } else {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(document.getElementById('email').value)) {
                document.getElementById('error-email').textContent = 'Vnesite veljaven email naslov.';
                napake = true;
            }
        }
        if (document.getElementById('telefonska_stevilka').value.trim() === '') {
            document.getElementById('error-telefonska_stevilka').textContent = 'Vnesite telefonsko številko.';
            napake = true;
        }

        // Preveri podatke za plačilo
        if (document.getElementById('ime_na_kartici').value.trim() === '') {
            document.getElementById('error-ime_na_kartici').textContent = 'Vnesite ime na kartici.';
            napake = true;
        }
        if (document.getElementById('stevilka_kartice').value.trim() === '') {
            document.getElementById('error-stevilka_kartice').textContent = 'Vnesite številko kartice.';
            napake = true;
        } else {
            const stevilkaKarticeRegex = /^\d{13,19}$/; // Primer preverjanja dolžine
            if (!stevilkaKarticeRegex.test(document.getElementById('stevilka_kartice').value)) {
                document.getElementById('error-stevilka_kartice').textContent = 'Vnesite veljavno številko kartice.';
                napake = true;
            }
        }
        if (document.getElementById('datum_poteka').value.trim() === '') {
            document.getElementById('error-datum_poteka').textContent = 'Vnesite datum poteka.';
            napake = true;
        } 
        if (document.getElementById('cvv').value.trim() === '') {
            document.getElementById('error-cvv').textContent = 'Vnesite CVV.';
            napake = true;
        } else {
            const cvvRegex = /^\d{3,4}$/;
            if (!cvvRegex.test(document.getElementById('cvv').value)) {
                document.getElementById('error-cvv').textContent = 'Vnesite veljaven CVV.';
                napake = true;
            }
        }

        return !napake;
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>