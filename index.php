<?php
define('BASE_URL', 'https://ultron01.ultronarmy.eu');

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
    <link rel="alternate" hreflang="en" href="<?= BASE_URL ?>/?lang=pl">
    <link rel="alternate" hreflang="en" href="<?= BASE_URL ?>/?lang=sk">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= BASE_URL; ?>/assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="https://site-assets.fontawesome.com/releases/v6.3.0/css/all.css" rel="stylesheet">
    <style>
        @font-face {
            font-family: "Matrix Code NFI";
            src: url('<?= BASE_URL; ?>/assets/fonts/matrix_code_nfi.woff');
        }
    </style>
</head>

<body>
    <main role="main" class="container">
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
        <div class="mb-5">
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
                                                        }; ?></small></h3>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card h-100">
                        <img src="<?= BASE_URL; ?>/assets/img/projects/straty-cz.jpg" alt="<?= $projects['stratycz']['title']; ?>" class="card-img-top">
                        <div class="card-body">
                            <h6><?= $projects['stratycz']['title']; ?></h6>
                            <div class="card-text">
                                <p><?= $projects['stratycz']['description']; ?></p>
                                <hr>
                                <div class="container">
                                    <b><?= $projects['used']; ?></b><br>
                                    <ul>
                                        <?= $projects['stratycz']['used']; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <?= $projects['status']; ?>&nbsp;<?= $projects['stratycz']['status']; ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card h-100">
                        <img src="<?= BASE_URL; ?>/assets/img/projects/placeholder.jpg" alt="<?= $projects['czechplayeu']['title']; ?>" class="card-img-top">
                        <div class="card-body">
                            <h6><?= $projects['czechplayeu']['title']; ?></h6>
                            <div class="card-text">
                                <p><?= $projects['czechplayeu']['description']; ?></p>
                                <hr>
                                <div class="container">
                                    <b><?= $projects['used']; ?></b><br>
                                    <ul>
                                        <?= $projects['czechplayeu']['used']; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <?= $projects['status']; ?>&nbsp;<?= $projects['czechplayeu']['status']; ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card h-100">
                        <img src="<?= BASE_URL; ?>/assets/img/projects/hophub.png" alt="<?= $projects['hophub']['title']; ?>" class="card-img-top">
                        <div class="card-body">
                            <h6><?= $projects['hophub']['title']; ?></h6>
                            <div class="card-text">
                                <p><?= $projects['hophub']['description']; ?></p>
                                <hr>
                                <div class="container">
                                    <b><?= $projects['used']; ?></b><br>
                                    <ul>
                                        <?= $projects['hophub']['used']; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <?= $projects['status']; ?>&nbsp;<?= $projects['hophub']['status']; ?>
                        </div>
                    </div>
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
        <hr>
        <footer class="text-center">
            <div class="container pt-4">
                <section class="mb-4">
                    <a class="btn btn-link btn-floating btn-lg m-1" href="https://facebook.com/vurmpetr" role="button" target="_blank"><i class="fa-brands fa-facebook" style="background: -webkit-linear-gradient(#17A9FD, #0165E1); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"></i></a>
                    <a class="btn btn-link btn-floating btn-lg m-1" href="https://www.instagram.com/ultronek" role="button" target="_blank"><i class="fa-brands fa-instagram" style="background: -webkit-linear-gradient(#405DE6, #5851DB, #833AB4, #C13584, #E1306C, #FD1D1D, #F56040, #F77737, #FCAF45, #FFDC80); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"></i></a>
                    <a class="btn btn-link btn-floating btn-lg m-1" href="https://www.linkedin.com/in/petr-vurm-574980203" role="button" target="_blank"><i class="fa-brands fa-linkedin" style="color: #0A66C2;"></i></a>
                    <a class="btn btn-link btn-floating btn-lg m-1" href="https://github.com/ultronstudio" role="button" target="_blank"><i class="fa-brands fa-github" style="color: #000000;"></i></a>
                    <a class="btn btn-link btn-floating btn-lg m-1" href="https://www.youtube.com/channel/UCD_3lwYUvAeeqR0zURQNdzA" role="button" target="_blank"><i class="fa-brands fa-youtube" style="color: #FF0000;"></i></a>
                    <a class="btn btn-link btn-floating btn-lg m-1" href="https://discord.gg/k46F443VZJ" role="button" target="_blank"><i class="fa-brands fa-discord" style="color: #5865F2;"></i></a>
                    <a class="btn btn-link btn-floating btn-lg m-1" href="mailto:p.vurm@outlook.cz" role="button"><i class="fa-solid fa-at" style="background: -webkit-linear-gradient(#FF7700, #FF8A00, #FF9E00, #FFB100, #FFC500, #FFD800); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"></i></a>
                </section>
            </div>
            <div class="text-center p-3 bg-dark text-white">
                &copy;&nbsp;<?= (date('Y') >= 2024) ? '2023 - ' . date('Y') : date('Y'); ?>&nbsp;<b><?= $header['name']; ?></b><br>
            </div>
        </footer>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.3.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/egg.js/1.0/egg.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= BASE_URL; ?>/assets/js/odometer.js" crossorigin="anonymous"></script>
    <script src="<?= BASE_URL; ?>/assets/js/ajax.js" crossorigin="anonymous"></script>
    <script>
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