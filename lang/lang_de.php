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
    'pnum' => 3,
    'info1' => '(Ich habe insgesamt <span id="odometer" class="odometer">0</span> Projekt abgeschlossen)',
    'info24' => '(Ich habe insgesamt <span id="odometer" class="odometer">0</span> Projekte abgeschlossen)',
    'info05' => '(Ich habe insgesamt <span id="odometer" class="odometer">0</span> Projekte abgeschlossen)',
    'project_title' => 'Titel',
    'project_short_description' => 'Kurze Beschreibung',
    'project_published' => 'Veröffentlicht auf',
    'project_last_update' => 'Letztes Update',
    'project_preview' => 'Vorschau',
    'project_used_technologies' => 'Verwendete Technologien',
    'project_status' => 'Status',
    'projects' => array(
        array(
            'title' => 'Straty.cz',
            'description_short' => 'Portfolio',
            'description_long' => 'Portfolio für den tschechischen YouTuber und Twitch-Streamer <b>Straty</b>',
            'used' => 'Bootstrap, HTML5, CSS3, FontAwesome',
            'status' => '<b class="text-danger">NICHT BENUTZT</b>',
            'published_in' => 'Unbekannt',
            'last_update' => 'Nicht aktualisiert',
            'preview' => 'assets/img/projects/straty-cz.jpg'
        ),
        array(
            'title' => 'Czech-Play.eu',
            'description_short' => 'Community-Website',
            'description_long' => 'Community-Website für den tschechischen Minecraft-Server <b>Czech-Play.eu</b>',
            'used' => 'Bootstrap, HTML5, CSS3, JavaScript, PHP, MySQL',
            'status' => '<b class="text-danger">EXISTIERT NICHT MEHR</b>',
            'published_in' => 'Unbekannt',
            'last_update' => 'Nicht aktualisiert',
            'preview' => 'assets/img/projects/placeholder_de.png'
        ),
        array(
            'title' => 'HopHub',
            'description_short' => 'Browsererweiterung',
            'description_long' => 'Eine Browsererweiterung, die Ihre GitHub-Seite so gestalten kann, dass sie wie Ihre Lieblingsseite für Erwachsene aussieht',
            'used' => 'HTML5, CSS3, JavaScript, JSON',
            'status' => '<b class="text-success">HERUNTERLADBAR</b>&nbsp;<small>(<a href="https://github.com/ultronstudio/HopHub" target="_blank">hier</a>)</small>',
            'published_in' => '7.3.2023',
            'last_update' => '9.3.2023',
            'preview' => 'assets/img/projects/hophub.png'
        )
    )
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