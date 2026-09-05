<!DOCTYPE html>

<html lang="en">



<head>
    <?php if (isset($mobil_banner_gizle) && $mobil_banner_gizle === true): ?>
        <style>
            /* Sadece telefonda ve sadece bu orta.php çağrıldığında çalışır */
            @media only screen and (max-width: 700px) {

                .banner_1,
                .banner-mobil {
                    display: none !important;
                    visibility: hidden !important;
                    height: 0 !important;
                    overflow: hidden !important;
                }

                .title-font {
                    display: block !important;
                    margin-bottom: 60px !important;
                }

                .content-wrapper {
                    height: 50px;
                }
            }
        </style>
    <?php endif; ?>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link type="text/css" rel="stylesheet" href="./style/style.css">
    <link type="text/css" rel="stylesheet" href="./style/global.css">
    <link type="text/css" rel="stylesheet" href="./style/about_us.css">
    <link type="text/css" rel="stylesheet" href="./style/form.css">
    <title>Tuzanlar Bileme</title>
    <link rel="icon" type="image/svg+xml" href="./img/minilogo.svg">
    <link rel="shortcut icon" href="./img/minilogo.svg" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Datatype:wght@100..900&family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Smooch+Sans:wght@100..900&display=swap" rel="stylesheet">
</head>




<body class="background">

    <!-- Yan panel overlay -->
    <div class="drawer-overlay" id="drawerOverlay" onclick="toggleDrawer()"></div>

    <!-- Yan panel -->
    <div class="drawer" id="drawer">
        <button class="drawer-kapat" onclick="toggleDrawer()">&#x2715;</button>
        <nav class="drawer-nav">
            <a href="index.php">Ana Sayfa</a>
            <a href="about_us.php">Hakkımızda</a>
            <a href="services.php">Hizmetlerimiz</a>
            <a href="machines.php">Makineler</a>
            <a href="contact_us.php">Bize Ulaşın</a>
        </nav>
    </div>

    <div>
        <div class="header_1">
            <div class="icon">
                <img src="./img/callicon.svg" alt="telefoniconu">
                <a href="tel:0546 284 69 57" class="fontcolorlight">0546 284 69 57</a>

            </div>
            <div class="icon">
                <img src="./img/mailicon.svg" alt="mailiconu">
                <span class="fontcolorlight">tuzanbileme@gmail.com</span>
            </div>
        </div>

        <div class="nav">
            <button class="hamburger" id="hamburgerBtn" onclick="toggleDrawer()">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="photologo ">
                <img src="./img/tuzanbilemelogo.svg" alt="logo">
            </div>
            <div class="page_1 nav1">
                <div class="card darkgreen">
                    <a href="index.php" class="tip">Ana Sayfa</a>
                </div>
                <div class="card darkgreen">
                    <a href="about_us.php" class="tip">Hakkımızda</a>
                </div>
                <div class="card darkgreen">
                    <a href="services.php" class="tip">Hizmetlerimiz</a>
                </div>
                <div class="card darkgreen">
                    <a href="machines.php" class="tip">Makineler</a>
                </div>
                <div class="card darkgreen">
                    <a href="contact_us.php" class="tip">Bize Ulaşın</a>
                </div>
            </div>

        </div>
        <div class="banner_1">
            <img src="./img/bannerovaltestere.svg" alt="bannerbileme">
        </div>
        <div class="banner-mobil">
            <span class="banner-mobil-ust">2003'TEN BERİ &nbsp;·&nbsp; KESİM TEKNOLOJİLERİ</span>
            <h2>İŞİNİZE KESKİN<span class="banner-mobil-vurgu">BİR DOKUNUŞ</span></h2>
            <p>Bi-metal, karbür ve ahşap şerit testerede üretim, ölçüye göre kaynak ve 48 saatte bileme.</p>
        </div>

    </div>