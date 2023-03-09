<?php
/**
 * Údaje pro dokument
 */
$document = array(
    'code' => 'cs',
    'title' => 'Petr Vurm - vývojář statických webů a webových aplikací',
    'meta-author' => 'Petr Vurm',
    'meta-desc' => "Webové portfolio Petra Vurma",
    'meta-kwords' => 'čeština, cz, ultron01, petr vurm, web dev, developer, straty.cz, ultronstudio, ultronarmy, ultron, czech-play.eu'
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
    'pnum' => 2,
    'info1' => '(celkem jsem dokončil <span id="odometer" class="odometer">0</span> projekt)',
    'info24' => '(celkem jsem dokončil <span id="odometer" class="odometer">0</span> projekty)',
    'info05' => '(celkem jsem dokončil <span id="odometer" class="odometer">0</span> projektů)',
    'stratycz' => $straty = array(
        'title' => 'Straty.cz',
        'description' => 'Portfolio pro českého YouTubera a Twitch streamera <b>Stratyho</b>',
        'used' => '<li>Bootstrap</li><li>HTML5</li><li>CSS3</li><li>FontAwesome</li>',
        'status' => '<b class="text-danger">JIŽ NEPOUŽÍVÁNO</b>'
    ),
    'czechplayeu' => $czechplayeu = array(
        'title' => 'Czech-Play.eu',
        'description' => 'Komunitní web pro český Minecraft server <b>Czech-Play.eu</b>',
        'used' => '<li>Bootstrap</li><li>HTML5</li><li>CSS3</li><li>JavaScript</li><li>PHP</li><li>MySQL</li>',
        'status' => '<b class="text-danger">JIŽ NEEXISTUJE</b>'
    ),
    'hophub' => $hophub = array(
        'title' => 'HopHub',
        'description' => 'Rozšíření pro prohlížeč, které dokáže upravit styl stránky GitHub tak, aby vypadala jako váš oblíbený web pro dospělé.',
        'used' => '<li>CSS3</li><li>JavaScript</li><li>JSON</li>',
        'status' => '<b class="text-success">KE STAŽENÍ</b>&nbsp;<small>(<a href="https://github.com/ultronstudio/HopHub" target="_blank">zde</a>)</small>'
    ),
    'used' => 'Použité technologie:',
    'status' => 'Stav:',
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