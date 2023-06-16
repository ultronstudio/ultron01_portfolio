<?php
/**
 * Údaje pro dokument
 */
$document = array(
    'code' => 'cs',
    'lang_name' => 'Česky',
    'title' => 'Petr Vurm - vývojář statických webů a webových aplikací',
    'meta-author' => 'Petr Vurm',
    'meta-desc' => "Webové portfolio Petra Vurma",
    'meta-kwords' => 'čeština, cz, ultron01, petr vurm, web dev, developer, straty.cz, ultronstudio, ultronarmy, ultron, czech-play.eu'
);

/**
 * Údaje pro navigaci
 */
$navbar = array(
    'home' => 'Domů',
    'projects' => 'Projekty'
);

/**
 * Údaje pro stránku chyby 404 (nenalezeno)
 */
$notfound = array(
    'title' => "Chyba<br>404",
    'description' => 'Stránka, kterou hledáte, mohla být odstraněna, přesunuta, nebo je dočasně nedostupná. <a href="' . CreateLink($document['code'], "home") . '">Zpět na domovskou stránku</a>'
);

/**
 * Údaje pro "hlavičku"
 */
$header = array(
    'name' => 'Petr Vurm',
    'lead' => 'vývojář statických webů a webových aplikací',
);

/**
 * Sekce "O mě"
 */
$about = array(
    'title' => 'O mě',
    'greeting' => 'Zdravím 👋, jmenuji se <b>Petr</b> a je mi <b>' . date('Y') - 2006 .' let</b>.',
    'description' => 'K tvorbě webových stránek jsem se dostal před pár lety na základní škole. Od té doby jsem vystřídal mnoho koníčků, mezi nimi malování nebo hru na klavír. V roce 2020 jsem se vrátil k vývoji webu na plný úvazek.',
    'workexp' => 'Pracovní zkušenosti',
    'workexp_desc' => 'Zatím nemám žádné pracovní zkušenosti, ale pokud máte zájem, abych s vámi spolupracoval na vašem projektu, můžete mě <b>kontaktovat</b>.',
    'skills' => 'Dovednosti',
    'frontend' => 'Front End',
    'backend' => 'Back End',
);

/**
 * Sekce "Moje projekty"
 */
$projects = array(
    'title' => 'Moje projekty',
    'pnum' => 3,
    'info1' => '(celkem jsem dokončil <span id="odometer" class="odometer">0</span> projekt)',
    'info24' => '(celkem jsem dokončil <span id="odometer" class="odometer">0</span> projekty)',
    'info05' => '(celkem jsem dokončil <span id="odometer" class="odometer">0</span> projektů)',
    'project_title' => 'Název',
    'project_short_description' => 'Krátký popis',
    'project_published' => 'Publikováno',
    'project_last_update' => 'Poslední aktualizace',
    'project_preview' => 'Náhled',
    'project_used_technologies' => 'Použité technologie',
    'project_status' => 'Stav',
    'projects' => array(
        array(
            'title' => 'Straty.cz',
            'description_short' => 'Portfolio',
            'description_long' => 'Portfolio pro českého YouTubera a Twitch streamera <b>Stratyho</b>',
            'used' => 'Bootstrap, HTML5, CSS3, FontAwesome',
            'status' => '<b class="text-danger">JIŽ NEPOUŽÍVÁNO</b>',
            'published_in' => 'Neznámo kdy',
            'last_update' => 'Neaktualizováno',
            'preview' => 'assets/img/projects/straty-cz.jpg'
        ),
        array(
            'title' => 'Czech-Play.eu',
            'description_short' => 'Komunitní web',
            'description_long' => 'Komunitní web pro český Minecraft server <b>Czech-Play.eu</b>',
            'used' => 'Bootstrap, HTML5, CSS3, JavaScript, PHP, MySQL',
            'status' => '<b class="text-danger">JIŽ NEEXISTUJE</b>',
            'published_in' => 'Neznámo kdy',
            'last_update' => 'Neaktualizováno',
            'preview' => 'assets/img/projects/placeholder_cs.png'
        ),
        array(
            'title' => 'HopHub',
            'description_short' => 'Rozšíření pro prohlížeč',
            'description_long' => 'Rozšíření pro prohlížeč, které dokáže upravit styl stránky GitHub tak, aby vypadala jako váš oblíbený web pro dospělé',
            'used' => 'HTML5, CSS3, JavaScript, JSON',
            'status' => '<b class="text-success">KE STAŽENÍ</b>&nbsp;<small>(<a href="https://github.com/ultronstudio/HopHub" target="_blank">zde</a>)</small>',
            'published_in' => '7.3.2023',
            'last_update' => '6.4.2023',
            'preview' => 'assets/img/projects/hophub.png'
        ),
        array(
            'title' => 'Shadowless',
            'description_short' => 'Videohra',
            'description_long' => 'Psychologická hororová hra',
            'used' => 'Unity',
            'status' => '<b class="text-warning">VE VÝVOJI</b>&nbsp;<small>(<a href="https://ultron01.ultronarmy.eu/shadowless?lang=cs" target="_blank">web hry</a>)</small>',
            'published_in' => '11.3.2023',
            'last_update' => '<i>Neveřejný údaj</i>',
            'preview' => 'assets/img/shadowless/thumbnail.png'
        )
    )
);

/**
 * Sekce "Kontakt"
 */
$contact = array(
    'title' => 'Kontakt',
    'description' => 'Pokud mě chcete kontaktovat, použijte libovolnou metodu ze zápatí.'
);

/**
 * Zprávy do konzole
 */
$console = array(
    'stop' => "Pozor!",
    'only_dev_func' => "Toto je funkce prohlížeče určená pro vývojáře. Pokud vám někdo řekl, abyste sem něco zkopírovali a vložili, abyste povolili tajnou funkci tohoto webu nebo hackli něčí účet, jedná se o podvod."
);