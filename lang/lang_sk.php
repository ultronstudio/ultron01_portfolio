<?php
/**
 * Údaje pre dokument
 */
$document = array(
    'code' => 'sk',
    'lang_name' => 'Slovensky',
    'title' => 'Petr Vurm - autor statických webov a webových aplikácií',
    'meta-author' => 'Petr Vurm',
    'meta-desc' => "Webové portfólio Petra Vurma",
    'meta-kwords' => 'slovenčina, sk, ultron01, petr vurm, web dev, developer, straty.cz, ultronstudio, ultronarmy, ultron, czech-play.eu'
);

/**
 * Údaje pre "hlavičku"
 */
$header = array(
    'name' => 'Petr Vurm',
    'lead' => 'autor statických webov a webových aplikácií',
);

/**
 * Sekcia "O mňa"
 */
$about = array(
    'title' => 'O mňa',
    'greeting' => 'Zdravím 👋, volám sa <b>Peter</b> a je mi <b>' . date('Y') - 2006 .' rokov</b>.',
    'description' => 'K tvorbe webových stránok som sa dostal pred pár rokmi na základnej škole. Odvtedy som vystriedal mnoho koníčkov, medzi nimi maľovanie alebo hru na klavíri. V roku 2020 som sa vrátil k vývoju webu na plný úväzok.',
    'workexp' => 'Pracovné skúsenosti',
    'workexp_desc' => 'Zatiaľ nemám žiadne pracovné skúsenosti, ale pokiaľ máte záujem, aby som s vami spolupracoval na vašom projekte, môžete ma <b>kontaktovať</b>.',
    'skills' => 'Zručnosti',
    'frontend' => 'Front End',
    'backend' => 'Back End',
);

/**
 * Sekcia "Moje projekty"
 */
$projects = array(
    'title' => 'Moje projekty',
    'pnum' => 3,
    'info1' => '(celkom som dokončil <span id="odometer" class="odometer">0</span> projekt)',
    'info24' => '(celkom som dokončil <span id="odometer" class="odometer">0</span> projekty)',
    'info05' => '(celkom som dokončil <span id="odometer" class="odometer">0</span> projektov)',
    'project_title' => 'Názov',
    'project_short_description' => 'Krátky popis',
    'project_published' => 'Publikované',
    'project_last_update' => 'Posledná aktualizácia',
    'project_preview' => 'Náhľad',
    'project_used_technologies' => 'Použité technológie',
    'project_status' => 'Stav',
    'projects' => array(
        array(
            'title' => 'Straty.cz',
            'description_short' => 'Portfólio',
            'description_long' => 'Portfólio pre českého YouTubera a Twitch streamera <b>Stratyho</b>',
            'used' => 'Bootstrap, HTML5, CSS3, FontAwesome',
            'status' => '<b class="text-danger">UŽ NEPOUŽÍVANÉ</b>',
            'published_in' => 'Nevedno kedy',
            'last_update' => 'Neaktualizované',
            'preview' => 'assets/img/projects/straty-cz.jpg'
        ),
        array(
            'title' => 'Czech-Play.eu',
            'description_short' => 'Komunitný web',
            'description_long' => 'Komunitný web pre český Minecraft server <b>Slovak-Play.eu</b>',
            'used' => 'Bootstrap, HTML5, CSS3, JavaScript, PHP, MySQL',
            'status' => '<b class="text-danger">UŽ NEEXISTUJE</b>',
            'published_in' => 'Nevedno kedy',
            'last_update' => 'Neaktualizované',
            'preview' => 'assets/img/projects/placeholder_sk.png'
        ),
        array(
            'title' => 'HopHub',
            'description_short' => 'Rozšírenie pre prehliadač',
            'description_long' => 'Rozšírenie pre prehliadač, ktoré dokáže upraviť štýl stránky GitHub tak, aby vyzerala ako váš obľúbený web pre dospelých',
            'used' => 'HTML5, CSS3, JavaScript, JSON',
            'status' => '<b class="text-success">NA STIAHNUTIE</b>&nbsp;<small>(<a href="https://github.com/ultronstudio/HopHub" target="_blank">tu</a>)</small>',
            'published_in' => '7.3.2023',
            'last_update' => '6.4.2023',
            'preview' => 'assets/img/projects/hophub.png'
        ),
        array(
            'title' => 'Shadowless',
            'description_short' => 'Videohra',
            'description_long' => 'Psychologická hororová hra',
            'used' => 'Unity',
            'status' => '<b class="text-warning">VO VÝVOJI</b>&nbsp;<small>(<a href="https://ultron01.ultronarmy.eu/shadowless" target="_blank">web hry</a>)</small>',
            'published_in' => '11.3.2023',
            'last_update' => '<i>Neverejný údaj</i>',
            'preview' => 'assets/img/shadowless/thumbnail.png'
        )
    )
);

/**
 * Sekcia "Kontakt"
 */
$contact = array(
    'title' => 'Kontakt',
    'description' => 'Ak ma chcete kontaktovať, použite ľubovoľnú metódu zo päty.'
);

/**
 * Správy do konzoly
 */
$console = array(
    'stop' => "Pozor!",
    'only_dev_func' => "Toto je funkcia prehliadača určená pre vývojárov. Pokiaľ vám niekto povedal, aby ste sem niečo skopírovali a vložili, aby ste povolili tajnú funkciu tohto webu alebo hackli niečí účet, jedná sa o podvod."
);