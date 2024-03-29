<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/config/functions.php';

if (isset($_GET['lang']) && !empty($_GET['lang'])) {
    if (file_exists('lang/lang_' . $_GET['lang'] . '.php')) {
        require_once 'lang/lang_' . $_GET['lang'] . '.php';
    } else {
        require_once 'lang/lang_en.php';
    }
} else {
    require_once 'lang/lang_en.php';
}
?>
<!doctype html>
<html lang="<?= $document['code']; ?>">

<head>
    <meta charset="utf-8">
    <link rel="canonical" href="<?= BASE_URL; ?>?lang=<?= $document['code']; ?>">
    <title><?= $document['title']; ?></title>
    <!-- Twitter settings -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?= $document['title']; ?>">
    <meta name="twitter:image" content="<?= BASE_URL; ?>/assets/img/og-image/og-image-<?= $document['code']; ?>.png">

    <!-- OG settings -->
    <meta property="og:title" content="<?= $document['title']; ?>">
    <meta property="og:image" content="<?= BASE_URL; ?>/assets/img/og-image/og-image-<?= $document['code']; ?>.png">
    <meta property="og:url" content="<?= BASE_URL; ?>?lang=<?= $document['code']; ?>">
    <meta property="og:type" content="website">

    <!-- meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#00b7ef">
    <meta name="author" content="<?= $document['meta-author']; ?>">
    <meta name="description" content="<?= $document['meta-desc']; ?>">
    <meta name="twitter:description" content="<?= $document['meta-desc']; ?>">
    <meta name="keywords" content="<?= $document['meta-kwords']; ?>">
    <meta name="robots" content="index">

    <link rel="shortcut icon" href="<?= BASE_URL; ?>/assets/img/favicon/<?= (isset($document['code']) && file_exists('assets/img/favicon/favicon-' . $document['code'] . '.ico')) ? 'favicon-' . $document['code'] : 'favicon'; ?>.ico" type="image/x-icon">
    <link rel="alternate" hreflang="cs" href="<?= BASE_URL ?>/?lang=cs">
    <link rel="alternate" hreflang="de" href="<?= BASE_URL ?>/?lang=de">
    <link rel="alternate" hreflang="en" href="<?= BASE_URL ?>/?lang=en">
    <link rel="alternate" hreflang="pl" href="<?= BASE_URL ?>/?lang=pl">
    <link rel="alternate" hreflang="sk" href="<?= BASE_URL ?>/?lang=sk">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= BASE_URL; ?>/assets/css/odometer-theme-default.css?t=<?= filemtime(__DIR__ . '/assets/css/odometer-theme-default.css'); ?>" rel="stylesheet">
    <link href="<?= BASE_URL; ?>/assets/css/style.css?t=<?= filemtime(__DIR__ . '/assets/css/style.css'); ?>" rel="stylesheet">
    <link href="https://site-assets.fontawesome.com/releases/v6.3.0/css/all.css" rel="stylesheet">
    <link href="<?= BASE_URL; ?>/assets/css/magnific-popup.css?t=<?= filemtime(__DIR__ . '/assets/css/magnific-popup.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css">
    <style>
        @font-face {
            font-family: "Matrix Code NFI";
            src: url('<?= BASE_URL; ?>/assets/fonts/matrix_code_nfi.woff');
        }
    </style>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NEJB4TT4KZ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-NEJB4TT4KZ');
    </script>
</head>

