<?php
/**
 * Dane do dokumentu
 */
$document = array(
    'code' => 'pl',
    'title' => 'Petr Vurm - twórca statycznych stron i aplikacji internetowych',
    'meta-author' => 'Petr Vurm',
    'meta-desc' => "Internetowe portfolio Petra Vurma",
    'meta-kwords' => 'polski, pl, ultron01, petr vurm, web dev, developer, straty.cz, ultronstudio, ultronarmy, ultron, czech-play.eu'
);

/**
 * Dane dla „nagłówka”
 */
$header = array(
    'name' => 'Petr Vurm',
    'lead' => 'twórca statycznych stron i aplikacji internetowych',
);

/**
 * Sekcja "O mnie"
 */
$about = array(
    'title' => 'O mnie',
    'greeting' => 'Cześć 👋, nazywam się <b>Petr</b> i mam <b>' . date('Y') - 2006 .' lat</b>.',
    'description' => 'Zacząłem tworzyć strony internetowe kilka lat temu w szkole podstawowej. Od tamtej pory zajmowałem się wieloma hobby, między innymi malarstwem i grą na pianinie. W 2020 roku wróciłem do pełnoetatowego tworzenia stron internetowych.',
    'workexp' => 'Doświadczenie pracowne',
    'workexp_desc' => 'Nie mam jeszcze żadnego doświadczenia pracownego, ale jeśli jesteś zainteresowany współpracą z Tobą nad Twoim projektem, możesz <b>skontaktować się</b> ze mną.',
    'skills' => 'Umiejętności',
    'frontend' => 'Front End',
    'backend' => 'Back End',
);

/**
 * Sekcja "Moje projekty"
 */
$projects = array(
    'title' => 'Moje projekty',
    'pnum' => 3,
    'info1' => '(w sumie zrealizowałem <span id="odometer" class="odometer">0</span> projekt)',
    'info24' => '(w sumie zrealizowałem <span id="odometer" class="odometer">0</span> projekty)',
    'info05' => '(w sumie zrealizowałem <span id="odometer" class="odometer">0</span> projektów)',
    'stratycz' => $straty = array(
        'title' => 'Straty.cz',
        'description' => 'Portfolio czeskiego YouTubera i streamera Twitcha <b>Straty</b>',
        'used' => '<li>Bootstrap</li><li>HTML5</li><li>CSS3</li><li>FontAwesome</li>',
        'status' => '<b class="text-danger">NIEUŻYWANY</b>'
    ),
    'czechplayeu' => $czechplayeu = array(
        'title' => 'Czech-Play.eu',
        'description' => 'Witryna społecznościowa czeskiego serwera Minecraft <b>Czech-Play.eu</b>',
        'used' => '<li>Bootstrap</li><li>HTML5</li><li>CSS3</li><li>JavaScript</li><li>PHP</li><li>MySQL</li>',
        'status' => '<b class="text-danger">JUŻ NIE ISTNIEJE</b>'
    ),
    'hophub' => $hophub = array(
        'title' => 'HopHub',
        'description' => 'Rozszerzenie przeglądarki, które może stylizować twoją stronę GitHub tak, aby wyglądała jak twoja ulubiona strona dla dorosłych.',
        'used' => '<li>CSS3</li><li>JavaScript</li><li>JSON</li>',
        'status' => '<b class="text-success">DOSTĘPNY DO POBRANIA</b>&nbsp;<small>(<a href="https://github.com/ultronstudio/HopHub" target="_blank">tutaj</a>)</small>'
    ),
    'used' => 'Stosowane technologie:',
    'status' => 'Status:',
);

/**
 * Sekcja "Kontakt"
 */
$contact = array(
    'title' => 'Kontakt',
    'description' => 'Jeśli chcesz się ze mną skontaktować, skorzystaj z dowolnej metody ze stopki.'
);

/**
 * Komunikaty do konsoli
 */
$console = array(
    'stop' => "Uwaga!",
    'only_dev_func' => "Jest to funkcja przeglądarki przeznaczona dla programistów. Jeśli ktoś kazał ci skopiować i wkleić coś tutaj, aby włączyć tajną funkcję tej witryny lub zhakować czyjeś konto, jest to oszustwo."
);