<header id="header">

    <a href="/index.php"><img src="/img/logoWhite.png" alt="Logo letního tábora s kytarou" class="logo-header"></a>

    <h3 class="motto container">PRO VŠECHNY, KTEŘÍ MAJÍ RÁDI KYTARU</h3>

    <button class="mobile-button" onclick="toggleMenu(this)">
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
            <li><a href="/index.php" class="letni-tabor <?php echo ($page === "home" ? "active" : "") ?>">Letní tábor</a></li>
            <li><a href="/pages/vikendoveSeminare.php" class="vikendove-seminare <?php echo ($page === "weekends" ? "active" : "") ?>">Víkendové semináře</a></li>
            <li><a href="/pages/vedeniTabora.php" class="vedeni-tabora <?php echo ($page === "leadership" ? "active" : "") ?>">Vedení tábora</a></li>
            <li><a href="/pages/prihlaska.php" class="prihlaska <?php echo ($page === "form" ? "active" : "") ?>">Přihláška</a></li>
            <li><a href="/pages/zpusobPlatby.php" class="zpusob-platby <?php echo ($page === "payment" ? "active" : "") ?>">Způsob platby</a></li>
            <li><a href="/pages/fotogalerie.php" class="fotogalerie <?php echo ($page === "gallery" ? "active" : "") ?>">Fotogalerie</a></li>
            <li><a href="/pages/radTabora.php" class="rad-tabora <?php echo ($page === "rules" ? "active" : "") ?>">Řád tábora</a></li>
        </ul>
    </nav>

</div>