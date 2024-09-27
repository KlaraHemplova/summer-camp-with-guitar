<?php $page = "form"; ?>

<!DOCTYPE html>
<html lang="cs">

<!------- HEAD -------->
<?php include_once "../php/head.php"; ?>


<body>

    <!------- HLAVIČKA -------->
    <?php include_once "../php/header.php"; ?>


    <!------- HLAVNÍ OBSAH -------->
    <main id="main">

        <div class="container main-title">
            <h1>PŘIHLÁŠKA</h1>
            <hr>
        </div>

        <div class="container">
            <form id="prihlaska" action="../php/sendMail.php" method="post">

                <!-- DRUH AKCE -->
                <fieldset>
                    <legend>Druh akce</legend>

                    <div class="druh-akce radio">
                        <div class="radio-box">
                            <div>
                                <input type="radio" name="tabor-seminar" id="tabor" value="tabor" required="required">
                            </div>
                            <label for="tabor">letní tábor s&nbsp;kytarou</label>
                        </div>
                        <div class="radio-box">
                            <div>
                                <input type="radio" name="tabor-seminar" id="seminar" value="seminar">
                            </div>
                            <label for="seminar">víkendový kytarový seminář</label>
                        </div>
                    </div>
                </fieldset>

                <!-- ÚČASTNÍK -->
                <fieldset>
                    <legend>Účastník</legend>

                    <div class="flex ucastnik">
                        <!-- jméno a příjmení -->
                        <div class="flex-item">
                            <input type="text" name="jmeno" id="jmeno"placeholder="jméno a příjmení účastníka" required="required">
                        </div>

                        <!-- rodné číslo -->
                        <div class="flex-item">
                            <input type="text" name="rodne-cislo" id="rodne-cislo" placeholder="rodné číslo účastníka" required="required">
                        </div>
                    </div>
                </fieldset>

                <div class="flex">

                    <!-- ADRESA -->
                    <fieldset> 
                        <legend>Adresa účastníka</legend>

                        <div class="flex-item">
                            <div class="adress">
                                <!-- ulice a č.p. -->
                                <input type="text" name="ulice" id="adresa" placeholder="ulice a č.p." required="required">
                                <!-- město -->
                                <input type="text" name="mesto" placeholder="město" required="required">
                                <!-- PSČ -->
                                <input type="text" name="psc" placeholder="PSČ" required="required">
                            </div>
                        </div>
                    </fieldset>

                    <!-- KONTAKT -->
                    <fieldset>
                        <legend>Kontakty</legend>

                        <div class="flex-item">
                            <div class="contact">
                                <!-- tel. účastník -->
                                <input type="tel" name="telefon-ucastnik" id="telefon-ucastnik" placeholder="telefonní číslo účastníka">
                                <!-- tel. zákonný zástupce -->
                                <input type="tel" name="telefon-rodic" id="telefon-rodic" placeholder="telefonní číslo zákonného zástupce" required="required">
                                <!-- e-mail zákonného zástupce -->
                                <input type="email" name="email" id="email" placeholder="e-mail zákonného zástupce" required="required">
                            </div>
                        </div>
                    </fieldset>
                </div>

                <!-- STUPEŇ POKROČILOSTI ÚČASTNÍKA -->
                <fieldset>
                    <legend>Stupeň pokročilosti účastníka</legend>
                    
                    <div class="radio stup-pokr">
                        <!-- začátečník -->
                        <div class="radio-box">
                            <div>
                                <input type="radio" name="stup-pokr" id="stup-zac" value="zacatecnik" required="required">
                            </div>
                            <label for="stup-zac">úplný začátečník (nikdy nehrál na kytaru)</label>
                        </div>
                        <!-- mírně pokročilý -->
                        <div class="radio-box">
                            <div>
                                <input type="radio" name="stup-pokr" id="stup-mir-pokr" value="mirne-pokrocily">
                            </div>
                            <label for="stup-mir-pokr">mírně pokročilý (již zná některé akordy a&nbsp;doprovody, zná noty&hellip;)</label>
                        </div>
                        <!-- pokročilý -->
                        <div class="radio-box">
                            <div>
                                <input type="radio" name="stup-pokr" id="stup-pokr" value="pokrocily">
                            </div>
                            <label for="stup-pokr">pokročilý (ovládá akordy a&nbsp;doprovody, improvizuje, zná noty&hellip;)</label>
                        </div>
                    </div>

                    <textarea name="stup-pokr-info" placeholder="Zde napište bližší informace o pokročilosti účastníka."></textarea>

                    <div class="comment"> Dle těchto údajů budou sestaveny jednotlivé skupiny.</div>
                </fieldset>

                <!-- ZDRAVOTNÍ STAV -->
                <fieldset>
                    <legend>Zdravotní stav účastníka</legend>
                    
                    <textarea name="zdr-stav" id="zdr-stav" placeholder="Zdravotní omezení, pravidelně užívané léky apod."></textarea>
                </fieldset>

                <!-- DALŠÍ DOKUMENTY -->
                <fieldset class="documents">
                    <legend>Další dokumenty</legend>

                    <div>
                        <div>V den příjezdu na tábor je potřeba odevzdat tyto dokumenty:</div>
                        <ul>
                            <li>zdravotní a&nbsp;očkovací průkaz účastníka</li>
                            <li><a href="">posudek o&nbsp;zdravotní způsobilosti účastníka</a> potvrzený lékařem</li>
                            <li><a href="">prohlášení rodičů o&nbsp;bezinfekčnosti účastníka</a></li>
                        </ul>
                    </div>
                </fieldset>

                <!-- PLATNOST PŘIHLÁŠKY -->
                <fieldset class="validity">
                    <legend>Platnost přihlášky</legend>

                    <div>
                        <div><span class="bold">Přijetí Vaší přihlášky již nepotvrzujeme.</span> Dali bychom Vám vědět pouze v&nbsp;případě, že by se akce naplnila těsně předtím, než přišla Vaše přihláška, nebo pokud by v&nbsp;daném termínu nebyla složena uvedená záloha.</div>
                        <div class="bold">Přihlášku považujeme za platnou v&nbsp;den přijetí zálohy.</div>
                        <div>Je samozřejmě možné ujistit se telefonicky, zda již přihláška dorazila, na tel. čísle 777&nbsp;084&nbsp;774 (R.&nbsp;Coufal).</div>
                    </div>
                </fieldset>

                <!-- STORNO PODMÍNKY-->
                <fieldset class="storno">
                    <legend>Storno podmínky</legend>

                    <div>
                        <div>Při zrušení přihlášky do 20&nbsp;dnů před odjezdem účtujeme 20&nbsp;% a&nbsp;do 10&nbsp;dnů a&nbsp;méně 50&nbsp;% ceny tábora/semináře. 80&nbsp;% ceny Vám bude vráceno při onemocnění účastníka doloženého lékařským potvrzením před odjezdem.</div>
                        <div>Stornopoplatky účastník neplatí v&nbsp;případě zajištění náhradníka nebo zrušení akce.</div>
                    </div>
                </fieldset>
                
                <!-- SOUHLAS -->
                <fieldset>
                    <legend>Souhlas</legend>

                    <div class="bold">Kliknutím na tlačítko "Odeslat přihlášku" souhlasím, že v&nbsp;případě konzumace alkoholických nápojů, kouření nebo požívání omamných látek zajistím po předchozí dohodě odvoz dítěte z&nbsp;tábora/semináře bez nároku na vrácení vynaložených prostředků.
                    </div>
                </fieldset>

                <!-- TLAČÍTKO ODESLAT -->
                <input type="submit" value="Odeslat přihlášku">

            </form>
        </div>

    </main>


    <!------- PATIČKA -------->
    <?php include_once "../php/footer.php"; ?>

</body>
</html>