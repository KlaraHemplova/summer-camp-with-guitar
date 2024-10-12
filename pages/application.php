<?php $page = "application"; ?>

<!DOCTYPE html>
<html lang="cs">

<!------- HEAD -------->
<?php include_once "../php/head.php"; ?>


<body class="application-color">

    <!------- HEADER -------->
    <?php include_once "../php/header.php"; ?>


    <!------- MAIN CONTENT -------->
    <main id="main">

        <div class="container main-title">
            <h1>PŘIHLÁŠKA</h1>
            <hr class="h1-hr">
        </div>

        <div class="container no-select">
            <form id="application" action="../php/sendApplication.php" method="post">

                <!-- HIDDEN BOT CHECKER -->
                <input type="text" name="bot-checker" class="bot-checker" id="bot-checker">

                <!-- ACTION TYPE -->
                <fieldset>
                    <legend>Druh akce</legend>

                    <div class="action-type radio">
                        <div class="radio-box">
                            <div>
                                <input type="radio" name="camp_seminar" id="camp" value="camp" required="required">
                            </div>
                            <label for="camp">letní tábor s&nbsp;kytarou</label>
                        </div>
                        <div class="radio-box">
                            <div>
                                <input type="radio" name="camp_seminar" id="seminar" value="seminar">
                            </div>
                            <label for="seminar">víkendový kytarový seminář</label>
                        </div>
                    </div>

                    <div class="dropdown-menu" id="dropdown-menu">
                        <div class="dropdown-select" id="dropdown-select">vyberte termín semináře</div>
                        <div class="dropdown-items" id="dropdown-items">
                            <div data-value="1">2025&emsp;leden/únor&emsp;31.–2.</div>
                            <div data-value="2">2025&emsp;březen&emsp;7.–9.</div>
                            <div data-value="3">2025&emsp;červen&emsp;6.–8.</div>
                            <div data-value="4">2025&emsp;říjen&emsp;3.–5.</div>
                            <div data-value="5">2026&emsp;únor&emsp;6.–8.</div>
                            <div data-value="6">2026&emsp;duben&emsp;10.–12.</div>
                            <div data-value="7">2026&emsp;červen&emsp;20.–22.</div>
                            <div data-value="8">2026&emsp;říjen&emsp;2.–4.</div>
                        </div>
                    </div>
                    <input type="hidden" name="seminar-date" id="seminar-date">

                    <div class="radio-box vegetarian">
                        <div>
                            <input type="checkbox" name="seminar-vege" id="seminar-vege" value="seminar-vege">
                        </div>
                        <label for="seminar-vege">zajistit vegetariánskou stravu</label>
                    </div>

                </fieldset>

                <!-- PARTICIPANT -->
                <fieldset>
                    <legend>Účastník</legend>

                    <div class="form-flex participant">
                        <!-- name and surname -->
                        <div class="flex-item">
                            <input type="text" name="name" id="name"placeholder="jméno a příjmení účastníka" required="required">
                        </div>

                        <!-- birth date -->
                        <div class="flex-item">
                            <input type="text" name="birth-date" id="birth-date" placeholder="datum narození účastníka" required="required">
                        </div>
                    </div>
                </fieldset>

                <div class="form-flex">

                    <!-- ADRESS -->
                    <fieldset class="flex-item"> 
                        <legend>Adresa účastníka</legend>

                        <div class="adress-container">
                            <div class="adress">
                                <!-- street -->
                                <input type="text" name="street" id="street" placeholder="ulice a č.p." required="required">
                                <!-- city -->
                                <input type="text" name="city" id="city" placeholder="město" required="required">
                                <!-- zip code -->
                                <input type="text" name="zip-code" id="zip-code" placeholder="PSČ" required="required">
                            </div>
                        </div>
                    </fieldset>

                    <!-- CONTACT -->
                    <fieldset class="flex-item">
                        <legend>Kontakty</legend>

                        <div class="contact-container">
                            <div class="contact">
                                <!-- phone number (participant) -->
                                <input type="tel" name="phone-participant" id="phone-participant" placeholder="telefonní číslo účastníka (nepovinné)">
                                <!-- phone number (parent) -->
                                <input type="tel" name="phone-parent" id="phone-parent" placeholder="telefonní číslo zákonného zástupce" required="required">
                                <!-- e-mail (parent) -->
                                <input type="email" name="email" id="email" placeholder="e-mail zákonného zástupce" required="required">
                            </div>
                        </div>
                    </fieldset>
                </div>

                <!-- PARTICIPANT EXPIRIENCES -->
                <fieldset>
                    <legend>Stupeň pokročilosti účastníka</legend>
                    
                    <div class="experiences radio">
                        <!-- beginner -->
                        <div class="radio-box">
                            <div>
                                <input type="radio" name="experiences" id="exp_beginner" value="beginner" required="required">
                            </div>
                            <label for="exp_beginner">úplný začátečník (nikdy nehrál na kytaru)</label>
                        </div>
                        <!-- intermediate -->
                        <div class="radio-box">
                            <div>
                                <input type="radio" name="experiences" id="exp_intermediate" value="intermediate">
                            </div>
                            <label for="exp_intermediate">mírně pokročilý (již zná některé akordy a&nbsp;doprovody, zná noty&hellip;)</label>
                        </div>
                        <!-- advanced -->
                        <div class="radio-box">
                            <div>
                                <input type="radio" name="experiences" id="exp_advanced" value="advanced">
                            </div>
                            <label for="exp_advanced">pokročilý (ovládá akordy a&nbsp;doprovody, improvizuje, zná noty&hellip;)</label>
                        </div>
                    </div>

                    <textarea name="experiences-info" placeholder="Zde můžete napsat bližší informace o pokročilosti účastníka."></textarea>

                    <div class="experiences-comment"> Dle těchto údajů budou sestaveny jednotlivé skupiny.</div>
                </fieldset>

                <!-- HEALT CONDITION -->
                <fieldset>
                    <legend>Zdravotní stav účastníka</legend>
                    
                    <textarea name="health" id="health" placeholder="Zdravotní omezení, pravidelně užívané léky apod."></textarea>
                </fieldset>

                <!-- OTHER DOCUMENTS -->
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

                <!-- APPLICATION VALIDITY -->
                <fieldset class="validity">
                    <legend>Platnost přihlášky</legend>

                    <div>
                        <div>
                            <span class="bold">Přijetí Vaší přihlášky již nepotvrzujeme.</span> Dali bychom Vám vědět pouze v&nbsp;případě, že by se akce naplnila těsně předtím, než přišla Vaše přihláška, nebo pokud by v&nbsp;daném termínu nebyla složena uvedená záloha.
                        </div>
                        <div class="bold">
                            Přihlášku považujeme za platnou v&nbsp;den přijetí zálohy.
                        </div>
                        <div>
                            Je samozřejmě možné ujistit se telefonicky, zda již přihláška dorazila, na tel. čísle 777&nbsp;084&nbsp;774 (R.&nbsp;Coufal).
                        </div>
                    </div>
                </fieldset>

                <!-- STORNO CONDITIONS -->
                <fieldset class="storno">
                    <legend>Storno podmínky</legend>

                    <div>
                        <div>
                            Při zrušení přihlášky do 20&nbsp;dnů před odjezdem účtujeme 20&nbsp;% a&nbsp;do 10&nbsp;dnů a&nbsp;méně 50&nbsp;% ceny tábora/semináře. 80&nbsp;% ceny Vám bude vráceno při onemocnění účastníka doloženého lékařským potvrzením před odjezdem.
                        </div>
                        <div>
                            Stornopoplatky účastník neplatí v&nbsp;případě zajištění náhradníka nebo zrušení akce.
                        </div>
                    </div>
                </fieldset>
                
                <!-- AGREEMENT -->
                <fieldset>
                    <legend>Souhlas</legend>

                    <div class="bold">
                        Kliknutím na tlačítko "Odeslat přihlášku" souhlasím, že v&nbsp;případě konzumace alkoholických nápojů, kouření nebo požívání omamných látek zajistím po předchozí dohodě odvoz dítěte z&nbsp;tábora/semináře bez nároku na vrácení vynaložených prostředků.
                    </div>
                </fieldset>

                <!-- SUBMIT BUTTON -->
                <input type="submit" value="Odeslat přihlášku">

            </form>
        </div>

    </main>


    <!------- FOOTER -------->
    <?php include_once "../php/footer.php"; ?>

</body>
</html>