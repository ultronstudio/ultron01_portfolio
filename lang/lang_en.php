<?php
/**
 * Document data
 */
$document = array(
    'code' => 'en',
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
    'pnum' => 2,
    'info1' => '(I have completed <span id="odometer" class="odometer">0</span> project in total)',
    'info24' => '(I have completed <span id="odometer" class="odometer">0</span> projects in total)',
    'info05' => '(I have completed <span id="odometer" class="odometer">0</span> projects in total)',
    'stratycz' => $straty = array(
        'title' => 'Straty.cz',
        'description' => 'Portfolio for Czech YouTuber and Twitch streamer <b>Straty</b>',
        'used' => '<li>Bootstrap</li><li>HTML5</li><li>CSS3</li><li>FontAwesome</li>',
        'status' => '<b class="text-danger">NO LONGER USED</b>'
    ),
    'czechplayeu' => $czechplayeu = array(
        'title' => 'Czech-Play.eu',
        'description' => 'Community website for Czech Minecraft server <b>Czech-Play.eu</b>',
        'used' => '<li>Bootstrap</li><li>HTML5</li><li>CSS3</li><li>JavaScript</li><li>PHP</li><li>MySQL</li>',
        'status' => '<b class="text-danger">NO LONGER EXISTS</b>'
    ),
    'hophub' => $hophub = array(
        'title' => 'HopHub',
        'description' => 'Browser extension, which can styles the GitHub page to look like your favorite adult site.',
        'used' => '<li>CSS3</li><li>JavaScript</li><li>JSON</li>',
        'status' => '<b class="text-success">DOWNLOADABLE</b>&nbsp;<small>(<a href="https://github.com/ultronstudio/HopHub" target="_blank">here</a>)</small>'
    ),
    'used' => 'Technologies used:',
    'status' => 'Status:',
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