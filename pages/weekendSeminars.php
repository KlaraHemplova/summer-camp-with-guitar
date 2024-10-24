<?php $page = "weekendSeminars"; ?>

<!DOCTYPE html>
<html lang="cs">

<!------- HEAD -------->
<?php include_once "../php/head.php"; ?>


<body class="seminar-color">

    <!------- HEADER -------->
    <?php include_once "../php/header.php"; ?>


    <!------- MAIN CONTENT -------->
    <main id="main">


        <!-- WEEKEND SEMINARS (basic info) -->
        <section class="container">

            <div class="main-title">
                <h1>VÍKENDOVÉ SEMINÁŘE</h1>
                <hr class="h1-hr">
            </div>

            <div class="basic-info-flex">

                <div class="basic-info">

                    <!-- date -->
                    <div class="date">
                        <div>
                            <div class="date-label">Příští seminář bude:</div>
                            <div class="date-text bold">31. ledna až 2. února 2025</div>
                        </div>
                        <img class="icon" src="../img/icons/blue/calendar.png" alt="calendar icon">
                    </div>

                    <!-- location -->
                    <div class="location">
                        <div class="location-text">
                            <div>Tábor J.&nbsp;A.&nbsp;Komenského</div> <!-- areal name -->
                            <div>Běleč nad Orlicí 121, 503&nbsp;46 Běleč n. O.</div> <!-- areal adress -->
                        </div>
                        <img class="icon" src="../img/icons/blue/map.png" alt="map icon">
                    </div>

                    <!-- price -->
                    <div class="price">
                        <div>
                            <div class="price-number">cena semináře <span class="bold">2 300 Kč</span></div>
                            <div class="price-text">V ceně je zahrnuto ubytování s&nbsp;plnou penzí, výuka a&nbsp;materiály k&nbsp;výuce.</div>
                        </div>
                        <img class="icon" src="../img/icons/blue/price.png" alt="price icon">
                    </div>

                    <!-- transport -->
                    <div class="transport">
                        <div class="transport-text">dopravu si rodiče zajišťují sami</div>
                        <img class="icon" src="../img/icons/blue/car.png" alt="car icon">
                    </div>

                </div>

                <!-- map -->
                <iframe class="map" src="https://frame.mapy.cz/s/covedozate" frameborder="0"></iframe>

            </div>

        </section>


        <!-- ALL SEMINAR DATES -->
        <section class="container">

            <div class="secondary-title">
                <h2>VŠECHNY TERMÍNY</h2>
                <hr class="h2-hr">
            </div>

            <div class="weekends text-box">

                <div class="weekends-section text-box-item purple">
                    <h4>2025</h4> <!-- current year -->
                    <hr class="h4-hr">

                    <div class="seminar-date-row">
                        <div class="seminar-date days">31.–2.</div>
                        <div class="seminar-date month">leden/únor</div>
                    </div>
                    <div class="seminar-date-row">
                        <div class="seminar-date days">7.–9.</div>
                        <div class="seminar-date month">březen</div>
                    </div>
                    <div class="seminar-date-row">
                        <div class="seminar-date days">20.–22.</div>
                        <div class="seminar-date month">červen</div>
                    </div>
                    <div class="seminar-date-row">
                        <div class="seminar-date days">3.–5.</div>
                        <div class="seminar-date month">říjen</div>
                    </div>
                </div>

                <div class="weekends-section text-box-item blue">
                    <h4>2026</h4> <!-- next year -->
                    <hr class="h4-hr">

                    <div class="seminar-date-row">
                        <div class="seminar-date days">6.–8.</div>
                        <div class="seminar-date month">únor</div>
                    </div>
                    <div class="seminar-date-row">
                        <div class="seminar-date days">10.–12.</div>
                        <div class="seminar-date month">duben</div>
                    </div>
                    <div class="seminar-date-row">
                        <div class="seminar-date days">12.–14.</div>
                        <div class="seminar-date month">červen</div>
                    </div>
                    <div class="seminar-date-row">
                        <div class="seminar-date days">2.–4.</div>
                        <div class="seminar-date month">říjen</div>
                    </div>
                </div>

                <div class="weekends-section text-box-item pink" style="display: none;">
                    <h4>2027</h4> <!-- year after next year -->
                    <hr class="h4-hr">
                </div>
            </div>

        </section>
        
        <!-- TEACHERS -->
        <section class="container">

            <div class="secondary-title">
                <h2>VYUČUJÍCÍ</h2>
                <hr class="h2-hr">
            </div>

            <div class="teachers-text">Na víkendových seminářích většinou vyučují tři z&nbsp;těchto lektorů:</div>

            <div class="teachers">
                <div>Markéta Mourková</div>
                <div>Markéta Matoušková</div>
                <div>Tomáš Havel</div>
                <div>Anna Beckerová</div>
                <div>Klára Hemplová</div>
            </div>

            <button type="button" onclick="location.href='../pages/campLeadership.php'">Více o vyučujících&hellip;</button>

        </section>

        <!-- WEEKEND SEMINAR SCHEDULE -->
        <section class="container">

            <div class="secondary-title">
                <h2>HARMONOGRAM VÍKENDU</h2>
                <hr class="h2-hr">
            </div>

            <!-- WRAPPER -->
            <div class="wrapper">
                <div class="note">

                    <!-- wrapper spiral part -->
                    <div class="spiral-part spiral-part-weekends">
                        <div class="spiral">
                            <div class="hole"></div>
                            <div class="wire"></div>
                        </div>
                        <div class="spiral">
                            <div class="hole"></div>
                            <div class="wire"></div>
                        </div>
                        <div class="spiral">
                            <div class="hole"></div>
                            <div class="wire"></div>
                        </div>
                        <div class="spiral">
                            <div class="hole"></div>
                            <div class="wire"></div>
                        </div>
                        <div class="spiral">
                            <div class="hole"></div>
                            <div class="wire"></div>
                        </div>
                        <div class="spiral">
                            <div class="hole"></div>
                            <div class="wire"></div>
                        </div>
                        <div class="spiral">
                            <div class="hole"></div>
                            <div class="wire"></div>
                        </div>
                        <div class="spiral">
                            <div class="hole"></div>
                            <div class="wire"></div>
                        </div>
                        <div class="spiral">
                            <div class="hole"></div>
                            <div class="wire"></div>
                        </div>
                        <div class="spiral">
                            <div class="hole"></div>
                            <div class="wire"></div>
                        </div>
                        <div class="spiral">
                            <div class="hole"></div>
                            <div class="wire"></div>
                        </div>
                        <div class="spiral">
                            <div class="hole"></div>
                            <div class="wire"></div>
                        </div>
                        <div class="spiral">
                            <div class="hole"></div>
                            <div class="wire"></div>
                        </div>
                    </div>

                    <div class="daily-schedule">
                        <!-- weekend seminar schedule table -->
                        <table rules="none" cellspacing="0">
                            <tr><th colspan="5">Pátek</th></tr>
                            <tr><td>18.30</td>  <td>–</td>  <td>19.00</td>  <td>příjezd účastníků</td></tr>
                            <tr><td>19.15</td>  <td></td>   <td></td>       <td>večeře</td></tr>
                            <tr><td>20.00</td>  <td></td>   <td></td>       <td>seznámení s programem semináře</td></tr>
                            <tr><td>22.00</td>  <td></td>   <td></td>       <td>večerka účastníků do 15&nbsp;let</td></tr>
                            <tr><td>23.00</td>  <td></td>   <td></td>       <td>večerka účastníků nad 15&nbsp;let</td></tr>
                            <tr><td colspan="5"></td></tr>
                            <tr><th colspan="5">Sobota</th></tr>
                            <tr><td>8.00</td>   <td></td>   <td></td>       <td>snídaně</td></tr>
                            <tr><td>9.00</td>   <td>–</td>  <td>12.00</td>  <td>výuka</td></tr>
                            <tr><td>12.00</td>  <td>–</td>  <td>14.30</td>  <td>oběd a&nbsp;polední klid</td></tr>
                            <tr><td>14.30</td>  <td>–</td>  <td>17.30</td>  <td>výuka</td></tr>
                            <tr><td>18.00</td>  <td></td>   <td></td>       <td>večeře</td></tr>
                            <tr><td>19.30</td>  <td>–</td>  <td>20.15</td>  <td>společné hraní (1.–3.&nbsp;skupina)</td></tr>
                            <tr><td>20.15</td>  <td>–</td>  <td>21.00</td>  <td>společné hraní (4.–6.&nbsp;skupina)</td></tr>
                            <tr><td>22.00</td>  <td></td>   <td></td>       <td>večerka účastníků do 15&nbsp;let</td></tr>
                            <tr><td>23.00</td>  <td></td>   <td></td>       <td>večerka účastníků nad 15&nbsp;let</td></tr>
                            <tr><td colspan="5"></td></tr>
                            <tr><th colspan="5">Neděle</th></tr>
                            <tr><td>8.00</td>   <td></td>   <td></td>       <td>snídaně</td></tr>
                            <tr><td>9.00</td>   <td>–</td>  <td>12.00</td>  <td>výuka</td></tr>
                            <tr><td>12.00</td>  <td>–</td>  <td>13.30</td>  <td>oběd a&nbsp;polední klid</td></tr>
                            <tr><td>13.30</td>  <td>–</td>  <td>14.30</td>  <td>společné hraní (všichni)</td></tr>
                            <tr><td>14.30</td>  <td></td>   <td></td>       <td>odjezd účastníků</td></tr>
                        </table>
                    </div>

                </div>
            </div>

            <div class="centered">Pro všechny účastníky platí <span class="bold">Řád letního tábora s kytarou a víkendových kytarových seminářů</span>.</div>

            <button type="button" onclick="location.href='../pages/campRules.php'">Přečíst si řád</button>

        </section>

        <!-- SEMINAR PROPERTIES -->
        <section class="container">

            <div class="secondary-title">
                <h2>CO S SEBOU NA SEMINÁŘ</h2>
                <hr class="h2-hr">
            </div>

            <div class="properties text-box">
                <div class="text-box-item blue">
                    <h4>Obecné</h4>
                    <ul>
                        <li>pohodlné oblečení</li>
                        <li>přezuvky</li>
                        <li>ručník</li>
                        <li>pyžamo</li>
                        <li>hygienické potřeby</li>
                        <li>pravidelné léky</li>
                        <li>karta zdravotní pojišťovny</li>
                    </ul>
                </div>

                <div class="text-box-item purple">
                    <h4>Kytara</h4>
                    <ul>
                        <li>kytara</li>
                        <li>ladička</li>
                        <li>kapodastr (není nutný)</li>
                    </ul>
                </div>
            </div>

            <div class="centered">Mobilní telefony, tablety apod. jsou na seminářích povoleny.</div>

        </section>

    </main>


    <!------- FOOTER -------->
    <?php include_once "../php/footer.php"; ?>

</body>
</html>