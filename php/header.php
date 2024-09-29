<header id="header">

    <a href="/index.php"><img src="/img/logoWhite.png" alt="Logo letního tábora s kytarou" class="logo-header"></a>

    <h3 class="motto container">PRO VŠECHNY, KTEŘÍ MAJÍ RÁDI KYTARU</h3>

    <button class="hamburger-button" onclick="toggleMenu(this)">
        <div class="bar-container">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
    </button>

</header>


<!-- NAVIGAČNÍ MENU -->
<div class="navigation" id="nav" style="transform: translateY(-100%);">

    <div class="glass-background"></div>

    <nav>
        <ul>
            <li><a href="/index.php" class="summer-camp <?php echo ($page === "summerCamp" ? "active" : "") ?>">Letní tábor</a></li>
            <li><a href="/pages/weekendSeminars.php" class="weekend-seminars <?php echo ($page === "weekendSeminars" ? "active" : "") ?>">Víkendové semináře</a></li>
            <li><a href="/pages/campLeadership.php" class="camp-leadership <?php echo ($page === "campLeadership" ? "active" : "") ?>">Vedení tábora</a></li>
            <li><a href="/pages/application.php" class="application <?php echo ($page === "application" ? "active" : "") ?>">Přihláška</a></li>
            <li><a href="/pages/paymentMethod.php" class="payment-method <?php echo ($page === "paymentMethod" ? "active" : "") ?>">Způsob platby</a></li>
            <li><a href="/pages/photogallery.php" class="photogallery <?php echo ($page === "photogallery" ? "active" : "") ?>">Fotogalerie</a></li>
            <li><a href="/pages/campRules.php" class="camp-rules <?php echo ($page === "campRules" ? "active" : "") ?>">Řád tábora</a></li>
        </ul>
    </nav>

</div>