<body>
    <main role="main" class="container pt-4">
        <div class="my-5 mb-0">
            <div class="row">
                <div class="col">
                    <h1 id="home"><?= $header['name']; ?></h1>
                    <p class="lead"><?= $header['lead']; ?></p>
                </div>
                <div class="col-6">
                    <canvas id="matrix_rain" style="width: 100%; height: 250px;"></canvas>
                </div>
            </div>
        </div>
        <hr>
        <div class="mb-5">
            <h3 id="about"><?= $about['title']; ?></h3>
            <div class="row">
                <p><?= $about['greeting']; ?></p>
                <p><?= $about['description']; ?></p>
            </div>
            <div class="row">
                <div class="col">
                    <h4 class="mb-3"><?= $about['workexp']; ?></h4>
                    <div class="card shadow">
                        <div class="card-body">
                            <i><?= $about['workexp_desc']; ?></i>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h4 class="mb-3"><?= $about['skills']; ?></h4>
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="card-title">
                                <h5><?= $about['frontend']; ?></h5>
                            </div>
                            <div class="card-text">
                                <ul>
                                    <li>
                                        HTML5<br>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li>
                                        CSS3<br>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li>
                                        JavaScript<br>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li>
                                        Bootstrap<br>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow mt-4">
                        <div class="card-body">
                            <div class="card-title">
                                <h5><?= $about['backend']; ?></h5>
                            </div>
                            <div class="card-text">
                                <ul>
                                    <li>
                                        PHP<br>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li>
                                        MySQL<br>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li>
                                        Node.js<br>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="mb-3">
            <h3><?= $projects['title']; ?>&nbsp;<small><?php switch ($projects['pnum']) {
                                                            case 1:
                                                                echo $projects['info1'];
                                                                break;
                                                            case 2:
                                                            case 3:
                                                            case 4:
                                                                echo $projects['info24'];
                                                                break;
                                                            default:
                                                                echo $projects['info05'];
                                                                break;
                                                        }; ?></small>
            </h3>
            <div class="mt-3 mb-3">
                <div class="row">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col"><?= $projects['project_title']; ?><br><span style="font-weight: normal;"><?= $projects['project_short_description']; ?></span></th>
                                <th scope="col"><?= $projects['project_published'] ?><br><span style="font-weight: normal;" class="text-success"><?= $projects['project_last_update'] ?></span></th>
                                <th scope="col"><?= $projects['project_preview']; ?><br><span style="font-weight: normal;"><?= $projects['project_used_technologies']; ?></span></th>
                                <th scope="col"><?= $projects['project_status']; ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($projects['projects'] as $project) : ?>
                                <tr>
                                    <td><b><?= $project['title']; ?></b><br><span style="font-weight: normal;" title="<?= $project['description_long']; ?>"><?= $project['description_short']; ?></span></td>
                                    <td><?= $project['published_in']; ?><br><span style="font-weight: normal;" class="text-success"><?= $project['last_update']; ?></span></td>
                                    <td><a href="<?= BASE_URL; ?>/<?= $project['preview']; ?>" class="mopup" data-title="<?= $projects['project_preview']; ?>"><?= $projects['project_preview']; ?></a><br><?= $project['used']; ?></td>
                                    <td><?= $project['status']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <hr>
        <div class="mb-0">
            <h3><?= $contact['title']; ?></h3>
            <div class="row">
                <p><?= $contact['description']; ?></p>
            </div>
        </div>
    </main>
    <footer class="text-center" style="border-top: 1px solid #000000;">
        <div class="mb-2 pt-2">
            <section class="">
                <a class="btn btn-link btn-floating btn-lg m-1" href="https://facebook.com/vurmpetr" role="button" target="_blank"><i class="fa-brands fa-facebook" style="background: -webkit-linear-gradient(#17A9FD, #0165E1); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"></i></a>
                <a class="btn btn-link btn-floating btn-lg m-1" href="https://www.instagram.com/ultronek" role="button" target="_blank"><i class="fa-brands fa-instagram" style="background: -webkit-linear-gradient(#405DE6, #5851DB, #833AB4, #C13584, #E1306C, #FD1D1D, #F56040, #F77737, #FCAF45, #FFDC80); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"></i></a>
                <a class="btn btn-link btn-floating btn-lg m-1" href="https://www.linkedin.com/in/petr-vurm-574980203" role="button" target="_blank"><i class="fa-brands fa-linkedin" style="color: #0A66C2;"></i></a>
                <a class="btn btn-link btn-floating btn-lg m-1" href="https://github.com/ultronstudio" role="button" target="_blank"><i class="fa-brands fa-github" style="color: #000000;"></i></a>
                <a class="btn btn-link btn-floating btn-lg m-1" href="https://www.youtube.com/channel/UCD_3lwYUvAeeqR0zURQNdzA" role="button" target="_blank"><i class="fa-brands fa-youtube" style="color: #FF0000;"></i></a>
                <a class="btn btn-link btn-floating btn-lg m-1" href="https://discord.gg/k46F443VZJ" role="button" target="_blank"><i class="fa-brands fa-discord" style="color: #5865F2;"></i></a>
                <a class="btn btn-link btn-floating btn-lg m-1" href="mailto:p.vurm@outlook.cz" role="button"><i class="fa-solid fa-at" style="background: -webkit-linear-gradient(#FF7700, #FF8A00, #FF9E00, #FFB100, #FFC500, #FFD800); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"></i></a>
            </section>
            <div class="dropdown">
                <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="<?= BASE_URL; ?>/assets/img/flags/<?= $document['code']; ?>.svg" style="border-radius: 5px; width: auto; height: 15px; margin-top: -3px"></span>&nbsp;<?= $document['lang_name']; ?>
                </button>
                <ul class="dropdown-menu">
                    <?php if ($document['code'] != 'cs') : ?>
                        <li><a class="dropdown-item" href="<?= BASE_URL; ?>/?lang=cs">
                                <img src="<?= BASE_URL; ?>/assets/img/flags/cs.svg" style="border-radius: 5px; width: auto; height: 15px; margin-top: -3px"></span>&nbsp;Česky
                            </a></li>
                    <?php endif; ?>
                    <?php if ($document['code'] != 'de') : ?>
                        <li><a class="dropdown-item" href="<?= BASE_URL; ?>/?lang=de">
                                <img src="<?= BASE_URL; ?>/assets/img/flags/de.svg" style="border-radius: 5px; width: auto; height: 15px; margin-top: -3px"></span>&nbsp;Deutsch
                            </a></li>
                    <?php endif; ?>
                    <?php if ($document['code'] != 'en') : ?>
                        <li><a class="dropdown-item" href="<?= BASE_URL; ?>/?lang=en">
                                <img src="<?= BASE_URL; ?>/assets/img/flags/en.svg" style="border-radius: 5px; width: auto; height: 15px; margin-top: -3px"></span>&nbsp;English
                            </a></li>
                    <?php endif; ?>
                    <?php if ($document['code'] != 'es') : ?>
                        <li><a class="dropdown-item" href="<?= BASE_URL; ?>/?lang=es">
                                <img src="<?= BASE_URL; ?>/assets/img/flags/es.svg" style="border-radius: 5px; width: auto; height: 15px; margin-top: -3px"></span>&nbsp;Español
                            </a></li>
                    <?php endif; ?>
                    <?php if ($document['code'] != 'fr') : ?>
                        <li><a class="dropdown-item" href="<?= BASE_URL; ?>/?lang=fr">
                                <img src="<?= BASE_URL; ?>/assets/img/flags/fr.svg" style="border-radius: 5px; width: auto; height: 15px; margin-top: -3px"></span>&nbsp;Français
                            </a></li>
                    <?php endif; ?>
                    <?php if ($document['code'] != 'pl') : ?>
                        <li><a class="dropdown-item" href="<?= BASE_URL; ?>/?lang=pl">
                                <img src="<?= BASE_URL; ?>/assets/img/flags/pl.svg" style="border-radius: 5px; width: auto; height: 15px; margin-top: -3px"></span>&nbsp;Polski
                            </a></li>
                    <?php endif; ?>
                    <?php if ($document['code'] != 'sk') : ?>
                        <li><a class="dropdown-item" href="<?= BASE_URL; ?>/?lang=sk">
                                <img src="<?= BASE_URL; ?>/assets/img/flags/sk.svg" style="border-radius: 5px; width: auto; height: 15px; margin-top: -3px"></span>&nbsp;Slovensky
                            </a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <div class="text-center p-3 bg-dark text-white">
            &copy;&nbsp;<?= (date('Y') >= 2024) ? '2023 - ' . date('Y') : date('Y'); ?>&nbsp;<b><?= $header['name']; ?></b><br>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.3.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/egg.js/1.0/egg.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= BASE_URL; ?>/assets/js/odometer.js?t=<?= filemtime(__DIR__ . '/assets/js/odometer.js'); ?>"></script>
    <script src="<?= BASE_URL; ?>/assets/js/jquery.magnific-popup.js?t=<?= filemtime(__DIR__ . '/assets/js/jquery.magnific-popup.js'); ?>"></script>
    <script>
        $('.mopup').magnificPopup({
            gallery: {
                enabled: false
            },
            type: 'image',
            image: {
                titleSrc: 'data-title'
            }
        });

        $(document).ready(function() {
            console.log("%c<?= $console['stop']; ?>", "color:#00b7ef; font-size:60px; font-weight: bold; -webkit-text-stroke: 1px black;");
            console.log("%c<?= $console['only_dev_func']; ?>", "font-size: 18px;");
        });

        setTimeout(function() {
            odometer.innerHTML = <?= $projects['pnum']; ?>;
        }, 1);

        var c = document.getElementById("matrix_rain");
        var ctx = c.getContext("2d");

        c.height = window.innerHeight;
        c.width = window.innerWidth;

        var matrix = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789$+-*/=%#&_(),.;:?!\\|{}<>[]^~";
        matrix = matrix.split("");

        var font_size = 50;
        var columns = c.width / font_size;
        var drops = [];
        for (var x = 0; x < columns; x++) {
            drops[x] = 1;
        }

        function draw() {
            ctx.fillStyle = "rgba(0, 0, 0, 0.04)";
            ctx.fillRect(0, 0, c.width, c.height);

            ctx.fillStyle = "#008F11";
            ctx.font = font_size + 'px "Matrix Code NFI"';
            for (var i = 0; i < drops.length; i++) {
                var text = matrix[Math.floor(Math.random() * matrix.length)];
                ctx.fillText(text, i * font_size, drops[i] * font_size);

                if (drops[i] * font_size > c.height && Math.random() > 0.975) {
                    drops[i] = 0;
                }

                drops[i]++;
            }
        }
        setInterval(draw, 35);
    </script>
</body>

</html>