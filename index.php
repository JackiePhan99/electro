<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "Homepage"; ?></title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ce0cfd57fd.js" crossorigin="anonymous"></script>
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>-->
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">npm i swiper-->
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">-->
    <script src="
https://cdn.jsdelivr.net/npm/swiper@10.0.4/swiper-bundle.min.js
"></script>
    <link href="
https://cdn.jsdelivr.net/npm/swiper@10.0.4/swiper-bundle.min.css
" rel="stylesheet">
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="app.css"/>
    <link rel="stylesheet" type="text/css" href="header/header.css"/>
    <link rel="stylesheet" type="text/css" href="components/carousel/carousel.css"/>
    <link rel="stylesheet" type="text/css" href="components/recommendCard/recommendCard.css"/>
    <link rel="stylesheet" type="text/css" href="components/miniCarousel/miniCarousel.css"/>
    <link rel="stylesheet" type="text/css" href="electoPage/offer/offer.css"/>
    <link rel="stylesheet" type="text/css" href="electoPage/category/category.css"/>
    <link rel="stylesheet" type="text/css" href="electoPage/bestseller/bestseller.css"/>
    <link rel="stylesheet" type="text/css" href="electoPage/recentlyViewed/recentlyViewed.css"/>
    <link rel="stylesheet" type="text/css" href="components/footerCards/footerCards.css"/>
    <link rel="stylesheet" type="text/css" href="footer/footer.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
          rel="stylesheet">

</head>
<header>
    <?php
    require 'header/header.html';
    require 'components/carousel/carousel.html';
    ?>
</header>
<body>
    <?php
        require 'components/recommendCard/recommendCard.html';
        require 'electoPage/offer/offer.html';
        require 'electoPage/category/category.html';
        require 'electoPage/bestseller/bestseller.html';
        require 'electoPage/recentlyViewed/recentlyViewed.html';
        require 'components/miniCarousel/miniCarousel.html';
    ?>
</body>
<footer>
    <?php
        require 'components/footerCards/footerCards.html';
        require 'footer/footer.html';
    ?>
</footer>
</html>