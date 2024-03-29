<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css/style.scss" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
          rel="stylesheet"/>
    <link href="../dist/index.2e8c441c.css" rel="stylesheet">
    <title>The First PHP Shop</title>
</head>
<body class="body">
<header class="header">
    <div class="header__basket hidden" id="headerBasket">
        <div class="header__basket__container">
                 <span class="material-symbols-outlined">
            shopping_basket
            </span>
            <p class="hidden" id="itemCount">0 Montant total</p>
        </div>
    </div>
    <div class="header__wrapper wrapper">
        <div class="header__container container">
            <h1 class="header__title">The First Shop</h1>
        </div>
        <nav class="header__nav nav">
            <ul class="header__nav__list list">
                <li class="header__nav__list__item item">
                    <a class="header__nav__list__item__link link" href="#">Acceuil</a>
                </li>
                <li class="header__nav__list__item item">
                    <a class="header__nav__list__item__link link" href="#">Nos collections</a>
                </li>
                <li class="header__nav__list__item item">
                    <a class="header__nav__list__item__link link" href="#">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<main class="main">
    <div class="main__image-section image-section">
        <img alt="adidas banner pub" src="media/adidas-banner02.webp">
    </div>
    <div class="main__wrapper wrapper">
        <div class="main__container">
            <div class="main__container__text-section text-section">
                <h1 class="main__container__text-section__title title"> The First Shop</h1>
                <h2 class="main__container__text-section__sub-title sub-title"> Profitez de nos offres
                    esclusives</h2>
            </div>

        </div>

        <div class="main__container">
            <ul class="main__container__list list">
                <?php
                for ($i = 1; $i <= 4; $i++) {
                    switch ($i) {
                        case 1:
                            $price = 40;
                            break;
                        case 2:
                            $price = 200;
                            break;
                        case 3:
                            $price = 95;
                            break;
                        case 4:
                            $price = 160;
                            break;
                    }
                    ?>
                    <li class="main__container__list__item item">
                        <div class="main__container__list__item__image-section image-section">
                            <img alt="" src="media/img_<?=$i?>.png">
                        </div>
                        <div class="main__container__list__item__text-section text-section">
                            <p><span><?= $price ?></span> € TVAC</p>
                            <a class="main__container__list__item__link link" data-price="<?=$price?>" href="#">Ajouter au
                                panier</a>
                        </div>
                    </li>
                    <?php
                }
                ?>
            </ul>

        </div>
    </div>
</main>
<footer class="footer">
    <div class="footer__wrapper wrapper">
        <nav class="footer__nav nav">
            <ul class="footer__nav__list list">
                <li class="footer__nav__list__item item">
                    <a class="footer__nav__list__item__link link" href="#">Acceuil</a>
                </li>
                <li class="footer__nav__list__item item">
                    <a class="footer__nav__list__item__link link" href="#">Nos collections</a>
                </li>
                <li class="footer__nav__list__item item">
                    <a class="footer__nav__list__item__link link" href="#">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
    <script src="js/scrypt.js"></script>
</footer>
</body>
</html>