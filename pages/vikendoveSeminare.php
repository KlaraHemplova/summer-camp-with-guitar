<?php $page = "weekends"; ?>

<!DOCTYPE html>
<html lang="cs">

<!------- HEAD -------->
<?php include_once "../php/head.php"; ?>


<body>

    <!------- HLAVIČKA -------->
    <?php include_once "../php/header.php"; ?>


    <!------- HLAVNÍ OBSAH -------->
    <main id="main">

        <!-- VÍKENDOVÉ SEMINÁŘE -->
        <section class="container">

            <div class="main-title">
                <h1>VÍKENDOVÉ SEMINÁŘE</h1>
                <hr>
            </div>

            <div class="basic-info-flex">

                <div class="basic-info">

                    <div class="date">
                        <div>
                            <div class="date-text">Příští seminář bude:</div>
                            <div class="date-num bold">18. až 20. října 2024</div> <!-- datum konání příštího semináře-->
                        </div>
                        <img class="icon" src="../img/icons/blue/calendar.png" alt="Ikona kalendáře">
                    </div>

                    <div class="location">
                        <div class="location-text">
                            <div>Tábor J.&nbsp;A.&nbsp;Komenského</div> <!-- název areálu -->
                            <div>Běleč nad Orlicí 121, 503&nbsp;46 Běleč n. O.</div> <!-- adresa areálu -->
                        </div>
                        <img class="icon" src="../img/icons/blue/map.png" alt="Ikona mapy">
                    </div>

                    <div class="price">
                        <div>
                            <div class="price-number">cena semináře <span class="bold">2 200 Kč</span></div> <!-- cena semináře -->
                            <div class="price-summary">V ceně je zahrnuto ubytování s&nbsp;plnou penzí, výuka a&nbsp;materiály k&nbsp;výuce.</div>
                        </div>
                        <img class="icon" src="../img/icons/blue/price.png" alt="Ikona cenovky">
                    </div>

                    <div class="transport">
                        <div>dopravu si rodiče zajišťují sami</div>
                        <img class="icon" src="../img/icons/blue/car.png" alt="Ikona auta">
                    </div>

                </div>

                <!-- mapa areálu -->
                <div class="map-container">
                    <iframe class="map" src="https://frame.mapy.cz/s/covedozate" frameborder="0"></iframe>
                </div>

            </div>

        </section>

        <!-- VŠECHNY TERMÍNY -->
        <section class="container">

            <div class="secondary-title">
                <h2>VŠECHNY TERMÍNY</h2>
                <hr>
            </div>

            <div class="weekends text-box">
                <div class="weekends-section purple">
                    <h4>2024</h4> <!-- rok 2024 -->
                    <hr>
                    <table rules="none">
                        <tr class="display-none"><td>31.–2.</td><td>únor</td></tr>
                        <tr class="display-none"><td>7.–9.</td><td>duben</td></tr>
                        <tr class="display-none"><td>6.–8.</td><td>červen</td></tr>
                        <tr><td>18.–20.</td><td>říjen</td></tr>
                    </table>
                </div>
                <div class="weekends-section blue">
                    <h4>2025</h4> <!-- rok 2025 -->
                    <hr>
                    <table rules="none">
                        <tr><td>31.–2.</td><td>leden/únor</td></tr>
                        <tr><td>7.–9.</td><td>březen</td></tr>
                        <tr><td>6.–8.</td><td>červen</td></tr>
                        <tr><td>3.–5.</td><td>říjen</td></tr>
                    </table>
                </div>
                <div class="weekends-section pink">
                    <h4>2026</h4> <!-- rok 2026 -->
                    <hr>
                    <table rules="none">
                        <tr><td>6.–8.</td><td>únor</td></tr>
                        <tr><td>10.–12.</td><td>duben</td></tr>
                        <tr><td>12.–14.</td><td>červen</td></tr>
                        <tr><td>2.–4.</td><td>říjen</td></tr>
                    </table>
                </div>
            </div>

        </section>
        
        <!-- VYUČUJÍCÍ -->
        <section class="container">

            <div class="secondary-title">
                <h2>VYUČUJÍCÍ</h2>
                <hr>
            </div>

            <div class="teachers-text">Na víkendových seminářích většinou vyučují tři z&nbsp;těchto lektorů:</div>

            <div class="teachers">
                <div>Tomáš Havel</div>
                <div>Tereza Vlčková</div>
                <div>Markéta Mourková</div>
                <div>Markéta Matoušková</div>
                <div>Anna Beckerová</div>
                <div>Klára Hemplová</div>
            </div>

            <button class="blue" type="button" onclick="location.href='../pages/vedeniTabora.php'">Více o vyučujících&hellip;</button>

        </section>

        <!-- HARMONOGRAM VÍKENDU -->
        <section class="container">

            <div class="secondary-title">
                <h2>HARMONOGRAM VÍKENDU</h2>
                <hr>
            </div>

            <!-- notýsek -->
            <div class="wrapper">
                <div class="note">

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
                        <!-- tabulka s harmonogramem -->
                        <table rules="none"><col span="3"><col style="width: 30px;"><col>
                            <tr><th colspan="5">Pátek</th></tr>
                            <tr><td>18.30</td><td>–</td><td>19.00</td><td></td><td>příjezd účastníků</td></tr>
                            <tr><td>19.15</td><td></td><td></td><td></td><td>večeře</td></tr>
                            <tr><td>20.00</td><td></td><td></td><td></td><td>seznámení s řádem semináře atd.</td></tr>
                            <tr><td>22.00</td><td></td><td></td><td></td><td>večerka účastníků do 15&nbsp;let</td></tr>
                            <tr><td>23.00</td><td></td><td></td><td></td><td>večerka účastníků nad 15&nbsp;let</td></tr>
                            <tr><td colspan="5"></td></tr>
                            <tr><th colspan="5">Sobota</th></tr>
                            <tr><td>8.00</td><td></td><td></td><td></td><td>snídaně</td></tr>
                            <tr><td>9.00</td><td>–</td><td>12.00</td><td></td><td>výuka</td></tr>
                            <tr><td>12.00</td><td>–</td><td>14.30</td><td></td><td>oběd a&nbsp;polední klid</td></tr>
                            <tr><td>14.30</td><td>–</td><td>17.30</td><td></td><td>výuka</td></tr>
                            <tr><td>18.00</td><td></td><td></td><td></td><td>večeře</td></tr>
                            <tr><td>19.30</td><td>–</td><td>20.15</td><td></td><td>společné hraní (1.–3.&nbsp;skupina)</td></tr>
                            <tr><td>20.15</td><td>–</td><td>21.00</td><td></td><td>společné hraní (4.–6.&nbsp;skupina)</td></tr>
                            <tr><td>22.00</td><td></td><td></td><td></td><td>večerka účastníků do 15&nbsp;let</td></tr>
                            <tr><td>23.00</td><td></td><td></td><td></td><td>večerka účastníků nad 15&nbsp;let</td></tr>
                            <tr><td colspan="5"></td></tr>
                            <tr><th colspan="5">Neděle</th></tr>
                            <tr><td>8.00</td><td></td><td></td><td></td><td>snídaně</td></tr>
                            <tr><td>9.00</td><td>–</td><td>12.00</td><td></td><td>výuka</td></tr>
                            <tr><td>12.00</td><td>–</td><td>13.30</td><td></td><td>oběd a&nbsp;polední klid</td></tr>
                            <tr><td>13.30</td><td>–</td><td>14.30</td><td></td><td>společné hraní (všichni)</td></tr>
                            <tr><td>14.30</td><td></td><td></td><td></td><td>odjezd účastníků</td></tr>
                        </table>
                        <!-- /tabulka s harmonogramem -->
                    </div>

                </div>
            </div>

            <div class="centered">Pro všechny účastníky platí <span class="bold">Řád letního tábora s kytarou a víkendových kytarových seminářů</span>.</div>

            <button class="blue" type="button" onclick="location.href='../pages/radTabora.php'">Přečíst si řád</button>

        </section>

        <!-- CO S SEBOU NA SEMINÁŘ -->
        <section class="container">

            <div class="secondary-title">
                <h2>CO S SEBOU NA SEMINÁŘ</h2>
                <hr>
            </div>

            <div class="properties text-box">
                <div class="blue">
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

                <div class="purple">
                    <h4>Kytara</h4>
                    <ul>
                        <li>kytara</li>
                        <li>ladička</li>
                        <li>kapodastr (není nutný)</li>
                        <li>podnožka (není nutná)</li>
                        <li>základní psací potřeby</li>
                    </ul>
                </div>
            </div>

            <div class="centered">Mobilní telefony, tablety apod. jsou na seminářích povoleny.</div>

        </section>

    </main>


    <!------- PATIČKA -------->
    <?php include_once "../php/footer.php"; ?>

</body>
</html>