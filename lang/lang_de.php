<?php
/**
 * Daten für das Dokument
 */
$document = array(
    'code' => 'de',
    'title' => 'Petr Vurm - Entwickler von statischen Websites und Webanwendungen',
    'meta-author' => 'Petr Vurm',
    'meta-desc' => "Webportfolio von Petr Vurm",
    'meta-kwords' => 'deutsch, de, ultron01, petr vurm, web dev, developer, straty.cz, ultronstudio, ultronarmy, ultron, czech-play.eu'
);

/**
 * Kopfdaten
 */
$header = array(
    'name' => 'Petr Vurm',
    'lead' => 'Entwickler von statischen Websites und Webanwendungen',
);

/**
 * Abschnitt "Über mich".
 */
$about = array(
    'title' => 'Über mich',
    'greeting' => 'Hallo 👋, Ich heiße <b>Petr</b> und Ich bin <b>' . date('Y') - 2006 .' Jahre alt</b>.',
    'description' => 'Ich habe vor ein paar Jahren in der Grundschule angefangen, Websites zu erstellen. Seitdem habe ich viele Hobbys geändert, darunter Malen oder Klavierspielen. 2020 kehrte ich in die Vollzeit-Webentwicklung zurück.',
    'workexp' => 'Arbeitserfahrung',
    'workexp_desc' => 'Ich habe noch keine Berufserfahrung, aber wenn Sie daran interessiert sind, dass ich mit Ihnen an Ihrem Projekt arbeite, können Sie mich <b>kontaktieren</b>.',
    'skills' => 'Fähigkeiten',
    'frontend' => 'Frontend',
    'backend' => 'Backend',
);

/**
 * Abschnitt "Meine Projekte"
 */
$projects = array(
    'title' => 'Meine Projekte',
    'pnum' => 2,
    'info1' => '(Ich habe insgesamt <span id="odometer" class="odometer">0</span> Projekt abgeschlossen)',
    'info24' => '(Ich habe insgesamt <span id="odometer" class="odometer">0</span> Projekte abgeschlossen)',
    'info05' => '(Ich habe insgesamt <span id="odometer" class="odometer">0</span> Projekte abgeschlossen)',
    'stratycz' => $straty = array(
        'title' => 'Straty.cz',
        'description' => 'Portfolio für den Tschechischen YouTuber und Twitch-Streamer <b>Straty</b>',
        'used' => '<li>Bootstrap</li><li>HTML5</li><li>CSS3</li><li>FontAwesome</li>',
        'status' => '<b class="text-danger">WIRD NICHT MEHR VERWENDET</b>'
    ),
    'czechplayeu' => $czechplayeu = array(
        'title' => 'Czech-Play.eu',
        'description' => 'Community-Website für den Tschechischen Minecraft-Server <b>Czech-Play.eu</b>',
        'used' => '<li>Bootstrap</li><li>HTML5</li><li>CSS3</li><li>JavaScript</li><li>PHP</li><li>MySQL</li>',
        'status' => '<b class="text-danger">NICHT MEHR IN BETRIEB</b>'
    ),
    'hophub' => $hophub = array(
        'title' => 'HopHub',
        'description' => 'Eine Browsererweiterung, die Ihre GitHub-Seite so gestalten kann, dass sie wie Ihre Lieblingsseite für Erwachsene aussieht.',
        'used' => '<li>CSS3</li><li>JavaScript</li><li>JSON</li>',
        'status' => '<b class="text-success">DOWNLOAD VERFÜGBAR</b>&nbsp;<small>(<a href="https://github.com/ultronstudio/HopHub" target="_blank">hier</a>)</small>'
    ),
    'used' => 'Verwendete Technologien:',
    'status' => 'Zustand:',
);

/**
 * Abschnitt "Kontakt"
 */
$contact = array(
    'title' => 'Kontakt',
    'description' => 'Wenn Sie mich kontaktieren möchten, verwenden Sie bitte eine beliebige Methode aus der Fußzeile.'
);

/**
 * Nachrichten an die Konsole
 */
$console = array(
    'stop' => "Achtung!",
    'only_dev_func' => "Dies ist eine Browserfunktion, die für Entwickler gedacht ist. Wenn Ihnen jemand gesagt hat, dass Sie hier etwas kopieren und einfügen sollen, um eine geheime Funktion dieser Website zu aktivieren oder das Konto einer anderen Person zu hacken, ist dies ein Betrug."
);