<?php $page = "paymentMethod"; ?>

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
            <h1>ZPŮSOB PLATBY</h1>
            <hr>
        </div>

        <section class="container">

            <div class="account-number">
                <div>číslo účtu:</div>
                <div id="accountNumberToCopy" class="number">35-7957720217/0100</div>
                <div id="copied" class="copied">(klikněte na číslo účtu pro zkopírování do schránky)</div>
            </div>

            <div class="payment text-box">
                <div class="payment-section red">
                    <div class="payment-summer">
                        <h4>LETNÍ TÁBOR</h4>
                        <ul>
                            <li>Zálohu ve výši <span class="bold">3000&nbsp;Kč</span> je nutno uhradit nejpozději do <span class="bold">30. dubna 2025</span>.</li>
                            <li>Zbylou částku ve výši <span class="bold">2300&nbsp;Kč</span> pak uhraďte do <span class="bold">30. června 2025</span>.</li>
                        </ul>
                    </div>

                    <div class="payment-weekends">
                        <h4>VÍKENDOVÉ SEMINÁŘE</h4>
                        <ul>
                            <li>Částka <span class="bold">2300&nbsp;Kč</span> musí být složena na účet nejpozději <span class="bold">týden před seminářem</span>.</li>
                        </ul>
                    </div>

                    <div class="payment-general">
                        <h4>OBECNÉ</h4>
                        <ul>
                            <li>Do zprávy pro příjemce uveďte <span class="bold">jméno dítěte</span>.</li>
                            <li>Tábor lze rovněž uhradit fakturou – v&nbsp;takovém případě mne kontaktujte a&nbsp;domluvíme potřebné formality.</li>
                        </ul>
                    </div>
                </div>

                <div class="questions-text">V případě jakýchkoliv dotazů volejte na tel. č. <span class="bold">777&nbsp;084&nbsp;774</span> (Rostislav Coufal).</div>
            </div>

        </section>

    </main>


    <!------- PATIČKA -------->
    <?php include_once "../php/footer.php"; ?>

</body>
</html>