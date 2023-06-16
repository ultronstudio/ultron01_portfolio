<?php
/**
 * Document data
 */
$document = array(
    'code' => 'en',
    'lang_name' => 'English',
    'title' => 'Petr Vurm - static websites & web applications developer',
    'meta-author' => 'Petr Vurm',
    'meta-desc' => "Petr Vurm's web portfolio",
    'meta-kwords' => 'english, en, ultron01, petr vurm, web dev, developer, straty.cz, ultronstudio, ultronarmy, ultron, czech-play.eu'
);

/**
 * Header data
 */
$header = array(
    'name' => 'Petr Vurm',
    'lead' => 'static websites & web applications developer',
);

/**
 * "About Me" section
 */
$about = array(
    'title' => 'About Me',
    'greeting' => 'Hello 👋, my name is <b>Petr</b> and I am <b>' . date('Y') - 2006 .' years old</b>.',
    'description' => 'I got into creating websites a few years ago in elementary school. Since then I have changed many hobbies, among them painting or playing the piano. In 2020, I returned to full-time web development.',
    'workexp' => 'Work experience',
    'workexp_desc' => "I don't have any work experience yet, but if you are interested in me working with you on your project, you can <b>contact</b> me.",
    'skills' => 'Skills',
    'frontend' => 'Front End',
    'backend' => 'Back End',
);

/**
 * "My Projects" section
 */
$projects = array(
    'title' => 'My Projects',
    'pnum' => 3,
    'info1' => '(I have completed <span id="odometer" class="odometer">0</span> project in total)',
    'info24' => '(I have completed <span id="odometer" class="odometer">0</span> projects in total)',
    'info05' => '(I have completed <span id="odometer" class="odometer">0</span> projects in total)',
    'project_title' => 'Title',
    'project_short_description' => 'Short description',
    'project_published' => 'Published on',
    'project_last_update' => 'Last update',
    'project_preview' => 'Preview',
    'project_used_technologies' => 'Technologies used',
    'project_status' => 'Status',
    'projects' => array(
        array(
            'title' => 'Straty.cz',
            'description_short' => 'Portfolio',
            'description_long' => 'Portfolio for Czech YouTuber and Twitch streamer <b>Straty</b>',
            'used' => 'Bootstrap, HTML5, CSS3, FontAwesome',
            'status' => '<b class="text-danger">NO LONGER USED</b>',
            'published_in' => 'Unknown',
            'last_update' => 'Not updated',
            'preview' => 'assets/img/projects/straty-cz.jpg'
        ),
        array(
            'title' => 'Czech-Play.eu',
            'description_short' => 'Community website',
            'description_long' => 'Community website for the Czech Minecraft server <b>Czech-Play.eu</b>',
            'used' => 'Bootstrap, HTML5, CSS3, JavaScript, PHP, MySQL',
            'status' => '<b class="text-danger">NO LONGER EXISTS</b>',
            'published_in' => 'Unknown',
            'last_update' => 'Not updated',
            'preview' => 'assets/img/projects/placeholder_en.png'
        ),
        array(
            'title' => 'HopHub',
            'description_short' => 'Browser extension',
            'description_long' => 'A browser extension that can style your GitHub page to look like your favorite adult site',
            'used' => 'HTML5, CSS3, JavaScript, JSON',
            'status' => '<b class="text-success">DOWNLOADABLE</b>&nbsp;<small>(<a href="https://github.com/ultronstudio/HopHub" target="_blank">here</a>)</small>',
            'published_in' => '7.3.2023',
            'last_update' => '6.4.2023',
            'preview' => 'assets/img/projects/hophub.png'
        ),
        array(
            'title' => 'Shadowless',
            'description_short' => 'Video game',
            'description_long' => 'Psychological horror game',
            'used' => 'Unity',
            'status' => '<b class="text-warning">IN DEVELOPMENT</b>&nbsp;<small>(<a href="https://ultron01.ultronarmy.eu/shadowless" target="_blank">website</a>)</small>',
            'published_in' => '11.3.2023',
            'last_update' => '<i>Non-public data</i>',
            'preview' => 'assets/img/shadowless/thumbnail.png'
        )
    )
);

/**
 * "Contact" section
 */
$contact = array(
    'title' => 'Contact',
    'description' => 'If you want to contact me, please use any method from the footer.'
);

/**
 * Messages to the console
 */
$console = array(
    'stop' => "Attention!",
    'only_dev_func' => "This is a browser feature intended for developers. If someone told you to copy and paste something here to enable a secret feature of this site or to hack someone's account, is it a scam."
);