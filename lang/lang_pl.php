<?php
/**
 * Dane do dokumentu
 */
$document = array(
    'code' => 'pl',
    'lang_name' => 'Polski',
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
    'project_title' => 'Nazwa',
    'project_short_description' => 'Krótki opis',
    'project_published' => 'Opublikowany',
    'project_last_update' => 'Ostatnia aktualizacja',
    'project_preview' => 'Podgląd',
    'project_used_technologies' => 'Stosowane technologie',
    'project_status' => 'Stan',
    'projects' => array(
        array(
            'title' => 'Straty.cz',
            'description_short' => 'Portfolio',
            'description_long' => 'Portfolio dla czeskiego YouTubera i streamera Twitcha <b>Straty</b>',
            'used' => 'Bootstrap, HTML5, CSS3, FontAwesome',
            'status' => '<b class="text-danger">NIEUŻYWANY</b>',
            'published_in' => 'Nie wiadomo kiedy',
            'last_update' => 'Nie są aktualizowane',
            'preview' => 'assets/img/projects/straty-cz.jpg'
        ),
        array(
            'title' => 'Czech-Play.eu',
            'description_short' => 'Witryna społecznościowa',
            'description_long' => 'Witryna społecznościowa czeskiego serwera Minecraft <b>Czech-Play.eu</b>',
            'used' => 'Bootstrap, HTML5, CSS3, JavaScript, PHP, MySQL',
            'status' => '<b class="text-danger">JUŻ NIE ISTNIEJE</b>',
            'published_in' => 'Nie wiadomo kiedy',
            'last_update' => 'Nie są aktualizowane',
            'preview' => 'assets/img/projects/placeholder_pl.png'
        ),
        array(
            'title' => 'HopHub',
            'description_short' => 'Rozszerzenie przeglądarki',
            'description_long' => 'Rozszerzenie przeglądarki, które może stylizować twoją stronę GitHub tak, aby wyglądała jak twoja ulubiona strona dla dorosłych',
            'used' => 'HTML5, CSS3, JavaScript, JSON',
            'status' => '<b class="text-success">POBIERAĆ</b>&nbsp;<small>(<a href="https://github.com/ultronstudio/HopHub" target="_blank">tutaj</a>)</small>',
            'published_in' => '7.3.2023',
            'last_update' => '6.4.2023',
            'preview' => 'assets/img/projects/hophub.png'
        )
    )
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