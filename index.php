<?php $page = "summerCamp"; ?>

<!DOCTYPE html>
<html lang="cs">

<!------- HEAD -------->
<?php include_once "php/head.php"; ?>


<body class="camp-color">

    <!------- HEADER -------->
    <?php include_once "php/header.php"; ?>


    <!------- MAIN CONTENT -------->
    <main id="main">


        <!-- SUMMER CAMP (basic info) -->
        <section class="container">

            <div class="main-title">
                <h1>LETNÍ TÁBOR</h1>
                <hr class="h1-hr">
            </div>

            <div class="basic-info-flex">

                <div class="basic-info">

                    <!-- date -->
                    <div class="date">
                        <div class="date-text bold">17. až 24. srpna 2025</div>
                        <img class="icon" src="img/icons/green/calendar.png" alt="calendar icon">
                    </div>

                    <!-- location -->
                    <div class="location">
                        <div class="location-text">
                            <div>Pension Jívka&nbsp;II</div> <!-- areal name -->
                            <div>Jívka 170, 542&nbsp;34 Malé Svatoňovice</div> <!-- areal adress -->
                        </div>
                        <img class="icon" src="img/icons/green/map.png" alt="map icon">
                    </div>

                    <!-- price -->
                    <div class="price">
                        <div>
                            <div class="price-number">cena tábora <span class="bold">5 300 Kč</span></div>
                            <div class="price-text">V ceně je zahrnuto ubytování, strava čtyřikrát denně, výuka, materiály k&nbsp;výuce a&nbsp;doprovodný program.</div>
                        </div>
                        <img class="icon" src="img/icons/green/price.png" alt="price icon">
                    </div>

                    <!-- transport -->
                    <div class="transport">
                        <div class="transport-text">dopravu si rodiče zajišťují sami</div>
                        <img class="icon" src="img/icons/green/car.png" alt="car icon">
                    </div>
                    
                </div>

                <!-- map -->
                <iframe class="map" src="https://frame.mapy.cz/s/redazeseje" frameborder="0"></iframe>

            </div>

        </section>


        <!-- CAMP SPECIALIZATION -->
        <section>

            <div class="container secondary-title">
                <h2>ZAMĚŘENÍ TÁBORA</h2>
                <hr class="h2-hr">
            </div>

            <div class="container specialization text-box">
                <div class="text-box-item green">
                    <p>Tábor je určen úplným začátečníkům i&nbsp;pokročilým kytaristům. Dolní věková hranice účastníků je 8&nbsp;let.</p>
                </div>
                <div class="text-box-item blue">
                    <p>Výuka je zaměřena na hru akordů, doprovodů, písniček, aranžování pro dvě a&nbsp;více kytar, hru s&nbsp;kapodastrem a&nbsp;elementární improvizaci.</p>
                </div>
                <div class="text-box-item pink">
                    <p>Lekce probíhají v&nbsp;šesti až osmičlenných skupinách, které jsou sestaveny tak, aby všichni ve skupině byli na přibližně stejné hráčské úrovni.</p>
                </div>
                <div class="text-box-item orange">
                    <p>Kromě výuky hry na kytaru, která probíhá zhruba tři hodiny denně, je připraven i&nbsp;tradiční táborový program včetně společenských her, sportu, soutěží, výletů, koupání, táborových ohňů apod.</p>
                </div>
                <div class="text-box-item yellow">
                    <p>Součástí výuky je také možnost vyzkoušet si hru v&nbsp;kapele.</p>
                </div>
            </div>

            <!-- video section -->
            <div class="video-container">

                <div class="container">

                    <div class="secondary-title">
                        <h3>OCHUTNÁVKA Z TÁBOROVÝCH KAPEL</h3>
                    </div>

                    <div class="video-box">
                        <div class="video">
                            <iframe src="https://www.youtube.com/embed/KnO9Hi-GM5A?si=PrDDQtvEorsGtfML" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            <div class="centered video-label">Mammas Mammalaid (Chris Gray)</div>
                        </div>

                        <div class="video">
                            <iframe src="https://www.youtube.com/embed/G_HMrMVQJQQ?si=cSSfvp5cEJnS2Lat" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            <div class="centered video-label">Na kraji města (Priessnitz)</div>
                        </div>

                        <div class="video">
                            <iframe src="https://www.youtube.com/embed/U3Va5Z4QwP8?si=vaCSR4F9atm5bL9S" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            <div class="centered video-label">Redemption (Joe Bonamassa)</div>
                        </div>
                    </div>

                </div>

            </div>

        </section>


        <!-- CAMP LEADERSHIP -->
        <section class="container">

            <div class="secondary-title">
                <h2>VEDENÍ TÁBORA</h2>
                <hr class="h2-hr">
            </div>

            <div class="leadership text-box">

                <!-- main leader -->
                <div class="leadership-section text-box-item green">
                    <h4>Hlavní vedoucí</h4>
                    <hr class="h4-hr">
                    <div class="bold">Rostislav Coufal</div>
                    <div class="small-text margin-bottom-10px">pedagog ZUŠ Střezina HK</div>
                    <div><a href="mailto:rosta.coufal@seznam.cz">rosta.coufal@seznam.cz</a></div>
                    <div>+420 777 084 774</div>
                </div>

                <!-- teachers -->
                <div class="leadership-section text-box-item green">
                    <h4>Vyučující</h4>
                    <hr class="h4-hr">
                    <div class="list-of-leaders">
                        <div>Eliška Bartoníčková</div>
                        <div>Markéta Mourková</div>
                        <div>Markéta Matoušková</div>
                        <div>Petr Tobišek</div>
                        <div>Kristián Kalig</div>
                    </div>
                </div>

                <!-- game leaders -->
                <div class="leadership-section text-box-item green">
                    <h4>Odpolední program</h4>
                    <hr class="h4-hr">
                    <div class="list-of-leaders">
                        <div>Lucie Janečková</div>
                        <div>Barbora Hesounová</div>
                    </div>
                </div>

            </div>

            <button type="button" onclick="location.href='pages/campLeadership.php'">Více o vedoucích&hellip;</button>

        </section>
        
        <!-- CAMP DAILY SCHEDULE -->
        <section class="container">

            <div class="secondary-title">
                <h2>DENNÍ HARMONOGRAM</h2>
                <hr class="h2-hr">
            </div>

            <!-- WRAPPER -->
            <div class="wrapper">
                <div class="note">

                    <!-- wrapper spiral part -->
                    <div class="spiral-part">
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
                        <!-- daily schedule table -->
                        <table rules="none">
                            <tr><td>7.30</td>   <td></td>   <td></td>       <td>budíček</td></tr>
                            <tr><td>7.45</td>   <td></td>   <td></td>       <td>rozcvička</td></tr>
                            <tr><td>8.00</td>   <td></td>   <td></td>       <td>snídaně</td></tr>
                            <tr><td>9.00</td>   <td>–</td>  <td>13.00</td>  <td>výuka hry na kytaru ve skupinách</td></tr>
                            <tr><td>13.00</td>  <td>–</td>  <td>15.00</td>  <td>oběd a&nbsp;polední klid</td></tr>
                            <tr><td>15.00</td>  <td>–</td>  <td>16.00</td>  <td>hra v&nbsp;kapelách</td></tr>
                            <tr><td>16.00</td>  <td></td>   <td></td>       <td>svačina</td></tr>
                            <tr><td>16.15</td>  <td>–</td>  <td>18.00</td>  <td>odpolední program (hry, sport)</td></tr>
                            <tr><td>19.00</td>  <td></td>   <td></td>       <td>večeře</td></tr>
                            <tr><td>19.45</td>  <td>–</td>  <td>20.30</td>  <td>společné hraní (1.–3.&nbsp;skupina)</td></tr>
                            <tr><td>20.30</td>  <td>–</td>  <td>21.15</td>  <td>společné hraní (4.–7.&nbsp;skupina)</td></tr>
                            <tr><td>22.00</td>  <td></td>   <td></td>       <td>večerka účastníků do 15&nbsp;let</td></tr>
                            <tr><td>23.00</td>  <td></td>   <td></td>       <td>večerka účastníků nad 15&nbsp;let</td></tr>
                        </table>
                    </div>

                </div>
            </div>

            <div class="centered">Pro všechny účastníky platí <span class="bold">Řád letního tábora s kytarou a víkendových kytarových seminářů</span>.</div>

            <button type="button" onclick="location.href='pages/campRules.php'">Přečíst si řád</button>

        </section>

        <!-- CAMP PROPERTIES -->
        <section class="container">

            <div class="secondary-title">
                <h2>CO S SEBOU NA TÁBOR</h2>
                <hr class="h2-hr">
            </div>

            <div class="properties text-box">
                <div class="text-box-item yellow">
                    <h4>Obecné</h4>
                    <ul>
                        <li>dostatek pohodlného oblečení</li>
                        <li>pevná obuv</li>
                        <li>přezuvky</li>
                        <li>ručník</li>
                        <li>pyžamo</li>
                        <li>hygienické potřeby</li>
                        <li>pravidelné léky</li>
                    </ul>
                </div>

                <div class="text-box-item green">
                    <h4>Dokumenty</h4>
                    <ul>
                        <li>karta zdravotní pojišťovny</li>
                        <li>zdravotní a&nbsp;očkovací průkaz účastníka</li>
                        <li><a href="">posudek o&nbsp;zdravotní způsobilosti účastníka</a></li>
                        <li><a href="">prohlášení rodičů o&nbsp;bezinfekčnosti účastníka</a></li>
                    </ul>
                </div>

                <div class="text-box-item blue">
                    <h4>Kytara</h4>
                    <ul>
                        <li>kytara</li>
                        <li>ladička</li>
                        <li>kapodastr (není nutný)</li>
                    </ul>
                </div>
            </div>

            <div class="centered">Mobilní telefony, tablety apod. jsou na táboře povoleny.</div>

        </section>

    </main>


    <!------- FOOTER -------->
    <?php include_once "php/footer.php"; ?>

</body>
</html>