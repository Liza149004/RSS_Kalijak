<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
    <div class="container">
        <p><span class="fw-bold">Ime in priimek: </span><?php echo $izpis['ime'].' '.$izpis['priimek'];?></p>
        <p><span class="fw-bold">E-poštni naslov: </span><?php echo $izpis['email']?></p>
        <p><span class="fw-bold">Naslov: </span><?php echo $izpis['naslov'];?></p>
        <p><span class="fw-bold">Pošta: </span><?php echo $izpis['postna_st'].' '.$izpis['kraj'];?></p>
        <p><span class="fw-bold">Ime na kartici: </span><?php echo $izpis['ime_na_kartici'];?></p>
        <p><span class="fw-bold">Številka kartice: </span><?php echo $izpis['st_kartice']?></p>
        <p><span class="fw-bold">Datum poteka: </span><?php echo $izpis['datum_poteka'];?></p>
        <p><span class="fw-bold">CVV: </span><?php echo $izpis['CVV'];?></p>
        <hr>

    </div>
</div>