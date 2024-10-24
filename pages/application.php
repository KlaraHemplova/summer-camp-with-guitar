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
            <form onsubmit="return onSubmit()" id="application" action="/php/sendApplication.php" method="post" novalidate>

                <!-- HIDDEN BOT CHECKER -->
                <input type="text" name="bot-checker" class="bot-checker" id="bot-checker">

                <!-- ACTION TYPE -->
                <fieldset>
                    <legend>Druh akce</legend>

                    <div class="action-type radio">
                        <div class="radio-box">
                            <div>
                                <input type="radio" name="camp_seminar" id="camp" value="letní tábor" required>
                            </div>
                            <label for="camp">letní tábor s&nbsp;kytarou</label>
                        </div>
                        <div class="radio-box">
                            <div>
                                <input type="radio" name="camp_seminar" id="seminar" value="víkendový seminář" required>
                            </div>
                            <label for="seminar">víkendový kytarový seminář</label>
                        </div>
                    </div>

                    <div class="dropdown-menu" id="dropdown-menu">
                        <div class="dropdown-select" id="dropdown-select">vyberte termín semináře</div>
                        <div class="dropdown-items" id="dropdown-items">
                            <div data-value="2025 / leden–únor / 31.–2.">2025&ensp;/&ensp;leden–únor&ensp;/&ensp;31.–2.</div>
                            <div data-value="2025 / březen / 7.–9.">2025&ensp;/&ensp;březen&ensp;/&ensp;7.–9.</div>
                            <div data-value="2025 / červen / 20.–22.">2025&ensp;/&ensp;červen&ensp;/&ensp;20.–22.</div>
                            <div data-value="2025 / říjen / 3.–5.">2025&ensp;/&ensp;říjen&ensp;/&ensp;3.–5.</div>
                            <div data-value="2026 / únor / 6.–8.">2026&ensp;/&ensp;únor&ensp;/&ensp;6.–8.</div>
                            <div data-value="2026 / duben / 10.–12.">2026&ensp;/&ensp;duben&ensp;/&ensp;10.–12.</div>
                            <div data-value="2026 / červen / 12.–14.">2026&ensp;/&ensp;červen&ensp;/&ensp;12.–14.</div>
                            <div data-value="2026 / říjen / 2.–4.">2026&ensp;/&ensp;říjen&ensp;/&ensp;2.–4.</div>
                        </div>
                    </div>
                    <input type="text" name="seminar-date" id="seminar-date">

                </fieldset>

                <!-- PARTICIPANT -->
                <fieldset>
                    <legend>Účastník</legend>

                    <div class="form-flex participant">
                        <!-- name and surname -->
                        <div class="flex-item">
                            <input type="text" name="name" id="name" placeholder="jméno a příjmení účastníka" required>
                        </div>

                        <!-- birth date -->
                        <div class="flex-item">
                            <input type="text" name="birth-date" id="birth-date" pattern="([1-9]|0[1-9]|[12][0-9]|3[01])\. ?([1-9]|0[1-9]|1[0-2])\. ?([12]\d{3})" placeholder="datum narození účastníka" required>
                            <div class="error-message" id="error-date">Zadejte prosím datum narození ve formátu (D)D.(M)M.RRRR.</div>
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
                                <input type="text" name="street" id="street" placeholder="ulice a č.p." required>
                                <!-- city -->
                                <input type="text" name="city" id="city" placeholder="město" required>
                                <!-- zip code -->
                                <div>
                                    <input type="text" name="zip-code" id="zip-code" pattern="\d{3} ?\d{2}" placeholder="PSČ" required>
                                    <div class="error-message" id="error-zip-code">Zadejte prosím PSČ ve formátu 123 45.</div>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <!-- CONTACT -->
                    <fieldset class="flex-item">
                        <legend>Kontakty</legend>

                        <div class="contact-container">
                            <div class="contact">
                                <!-- phone number (participant) -->
                                <input type="tel" name="phone-participant" id="phone-participant" pattern="\d{3} ?\d{3} ?\d{3}" placeholder="telefonní číslo účastníka (nepovinné)">
                                <!-- phone number (parent) -->
                                <div>
                                    <input type="tel" name="phone-parent" id="phone-parent" pattern="\d{3} ?\d{3} ?\d{3}" placeholder="telefonní číslo zákonného zástupce" required>
                                    <div class="error-message" id="error-tel">Zadejte prosím telefonní čísla ve formátu 123 456 789.</div>
                                </div>
                                <!-- e-mail (parent) -->
                                <div>
                                    <input type="email" name="email" id="email" placeholder="e-mail zákonného zástupce" required>
                                    <div class="error-message" id="error-mail">Zadejte prosím e-mail ve správném tvaru.</div>
                                </div>
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
                                <input type="radio" name="experiences" id="exp_beginner" value="začátečník" required>
                            </div>
                            <label for="exp_beginner">úplný začátečník (nikdy nehrál na kytaru)</label>
                        </div>
                        <!-- intermediate -->
                        <div class="radio-box">
                            <div>
                                <input type="radio" name="experiences" id="exp_intermediate" value="mírně pokročilý" required>
                            </div>
                            <label for="exp_intermediate">mírně pokročilý (již zná některé akordy a&nbsp;doprovody, zná noty&hellip;)</label>
                        </div>
                        <!-- advanced -->
                        <div class="radio-box">
                            <div>
                                <input type="radio" name="experiences" id="exp_advanced" value="pokročilý" required>
                            </div>
                            <label for="exp_advanced">pokročilý (ovládá akordy a&nbsp;doprovody, improvizuje, zná noty&hellip;)</label>
                        </div>
                    </div>

                    <textarea name="experiences-info" placeholder="Zde můžete napsat bližší informace o pokročilosti účastníka."></textarea>

                    <div class="experiences-comment"> Dle těchto údajů budou sestaveny jednotlivé skupiny.</div>
                </fieldset>

                <!-- HEALTH CONDITION -->
                <fieldset>
                    <legend>Zdravotní stav účastníka</legend>
                    
                    <textarea name="health" id="health" placeholder="Zdravotní omezení, pravidelně užívané léky apod."></textarea>
                </fieldset>

                <!-- VEGETARIAN OPTION -->
                <fieldset>
                    <legend>Stravování</legend>

                    <div class="radio-box vegetarian">
                        <div>
                            <input type="checkbox" name="vegetarian" id="vegetarian" value="ano">
                        </div>
                        <label for="vegetarian">zajistit vegetariánskou stravu</label>
                    </div>
                </fieldset>

                <!-- OTHER DOCUMENTS -->
                <fieldset class="documents" id="documents">
                    <legend>Nezbytné dokumenty</legend>

                    <div>
                        <ul>
                            <li>karta pojišťovny (stačí kopie)</li>
                            <li class="documents-hidden">zdravotní a&nbsp;očkovací průkaz účastníka</li>
                            <li class="documents-hidden"><a href="/files/posudekOZdrZpus.pdf" target="_blank">posudek o&nbsp;zdravotní způsobilosti účastníka</a> potvrzený lékařem</li>
                            <li class="documents-hidden"><a href="/files/prohlaseniZakonnehoZastupce.pdf" target="_blank">prohlášení rodičů o&nbsp;bezinfekčnosti účastníka</a></li>
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
                <fieldset class="storno" id="storno">
                    <legend>Storno podmínky</legend>

                    <div>
                        <div>
                            Při zrušení přihlášky do 20&nbsp;dnů před odjezdem účtujeme 20&nbsp;% a&nbsp;do 10&nbsp;dnů a&nbsp;méně 50&nbsp;% ceny tábora. 80&nbsp;% ceny Vám bude vráceno při onemocnění účastníka doloženého lékařským potvrzením před odjezdem.
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
                <input type="submit" name="submit" value="Odeslat přihlášku">

            </form>
        </div>

    </main>


    <!------- FOOTER -------->
    <?php include_once "../php/footer.php"; ?>
    <script src="/js/application.js"></script>

</body>
</html>