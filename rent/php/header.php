<header id="header">

<div class="logo text-center py-3">
    <img src="./Pictures/office.png" alt="pilt" width="150px" height="150px">
</div>
<header>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <div class="navbar" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="../front/home.php">Avaleht</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../portfolio/portfolio.php">Portfoolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../contact/contact.php">Kontakt</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../front/login.php">Logi Sisse</a>
                </ul>
            </div>
        </nav>
    </div>

    <nav class="navbar navbar-expand-lg bg-light">
        <a href="rent.php" class="navbar-brand">
            <h3 class="px-5">
                <i class="fas fa-shopping-basket"></i>Rentimine
            </h3>
        </a>


        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item active">
                    <h5 class="px-5 cart">
                        <i class="fas fa-shopping-cart"></i> Ostukorv
                        <?php

                            if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                            }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                            }

                        ?>  
                    </h5>
                </a>
            </div>
        </div>
    </nav>

</header>
</header>