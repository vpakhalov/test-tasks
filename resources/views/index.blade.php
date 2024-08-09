<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Promebel</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css"/>
    <link href="https://fonts.googleapis.com/css2?family=TT+Norms&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="./js/index.js"></script>
</head>
<body>
<main>
    <section class="header">
        <div class="front-page-header">
            <div class="header-menu-wrapper">
                <div class="header-menu-cont">
                    <p class="catalogText"><b>каталог</b></p>
                    <p class="designersText"><b>дизайнеры</b></p>
                    <p class="brandsText"><b>бренды</b></p>
                </div>
                <img class="header-logo" src="./assets/promebel-logo.svg"/>
                <div class="header-contact-wrapper">
                    <p class="contactPhoneNumber">+7 (999) 000 1122</p>
                    <p class="contactEmail">info@promebel.ru</p>
                    <img class="shopping-cart-img" src="./assets/shopping-cart.png"/>
                </div>
            </div>
            <hr class="dividerLine"/>
        </div>
    </section>

    <section class="catalog">
        <div class="catalog-container">
            <div class="catalog-cont-title">
                <h1 class="allProductsTitle">все товары</h1>
                <div class="product-count-box">
                        <span class="text-count-box">
                        <span class="text-span-1">(</span>
                        <span class="text-span-2">2</span>
                        <span class="text-span-3">товара</span>
                        </span>
                </div>
            </div>
            <div class="flex-column-products">
                <div class="flex-row-filter-tiles" id="productDetailsContainer"></div>
                <div class="flex-row-filter-products">
                    <div class="filter-container">
                        <div class="filter-buttons-container">
                            <div class="filter-color-buttons-container">
                                <p class="colorTitle">цвет</p>
                                <div class="flex-row-color-buttons">
                                    <img id="color1" class="color_image"
                                         src="./assets/color/white.svg" data-color="белый"/>
                                    <img id="color2" class="color_image"
                                         src="./assets/color/beige.png" data-color="бежевый"/>
                                    <img id="color3" class="color_image"
                                         src="./assets/color/black.svg" data-color="чёрный"/>
                                    <img id="color4" class="color_image"
                                         src="./assets/color/brown.svg" data-color="коричневый"/>
                                    <img id="color5" class="color_image"
                                         src="./assets/color/orange.svg" data-color="оранжевый"/>
                                    <img id="color6" class="color_image"
                                         src="./assets/color/gray.svg" data-color="серый"/>
                                </div>
                            </div>
                            <div class="filter-brand-buttons-container">
                                <p class="brandTitle">бренд</p>
                                <div class="flex-column-brands-list">
                                        <p class="brandTextA">A</p>
                                        <div class="flex-row-brand-a-buttons">
                                            <input class="brandCheckbox" type="checkbox" name="Artemide">
                                            <p class="brandNameA">Artemide</p>
                                        </div>
                                        <div class="flex-row-brand-b-buttons">
                                            <input class="brandCheckbox" type="checkbox" name="Axo light">
                                            <p class="brandNameB">Axo light</p>
                                        </div>
                                        <p class="brandTextB">B</p>
                                        <div class="flex-row-brand-c-buttons">
                                            <input class="brandCheckbox" type="checkbox" name="Baxter">
                                            <p class="brandNameC">Baxter</p>
                                        </div>
                                        <div class="flex-row-brand-d-buttons">
                                            <input class="brandCheckbox" type="checkbox" name="Bonaldo">
                                            <p class="brandNameD">Bonaldo</p>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-row-products-list"></div>
                </div>
            </div>
        </div>
    </section>
</main>
</body>
</html>
