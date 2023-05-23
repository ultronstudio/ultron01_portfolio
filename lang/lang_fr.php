<?php
/**
 * Données pour le document
 */
$document = array(
    'code' => 'fr',
    'lang_name' => 'Français',
    'title' => "Petr Vurm - développeur de sites web statiques et d'applications web",
    'meta-author' => 'Petr Vurm',
    'meta-desc' => "Portefeuille Web de Petr Vurm",
    'meta-kwords' => 'français, fr, ultron01, petr vurm, web dev, developer, straty.cz, ultronstudio, ultronarmy, ultron, czech-play.eu'
);

/**
 * Données pour la navigation
 */
$navbar = array(
    'home' => "D'accueil",
    'projects' => 'Projekt'
);

/**
 * Données pour la page d'erreur 404 (introuvable)
 */
$notfound = array(
    'title' => "Erreur<br>404",
    'description' => 'La page que vous recherchez a peut-être été supprimée, déplacée ou est temporairement indisponible. <a href="' . CreateLink($document['code'], "home") . '">Retour à la page d\'accueil</a>'
);

/**
 * Données pour "en-tête"
 */
$header = array(
    'name' => 'Petr Vurm',
    'lead' => 'développeur de sites web statiques et d\'applications web',
);

/**
 * Rubrique "À propos de moi"
 */
$about = array(
    'title' => 'À propos de moi',
    'greeting' => 'Bonjour 👋, je m\'appelle <b>Petr</b> et j\'ai <b>' . date('Y') - 2006 .' ans</b>.',
    'description' => 'J\'ai commencé à créer des sites Web il y a quelques années à l\'école primaire. Depuis lors, j\'ai changé de nombreux passe-temps, dont la peinture ou le piano. En 2020, j\'ai repris le développement web à plein temps.',
    'workexp' => 'L\'expérience professionnelle',
    'workexp_desc' => 'Je n\'ai pas encore d\'expérience professionnelle, mais si vous souhaitez que je travaille avec vous sur votre projet, vous pouvez <b>contacter</b> moi.',
    'skills' => 'Compétences',
    'frontend' => 'Front-End',
    'backend' => 'Back-End',
);

/**
 * Rubrique "Mes Projets"
 */
$projects = array(
    'title' => 'Mes projets',
    'pnum' => 3,
    'info1' => '(j\'ai fini <span id="odometer" class="odometer">0</span> projet au total)',
    'info24' => '(j\'ai fini <span id="odometer" class="odometer">0</span> projets au total)',
    'info05' => '(j\'ai fini <span id="odometer" class="odometer">0</span> projets au total)',
    'project_title' => 'Nom',
    'project_short_description' => 'Brève description',
    'project_published' => 'Publié',
    'project_last_update' => 'Dernière mise à jour',
    'project_preview' => 'Aperçu',
    'project_used_technologies' => 'Technologies utilisées',
    'project_status' => 'État',
    'projects' => array(
        array(
            'title' => 'Straty.cz',
            'description_short' => 'Portfolio',
            'description_long' => 'Portfolio pour YouTuber tchèque et streamer Twitch <b>Straty</b>',
            'used' => 'Bootstrap, HTML5, CSS3, FontAwesome',
            'status' => '<b class="text-danger">PLUS UTILISÉ</b>',
            'published_in' => 'Inconnu quand',
            'last_update' => 'Pas à jour',
            'preview' => 'assets/img/projects/straty-cz.jpg'
        ),
        array(
            'title' => 'Czech-Play.eu',
            'description_short' => 'Site communautaire',
            'description_long' => 'Site communautaire pour le serveur tchèque Minecraft <b>Czech-Play.eu</b>',
            'used' => 'Bootstrap, HTML5, CSS3, JavaScript, PHP, MySQL',
            'status' => '<b class="text-danger">PLUS IL N\'EXISTE</b>',
            'published_in' => 'Inconnu quand',
            'last_update' => 'Pas à jour',
            'preview' => 'assets/img/projects/placeholder_fr.png'
        ),
        array(
            'title' => 'HopHub',
            'description_short' => 'Extension de navigateur Web',
            'description_long' => 'Une extension de navigateur Web qui peut styliser votre page GitHub pour qu\'elle ressemble à votre site pour adultes préféré',
            'used' => 'HTML5, CSS3, JavaScript, JSON',
            'status' => '<b class="text-success">TÉLÉCHARGER</b>&nbsp;<small>(<a href="https://github.com/ultronstudio/HopHub" target="_blank">ici</a>)</small>',
            'published_in' => '7.3.2023',
            'last_update' => '6.4.2023',
            'preview' => 'assets/img/projects/hophub.png'
        )
    )
);

/**
 * Rubrique "Contact"
 */
$contact = array(
    'title' => 'Contact',
    'description' => 'Si vous souhaitez me contacter, veuillez utiliser n\'importe quelle méthode du pied de page.'
);

/**
 * Messages à la console
 */
$console = array(
    'stop' => "Attention!",
    'only_dev_func' => "Il s'agit d'une fonctionnalité de navigateur destinée aux développeurs. Si quelqu'un vous dit de copier et coller quelque chose ici pour activer la fonction secrète de ce site ou pirater le compte de quelqu'un, c'est une arnaque."
);