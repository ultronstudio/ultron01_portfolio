<?php
/**
 * Údaje pre dokument
 */
$document = array(
    'code' => 'sk',
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
    'pnum' => 2,
    'info1' => '(celkom som dokončil <span id="odometer" class="odometer">0</span> projekt)',
    'info24' => '(celkom som dokončil <span id="odometer" class="odometer">0</span> projekty)',
    'info05' => '(celkom som dokončil <span id="odometer" class="odometer">0</span> projektov)',
    'stratycz' => $straty = array(
        'title' => 'Straty.cz',
        'description' => 'Portfólio pre českého YouTubera a Twitch streamera <b>Stratyho</b>',
        'used' => '<li>Bootstrap</li><li>HTML5</li><li>CSS3</li><li>FontAwesome</li>',
        'status' => '<b class="text-danger">UŽ NEPOUŽÍVANÉ</b>'
    ),
    'czechplayeu' => $czechplayeu = array(
        'title' => 'Czech-Play.eu',
        'description' => 'Komunitný web pre český Minecraft server <b>Slovak-Play.eu</b>',
        'used' => '<li>Bootstrap</li><li>HTML5</li><li>CSS3</li><li>JavaScript</li><li>PHP</li><li>MySQL</li>',
        'status' => '<b class="text-danger">UŽ NEEXISTUJE</b>'
    ),
    'hophub' => $hophub = array(
        'title' => 'HopHub',
        'description' => 'Rozšírenie pre prehliadač, ktoré dokáže upraviť štýl stránky GitHub tak, aby vyzerala ako váš obľúbený web pre dospelých.',
        'used' => '<li>CSS3</li><li>JavaScript</li><li>JSON</li>',
        'status' => '<b class="text-success">NA STIAHNUTIE</b>&nbsp;<small>(<a href="https://github.com/ultronstudio/HopHub" target="_blank">tu</a>)</small>'
    ),
    'used' => 'Použité technológie:',
    'status' => 'Stav:',
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