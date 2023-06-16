<?php
require_once dirname(__FILE__) . '/' . '../config/config.php';
require_once dirname(__FILE__) . '/' . '../config/functions.php';

if (isset($_GET['lang']) && !empty($_GET['lang'])) {
    if (file_exists(dirname(__FILE__) . '/lang/lang_' . $_GET['lang'] . '.php')) {
        require_once dirname(__FILE__) . '/lang/lang_' . $_GET['lang'] . '.php';
    } else {
        require_once dirname(__FILE__) . '/lang/lang_en.php';
    }
} else {
    require_once dirname(__FILE__) . '/lang/lang_en.php';
}
?>
<!DOCTYPE html>
<html lang="<?= $document['code']; ?>" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $document['meta-desc']; ?>">
    <meta name="author" content="<?= $document['meta-author']; ?>">
    <meta name="keywords" content="<?= $document['meta-kwords']; ?>">
    <meta property="og:title" content="<?= $document['title']; ?>">
    <meta property="og:image" content="<?= BASE_URL; ?>/assets/img/shadowless/thumbnail.png">
    <meta property="og:url" content="<?= BASE_URL; ?>/shadowless">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="<?= BASE_URL; ?>">
    <meta property="twitter:url" content="<?= BASE_URL; ?>/shadowless">
    <meta name="twitter:title" content="<?= $document['title']; ?>">
    <meta name="twitter:description" content="<?= $document['meta-desc']; ?>">
    <meta name="twitter:image" content="<?= BASE_URL; ?>/assets/img/shadowless/thumbnail.png">
    <link rel="alternate" hreflang="cs" href="<?= BASE_URL ?>/?lang=cs">
    <link rel="alternate" hreflang="en" href="<?= BASE_URL ?>/?lang=en">
    <title><?= $document['title']; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/assets/scss/dist/shadowless.css?t=<?= filemtime(dirname(__FILE__) . '/' . '../assets/scss/dist/shadowless.css'); ?>">
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WPVXHXG');
    </script>
    <!-- End Google Tag Manager -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": ["VideoGame", "SoftwareApplication"],
            "name": "Shadowless",
            "url": "<?= BASE_URL; ?>/shadowless",
            "playMode": "SinglePlayer",
            "author": "ultron01",
            "genre": ["Psychological horror", "3D adventure"],
            "gamePlatform": ["Microsoft Windows"],
            "contentRating": "ESRB M",
            "gameItem": {
                "@type": "Thing",
                "url": "<?= BASE_URL; ?>/shadowless",
                "description": "In the story of the game, the main character moves with his family to an old house, which, as usual in horror games, hides a dark secret. Disturbing events and mysterious phenomena gradually appear that threaten the family . The player must explore a mysterious house, find answers to both spoken and unspoken questions, and overcome the dangers found in the house. During the game, he uncovers the dark past of the house and its connection with supernatural forces. In the final act, the player must face the final showdown and find a way to redemption."
            }
        }
    </script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WPVXHXG" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <main class="container mt-5">
        <div class="text-center row-section pb-3">
            <img src="<?= BASE_URL; ?>/assets/img/shadowless/logo.png" alt="Shadowless" class="logo">
            <h3><?= $header['subtitle']; ?></h3>
            <a href="https://gamejolt.com/games/shadowless/792997" class="btn btn-outline" target="_blank"><?= $header['button-gamejolt'] ?></a>
        </div>
        <div class="row row-section mt-3">
            <div class="col-4 col-title"><?= $story['title']; ?></div>
            <div class="col col-content"><?= $story['content']; ?></div>
        </div>
        <div class="row row-section mt-3 mb-5">
            <div class="col-4 col-title"><?= $rating['title']; ?></div>
            <div class="col col-content">
                <?= $rating['content']; ?>
                <div class="rating-pegi-row">
                    <a class="rating-pegi-link" href="https://pegi.info" target="_blank">
                        <img src="<?= BASE_URL; ?>/assets/img/shadowless/pegi/pegi-18.jpg" alt="PEGI 18" class="rating-pegi-image">
                    </a>
                    <a class="rating-pegi-link" href="https://pegi.info" target="_blank">
                        <img src="<?= BASE_URL; ?>/assets/img/shadowless/pegi/pegi-violence.jpg" alt="PEGI VIOLENCE" class="rating-pegi-image">
                    </a>
                    <a class="rating-pegi-link" href="https://pegi.info" target="_blank">
                        <img src="<?= BASE_URL; ?>/assets/img/shadowless/pegi/pegi-language.jpg" alt="PEGI LANGUAGE" class="rating-pegi-image">
                    </a>
                    <a class="rating-pegi-link" href="https://pegi.info" target="_blank">
                        <img src="<?= BASE_URL; ?>/assets/img/shadowless/pegi/pegi-fear.jpg" alt="PEGI FEAR" class="rating-pegi-image">
                    </a>
                    <a class="rating-pegi-link" href="https://pegi.info" target="_blank">
                        <img src="<?= BASE_URL; ?>/assets/img/shadowless/pegi/pegi-drugs.jpg" alt="PEGI DRUGS" class="rating-pegi-image">
                    </a>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="copyright">
            &copy;&nbsp;<?= (date('Y') == '2023') ? '2023' : '2023 - ' . date('Y'); ?>&nbsp;<a href="https://gamejolt.com/@ultron01" target="_blank"><b>ultron01</b></a><br>
            <?= $footer['copyright']; ?>
        </div>
        <div class="social-icons">
            <a href="https://twitter.com/ultronek" class="social-link" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="social-icon">
                    <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                </svg>
            </a>
            <a href="https://ultron01.itch.io/shadowless" class="social-link" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="social-icon">
                    <path d="M71.92 34.77C50.2 47.67 7.4 96.84 7 109.73v21.34c0 27.06 25.29 50.84 48.25 50.84 27.57 0 50.54-22.85 50.54-50 0 27.12 22.18 50 49.76 50s49-22.85 49-50c0 27.12 23.59 50 51.16 50h.5c27.57 0 51.16-22.85 51.16-50 0 27.12 21.47 50 49 50s49.76-22.85 49.76-50c0 27.12 23 50 50.54 50 23 0 48.25-23.78 48.25-50.84v-21.34c-.4-12.9-43.2-62.07-64.92-75C372.56 32.4 325.76 32 256 32S91.14 33.1 71.92 34.77zm132.32 134.39c-22 38.4-77.9 38.71-99.85.25-13.17 23.14-43.17 32.07-56 27.66-3.87 40.15-13.67 237.13 17.73 269.15 80 18.67 302.08 18.12 379.76 0 31.65-32.27 21.32-232 17.75-269.15-12.92 4.44-42.88-4.6-56-27.66-22 38.52-77.85 38.1-99.85-.24-7.1 12.49-23.05 28.94-51.76 28.94a57.54 57.54 0 0 1-51.75-28.94zm-41.58 53.77c16.47 0 31.09 0 49.22 19.78a436.91 436.91 0 0 1 88.18 0C318.22 223 332.85 223 349.31 223c52.33 0 65.22 77.53 83.87 144.45 17.26 62.15-5.52 63.67-33.95 63.73-42.15-1.57-65.49-32.18-65.49-62.79-39.25 6.43-101.93 8.79-155.55 0 0 30.61-23.34 61.22-65.49 62.79-28.42-.06-51.2-1.58-33.94-63.73 18.67-67 31.56-144.45 83.88-144.45zM256 270.79s-44.38 40.77-52.35 55.21l29-1.17v25.32c0 1.55 21.34.16 23.33.16 11.65.54 23.31 1 23.31-.16v-25.28l29 1.17c-8-14.48-52.35-55.24-52.35-55.24z" />
                </svg>
            </a>
            <a href="https://www.twitch.tv/directory/game/Shadowless" class="social-link" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="social-icon">
                    <path d="M391.17,103.47H352.54v109.7h38.63ZM285,103H246.37V212.75H285ZM120.83,0,24.31,91.42V420.58H140.14V512l96.53-91.42h77.25L487.69,256V0ZM449.07,237.75l-77.22,73.12H294.61l-67.6,64v-64H140.14V36.58H449.07Z" />
                </svg>
            </a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>