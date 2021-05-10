
<header>

    <div class="logo-box">
        <img src={{asset("img/marchio-sito-test.png")}} alt="Logo de La Molisana">
    </div>
    <nav class="main-nav">
        <ul>
            <li class="desk-menu"><a href={{route("home")}}>Home</a></li>
            <li class="desk-menu"><a href={{route("prodotto", ['id'=> 0])}}>Prodotti</a></li>
            <li class="desk-menu"><a href={{route("news")}}>News</a></li>
            <!-- Burger Menu per Risoluzione non DeskTop -->
            <li class="burger-menu" ><a href=""><i class="fas fa-bars"></i></a></li>
        </ul>

    </nav>
</header>
