<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Setveni kooledar</title>
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
            .ozadje-temno {
                background-image: url('fotografije/ozadje temno-01.png');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }
            .koledar {
                background-color: rgb(224, 224, 224);
                padding: 5px;
                border-radius: 4%;
            }
            .month-navigation {
                display: flex;
                justify-content: center;
                align-items: center;
                margin: 10px;
            }
            .month-navigation button {
                padding: 6px 10px;
                margin: 0 10px;
                cursor: pointer;
                border: 2px solid #72AC45;
                background-color: transparent;
                font-size: 1.2em;
                outline: none;
                border-radius: 4px; 
                line-height: 1;
            }
            .month-table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 20px;
            }
            .month-table th, .month-table td {
                border: 1px solid #ffffff;
                padding: 6px;
                text-align: center;
            }
            .month-table th {
                background-color: #ffffff;
            }
            .clickable-day {
                position: relative;
                cursor: pointer;
            }
            .clickable-day::after {
                content: "";
                display: block;
                width: 6px;
                height: 6px;
                background-color: #72AC45;
                border-radius: 50%;
                position: absolute;
                bottom: 2px;
                left: 2px;
            }
            .planting-info {
                margin-top: 20px;
                padding: 15px;
                border: 1px solid #ffffff;
                border-radius: 5px;
                display: none;
            }
            .planting-info h3 {
                margin-top: 0;
            }
        </style>
    </head>

        <body>

        <?php include 'orodna_vrstica_zgoraj.php'; ?>

            <!-- Glava strani -->
            <?php include 'header_temno.php'; ?>

             <!-- Telo - vsebina -->
            <main class="container my-3">
                
                <h3 class="shop-title">Setveni Koledar</h3>
                <hr>
            <div class="koledar">
                <div class="month-navigation">
                    <button id="prev-month">&lt;</button>
                    <h2 id="current-month-title"></h2>
                    <button id="next-month">&gt;</button>
                </div>
            
                <div id="calendar-container">
                    </div>
            
                <div id="planting-info" class="planting-info">
                    <h3 id="selected-date"></h3>
                    <p id="planting-details"></p>
                </div>
            </div>
                <script>
                    const calendarContainer = document.getElementById('calendar-container');
                    const prevMonthButton = document.getElementById('prev-month');
                    const nextMonthButton = document.getElementById('next-month');
                    const currentMonthTitle = document.getElementById('current-month-title');
                    const plantingInfoDiv = document.getElementById('planting-info');
                    const selectedDateHeading = document.getElementById('selected-date');
                    const plantingDetailsParagraph = document.getElementById('planting-details');
            
                    const plantingData = {
                        'januar': {
                            13: 'Sejemo češnjev paradižnik, volovsko srce, rumen paradižnik, sladko in pekočo papriko v notranjih prostorih.',
                            22: 'Sejemo brokoli, cvetačo in zelje v notranjih prostorih.',
                            28: 'Sejemo baziliko (če jo imaš), paradižnik in paprike za zgodnje sadike.'
                        },
                        'februar': {
                            1: 'Sejemo brokoli, cvetačo, ohrovt, zelje.',
                            10: 'Sejemo blitvo in rukolo v zaščitenih prostorih.',
                            13: 'Sejemo papriko baburo v notranjih prostorih.',
                            19: 'Sejemo špinačo, kristalko in krhkolistno solato.',
                            25: 'Sejemo grah in nizek fižol (če vreme dopušča).'
                        },
                        'marec': {
                            2: 'Sejemo radič, rukolo, blitvo, špinačo na prosto.',
                            7: 'Sejemo fižol v zaščitenih prostorih.',
                            12: 'Presajamo paradižnik in paprike v večje lončke.',
                            16: 'Sejemo solate: kristalka, rdeča, krhkolistna.',
                            20: 'Sejemo kumare za vlaganje in solatne kumare v lončke.',
                            28: 'Sejemo brokoli in kolerabo.'
                        },
                        'april': {
                            5: 'Sejemo bučo hokaido, maslenko in rumene bučke v lončke.',
                            10: 'Presajamo solato, brokoli in ohrovt na prosto.',
                            15: 'Sejemo grah, fižol in radič.',
                            20: 'Presajamo špinačo, blitvo in rukolo na prosto.',
                            25: 'Sejemo kumare za vlaganje in solatne kumare na prosto (če je dovolj toplo).'
                        },
                        'maj': {
                            1: 'Presajamo paradižnik (vse vrste), paprike (vse vrste), bučke in kumare na prosto.',
                            6: 'Sejemo fižol in grah na prosto.',
                            10: 'Sejemo kolerabo in blitvo za poletno bero.',
                            16: 'Presajamo sadike buč in bučk na vrt.',
                            20: 'Presajamo ohrovt, brokoli in cvetačo na prosto.',
                            26: 'Pobiramo prve solate in rukolo.'
                        },
                        'junij': {
                            2: 'Sejemo novo rundo solate, blitve in špinače.',
                            7: 'Sejemo fižol in radič za jesensko bero.',
                            13: 'Presajamo sadike za pozni brokoli in cvetačo.',
                            19: 'Sejemo ohrovt in zelje za jesen.',
                            25: 'Pobiramo kumare, bučke in solate.',
                            30: 'Sejemo špinačo za pozno poletje.'
                        },
                        'julij': {
                            3: 'Sejemo radič in endivijo za jesen.',
                            7: 'Sejemo kolerabo in ohrovt za jesen/zimo.',
                            12: 'Sejemo zadnje kumare in fižol.',
                            18: 'Pobiramo paradižnike, paprike, kumare, bučke.',
                            23: 'Sejemo brokoli za jesensko bero.',
                            30: 'Sejemo rukolo in solato za pozno poletje.'
                        },
                        'avgust': {
                            4: 'Sejemo špinačo, blitvo in rukolo.',
                            8: 'Pobiramo buče, kumare, paprike.',
                            14: 'Sejemo radič za zimsko solato.',
                            19: 'Sejemo zelje in ohrovt za kasno bero.',
                            24: 'Pobiramo paradižnik in fižol.',
                            29: 'Sejemo solato za jesensko sajenje.'
                        },
                        'september': {
                            3: 'Presajamo radič in endivijo.',
                            8: 'Sejemo motovilec in zimsko špinačo.',
                            13: 'Pobiramo kolerabo, ohrovt, blitvo.',
                            18: 'Sejemo zadnje redkvice, rukolo.',
                            24: 'Pobiramo buče in začnemo shranjevanje.',
                            30: 'Pokrivamo občutljive rastline pred mrazom.'
                        },
                        'oktober': {
                            5: 'Pobiramo zadnji paradižnik, papriko, kumare.',
                            10: 'Presajamo motovilec, zimsko solato v rastlinjak.',
                            15: 'Urejamo vrt in zastiramo gredice.'
                        },
                        'november': {
                            1: 'Pobiramo zelje, ohrovt, buče, kolerabo.',
                            15: 'Shranjujemo pridelke, priprava komposta.'
                        },
                        'december': {
                            5: 'Čas za načrtovanje naslednje sezone.'
                        }
                    };
                
            
                    const monthOrder = ['januar', 'februar', 'marec', 'april', 'maj', 'junij', 'julij', 'avgust', 'september', 'oktober', 'november', 'december'];
                    let currentMonthIndex = 0;
            
                    function generateCalendar(monthName) {
                        const monthData = plantingData[monthName];
                        const daysInMonth = new Date(new Date().getFullYear(), monthOrder.indexOf(monthName) + 1, 0).getDate();
                        const firstDayOfMonth = new Date(new Date().getFullYear(), monthOrder.indexOf(monthName), 1).getDay(); // 0 = nedelja, 1 = ponedeljek itd.
                        const localizedFirstDay = (firstDayOfMonth === 0) ? 6 : firstDayOfMonth - 1; // Pon = 0, Tor = 1 ... Ned = 6
            
                        const table = document.createElement('table');
                        table.classList.add('month-table');
                        const thead = document.createElement('thead');
                        const tbody = document.createElement('tbody');
                        const daysOfWeek = ['Pon', 'Tor', 'Sre', 'Čet', 'Pet', 'Sob', 'Ned'];
            
                        let headerRow = document.createElement('tr');
                        daysOfWeek.forEach(day => {
                            const th = document.createElement('th');
                            th.textContent = day;
                            headerRow.appendChild(th);
                        });
                        thead.appendChild(headerRow);
                        table.appendChild(thead);
            
                        let dayCounter = 1;
                        for (let i = 0; i < 6; i++) { // Do 6 vrstic, da zajamemo vse mesece
                            let row = document.createElement('tr');
                            for (let j = 0; j < 7; j++) {
                                if (i === 0 && j < localizedFirstDay) {
                                    let td = document.createElement('td');
                                    row.appendChild(td);
                                } else if (dayCounter <= daysInMonth) {
                                    let td = document.createElement('td');
                                    td.textContent = dayCounter;
                                    if (monthData && monthData[dayCounter]) {
                                        td.classList.add('clickable-day');
                                        td.dataset.plantingInfo = monthData[dayCounter];
                                        td.addEventListener('click', showPlantingInfo);
                                    }
                                    row.appendChild(td);
                                    dayCounter++;
                                } else {
                                    let td = document.createElement('td');
                                    row.appendChild(td);
                                }
                            }
                            tbody.appendChild(row);
                            if (dayCounter > daysInMonth) {
                                break;
                            }
                        }
                        table.appendChild(tbody);
                        calendarContainer.innerHTML = '';
                        calendarContainer.appendChild(table);
                        currentMonthTitle.textContent = monthName.charAt(0).toUpperCase() + monthName.slice(1);
                    }
            
                    function showPlantingInfo(event) {
                        const day = event.target.textContent;
                        const info = event.target.dataset.plantingInfo;
                        const monthName = monthOrder[currentMonthIndex];

                        plantingDetailsParagraph.textContent = info;
                        plantingInfoDiv.style.display = 'block';
                    }
            
                    function navigateMonth(direction) {
                        currentMonthIndex += direction;
                        if (currentMonthIndex < 0) {
                            currentMonthIndex = monthOrder.length - 1;
                        } else if (currentMonthIndex >= monthOrder.length) {
                            currentMonthIndex = 0;
                        }
                        generateCalendar(monthOrder[currentMonthIndex]);
                        plantingInfoDiv.style.display = 'none'; // Skrij info ob preklopu meseca
                    }
            
                    prevMonthButton.addEventListener('click', () => navigateMonth(-1));
                    nextMonthButton.addEventListener('click', () => navigateMonth(1));
            
                    // Prikaz začetnega meseca (trenutni mesec)
                    const today = new Date();
                    const currentMonthName = new Intl.DateTimeFormat('sl-SI', { month: 'long' }).format(today).toLowerCase();
                    currentMonthIndex = monthOrder.indexOf(currentMonthName);
                    if (currentMonthIndex === -1) {
                        currentMonthIndex = 0; // Če trenutnega meseca ni v podatkih, začni z januarjem
                    }
                    generateCalendar(monthOrder[currentMonthIndex]);
                </script>
            
            </main>

        <!-- Noga -->
        <?php include 'footer.php'; ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>