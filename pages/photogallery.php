<?php $page = "photogallery"; ?>

<!DOCTYPE html>
<html lang="cs">

<!------- HEAD -------->
<?php include_once "../php/head.php"; ?>


<body class="photogallery-color">

    <!------- HEADER -------->
    <?php include_once "../php/header.php"; ?>


    <!------- MAIN CONTENT -------->
    <main id="main">

        <div class="container main-title">
            <h1>FOTOGALERIE</h1>
            <hr class="h1-hr">
        </div>


        <!------------------------------>
        <!---------- LIGHTBOX ---------->
        <!------------------------------>
        <div id="lightbox-background">

            <!-- image -->
            <div class="lightbox-photo-container">
                <div id="lightbox-photo">
                    <button id="lightbox-previous" onclick="previousImg()"></button>
                    <img src="" alt="" data-title="">
                    <button id="lightbox-next" onclick="nextImg()"></button>
                </div>
            </div>

            <!-- image caption -->
            <div class="caption-container">
                <div id="lightbox-caption"></div>
            </div>

            <!-- close button -->
            <button id="close-lightbox" onclick="closeLightbox()"></button>
        </div>


        <!------------------------------>
        <!------- PREVIEW IMAGES ------->
        <!------------------------------>
        <section class="container gallery">

            <div class="gallery-img">
                <div class="gallery-label">
                    <div class="gallery-year">2024</div>
                    <div class="gallery-name">Pension Jívka</div>
                </div>
                <img src="/img/gallery/preview/mass/2024_pension-jivka.jpg" alt="mass photo of summer camp with guitar from 2024" data-title="2024 Pension Jívka">
            </div>

            <div class="gallery-img">
                <div class="gallery-label">
                    <div class="gallery-year">2024</div>
                    <div class="gallery-name">Pension Jívka</div>
                    <div class="gallery-comment">vedoucí</div>
                </div>
                <img src="/img/gallery/preview/leaders/2024_vedouci.jpg" alt="mass photo of summer camp with guitar leadership from 2024" data-title="2024 vedoucí: Petr, Markét, Barča, Rosťa, Eliška, Markét, Kristián, Lucka">
            </div>
            
            <div class="gallery-img">
                <div class="gallery-label">
                    <div class="gallery-year">2023</div>
                    <div class="gallery-name">Pension Jívka</div>
                </div>
                <img src="/img/gallery/preview/mass/2023_pension-jivka.jpg" alt="mass photo of summer camp with guitar from 2023" data-title="2023 Pension Jívka">
            </div>

            <div class="gallery-img">
                <div class="gallery-label">
                    <div class="gallery-year">2023</div>
                    <div class="gallery-name">Pension Jívka</div>
                    <div class="gallery-comment">vedoucí</div>
                </div>
                <img src="/img/gallery/preview/leaders/2023_vedouci.jpg" alt="mass photo of summer camp with guitar leadership from 2023" data-title="2023 vedoucí: Terka, Markét, Barča, Lucka, Eliška, Kristián, Petr, Rosťa">
            </div>

            <div class="gallery-img">
                <div class="gallery-label">
                    <div class="gallery-year">2022</div>
                    <div class="gallery-name">Pension Jívka</div>
                </div>
                <img src="/img/gallery/preview/mass/2022_pension-jivka.jpg" alt="mass photo of summer camp with guitar from 2022"  data-title="2022 Pension Jívka">
            </div>

            <div class="gallery-img">
                <div class="gallery-label">
                    <div class="gallery-year">2022</div>
                    <div class="gallery-name">Pension Jívka</div>
                    <div class="gallery-comment">vedoucí</div>
                </div>
                <img src="/img/gallery/preview/leaders/2022_vedouci.jpg" alt="mass photo of summer camp with guitar leadership from 2022" data-title="2022 vedoucí: Kristián, Barča, Lucka, Eliška, Terka, Markét, Petr, Rosťa">
            </div>

            <div class="gallery-img">
                <div class="gallery-label">
                    <div class="gallery-year">2021</div>
                    <div class="gallery-name">Pension Jívka</div>
                </div>
                <img src="/img/gallery/preview/mass/2021_pension-jivka.jpg" alt="mass photo of summer camp with guitar from 2021" data-title="2021 Pension Jívka">
            </div>

            <div class="gallery-img">
                <div class="gallery-label">
                    <div class="gallery-year">2021</div>
                    <div class="gallery-name">Pension Jívka</div>
                    <div class="gallery-comment">vedoucí</div>
                </div>
                <img src="/img/gallery/preview/leaders/2021_vedouci.jpg" alt="mass photo of summer camp with guitar leadership from 2021" data-title="2021 vedoucí: Petr, Eliška, Klárka, Markét, Terka, Barča, Lucka, Rosťa">
            </div>
            
            <div class="gallery-img">
                <div class="gallery-label">
                    <div class="gallery-year">2020</div>
                    <div class="gallery-name">Pension Jívka</div>
                </div>
                <img src="/img/gallery/preview/mass/2020_pension-jivka.jpg" alt="mass photo of summer camp with guitar from 2020" data-title="2020 Pension Jívka">
            </div>

            <div class="gallery-img">
                <div class="gallery-label">
                    <div class="gallery-year">2020</div>
                    <div class="gallery-name">Pension Jívka</div>
                    <div class="gallery-comment">vedoucí</div>
                </div>
                <img src="/img/gallery/preview/leaders/2020_vedouci.jpg" alt="mass photo of summer camp with guitar leadership from 2020" data-title="2020 vedoucí: Petr, Eliška, Anička, Lucka, Terka, Klárka, Tom, Rosťa">
            </div>
            
            <div class="gallery-img">
                <div class="gallery-label">
                    <div class="gallery-year">2019</div>
                    <div class="gallery-name">Pension Jívka</div>
                </div>
                <img src="/img/gallery/preview/mass/2019_pension-jivka.jpg" alt="mass photo of summer camp with guitar from 2019" data-title="2019 Pension Jívka">
            </div>

            <div class="gallery-img">
                <div class="gallery-label">
                    <div class="gallery-year">2019</div>
                    <div class="gallery-name">Pension Jívka</div>
                    <div class="gallery-comment">vedoucí</div>
                </div>
                <img src="/img/gallery/preview/leaders/2019_vedouci.jpg" alt="mass photo of summer camp with guitar leadership from 2019" data-title="2019 vedoucí: Petr, Terka, Káťa, Anička, Tom, Klárka, Rosťa, Lucka">
            </div>
            
            <div class="gallery-img">
                <div class="gallery-label">
                    <div class="gallery-year">2018</div>
                    <div class="gallery-name">Pension Jívka</div>
                </div>
                <img src="/img/gallery/preview/mass/2018_pension-jivka.jpg" alt="mass photo of summer camp with guitar from 2018" data-title="2018 Pension Jívka">
            </div>

            <div class="gallery-img">
                <div class="gallery-label">
                    <div class="gallery-year">2018</div>
                    <div class="gallery-name">Pension Jívka</div>
                    <div class="gallery-comment">vedoucí</div>
                </div>
                <img src="/img/gallery/preview/leaders/2018_vedouci.jpg" alt="mass photo of summer camp with guitar leadership from 2018" data-title="2018 vedoucí: Roman, Janča, Klárka, Rosťa, Anička, Tom, Tom, Lucka">
            </div>
            
            <div class="gallery-img">
                <div class="gallery-label">
                    <div class="gallery-year">2017</div>
                    <div class="gallery-name">Pension Jívka</div>
                </div>
                <img src="/img/gallery/preview/mass/2017_pension-jivka.jpg" alt="mass photo of summer camp with guitar from 2017" data-title="2017 Pension Jívka">
            </div>

            <div class="gallery-img">
                <div class="gallery-label">
                    <div class="gallery-year">2017</div>
                    <div class="gallery-name">Pension Jívka</div>
                    <div class="gallery-comment">vedoucí</div>
                </div>
                <img src="/img/gallery/preview/leaders/2017_vedouci.jpg" alt="mass photo of summer camp with guitar leadership from 2017" data-title="2017 vedoucí: Tom, Pavel, Klárka, Anička, Roman, Rosťa, Lucka, Verča">
            </div>
            
            <div class="gallery-img">
                <div class="gallery-label">
                    <div class="gallery-year">2016</div>
                    <div class="gallery-name">Pension Jívka</div>
                </div>
                <img src="/img/gallery/preview/mass/2016_pension-jivka.jpg" alt="mass photo of summer camp with guitar from 2016" data-title="2016 Pension Jívka">
            </div>
            
            <div class="gallery-img">
                <div class="gallery-label">
                    <div class="gallery-year">2015</div>
                    <div class="gallery-name">Pension Jívka</div>
                </div>
                <img src="/img/gallery/preview/mass/2015_pension-jivka.jpg" alt="mass photo of summer camp with guitar from 2015" data-title="2015 Pension Jívka">
            </div>
            
            <div class="gallery-img">
                <div class="gallery-label">
                    <div class="gallery-year">2014</div>
                    <div class="gallery-name">Pension Jívka</div>
                </div>
                <img src="/img/gallery/preview/mass/2014_pension-jivka.jpg" alt="mass photo of summer camp with guitar from 2014" data-title="2014 Pension Jívka">
            </div>
            
            <div class="gallery-img">
                <div class="gallery-label">
                    <div class="gallery-year">2013</div>
                    <div class="gallery-name">Pension Jívka</div>
                </div>
                <img src="/img/gallery/preview/mass/2013_pension-jivka.jpg" alt="mass photo of summer camp with guitar from 2013" data-title="2013 Pension Jívka">
            </div>
            
            <div class="gallery-img">
                <div class="gallery-label">
                    <div class="gallery-year">2012</div>
                    <div class="gallery-name">Pension Jívka</div>
                </div>
                <img src="/img/gallery/preview/mass/2012_pension-jivka.jpg" alt="mass photo of summer camp with guitar from 2012" data-title="2012 Pension Jívka">
            </div>
            
            <div class="gallery-img">
                <div class="gallery-label">
                    <div class="gallery-year">2010</div>
                    <div class="gallery-name">Chata Astra</div>
                </div>
                <img src="/img/gallery/preview/mass/2010_chata-astra.jpg" alt="mass photo of summer camp with guitar from 2010" data-title="2010 Chata Astra, Dlouhé Rzy">
            </div>

            <div class="gallery-img">
                <div class="gallery-label">
                    <div class="gallery-year">2010</div>
                    <div class="gallery-name">Chata Astra</div>
                    <div class="gallery-comment">vedoucí</div>
                </div>
                <img src="/img/gallery/preview/leaders/2010_vedouci.jpg" alt="mass photo of summer camp with guitar leadership from 2010" data-title="2010 vedoucí: Roman, Lucka, David, Rosťa, Julka, Míra, Káťa">
            </div>
            
            <div class="gallery-img">
                <div class="gallery-label">
                    <div class="gallery-year">2009</div>
                    <div class="gallery-name">Chata Astra</div>
                </div>
                <img src="/img/gallery/preview/mass/2009_chata-astra.jpg" alt="mass photo of summer camp with guitar from 2009" data-title="2009 Chata Astra, Dlouhé Rzy">
            </div>
            
            <div class="gallery-img">
                <div class="gallery-label">
                    <div class="gallery-year">2008</div>
                    <div class="gallery-name">Chata Astra</div>
                </div>
                <img src="/img/gallery/preview/mass/2008_chata-astra.jpg" alt="mass photo of summer camp with guitar from 2008" data-title="2008 Chata Astra, Dlouhé Rzy">
            </div>

            <div class="gallery-img">
                <div class="gallery-label">
                    <div class="gallery-year">2007</div>
                    <div class="gallery-name">Chata Astra</div>
                </div>
                <img src="/img/gallery/preview/mass/2007_chata-astra.jpg" alt="mass photo of summer camp with guitar from 2007" data-title="2007 Chata Astra, Dlouhé Rzy">
            </div>

            <div class="gallery-img">
                <div class="gallery-label">
                    <div class="gallery-year">2006</div>
                    <div class="gallery-name">Chlumětín</div>
                </div>
                <img src="/img/gallery/preview/mass/2006_chlumetin.jpg" alt="mass photo of summer camp with guitar from 2006" data-title="2006 Chlumětín">
            </div>

            <div class="gallery-img">
                <div class="gallery-label">
                    <div class="gallery-year">2005</div>
                    <div class="gallery-name">Chata Astra</div>
                </div>
                <img src="/img/gallery/preview/mass/2005_chata-astra.jpg" alt="mass photo of summer camp with guitar from 2005" data-title="2005 Chata Astra, Dlouhé Rzy">
            </div>

            <div class="gallery-img">
                <div class="gallery-label">
                    <div class="gallery-year">2004</div>
                    <div class="gallery-name">Chata Juráška</div>
                </div>
                <img src="/img/gallery/preview/mass/2004_chata-juraska.jpg" alt="mass photo of summer camp with guitar from 2004" data-title="2004 Chata Juráška">
            </div>

            <div class="gallery-img">
                <div class="gallery-label">
                    <div class="gallery-year">2003</div>
                    <div class="gallery-name">Běleč nad Orlicí</div>
                </div>
                <img src="/img/gallery/preview/mass/2003_belec-n-o.jpg" alt="mass photo of summer camp with guitar from 2003" data-title="2003 Běleč nad Orlicí">
            </div>

            <div class="gallery-img">
                <div class="gallery-label">
                    <div class="gallery-year">2002</div>
                    <div class="gallery-name">Běleč nad Orlicí</div>
                </div>
                <img src="/img/gallery/preview/mass/2002_belec-n-o.jpg" alt="mass photo of summer camp with guitar from 2002" data-title="2002 Běleč nad Orlicí">
            </div>

            <div class="gallery-img">
                <div class="gallery-label">
                    <div class="gallery-year">2001</div>
                    <div class="gallery-name">Běleč nad Orlicí</div>
                </div>
                <img src="/img/gallery/preview/mass/2001_belec-n-o.jpg" alt="mass photo of summer camp with guitar from 2001" data-title="2001 Běleč nad Orlicí">
            </div>
            
        </section>
    </main>


    <!------- FOOTER -------->
    <?php include_once "../php/footer.php"; ?>
    <script src="/js/lightbox.js"></script>

</body>
</html>