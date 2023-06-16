<?php
/**
 * Datos para el documento
 */
$document = array(
    'code' => 'es',
    'lang_name' => 'Español',
    'title' => 'Petr Vurm - desarrollador de sitios web estáticos y aplicaciones web',
    'meta-author' => 'Petr Vurm',
    'meta-desc' => "Portafolio web de Petr Vurm",
    'meta-kwords' => 'español, es, ultron01, petr vurm, web dev, developer, straty.cz, ultronstudio, ultronarmy, ultron, czech-play.eu'
);

/**
 * Datos para la navegación
 */
$navbar = array(
    'home' => 'Hogar',
    'projects' => 'Proyectos'
);

/**
 * Datos para la página de error 404 (no encontrado)
 */
$notfound = array(
    'title' => "Error<br>404",
    'description' => 'Es posible que la página que busca haya sido eliminada, movida o no esté disponible temporalmente. <a href="' . CreateLink($document['code'], "home") . '">Volver a la página de inicio</a>'
);

/**
 * Datos para "encabezado"
 */
$header = array(
    'name' => 'Petr Vurm',
    'lead' => 'desarrollador de sitios web estáticos y aplicaciones web',
);

/**
 * Sección "Acerca de mí"
 */
$about = array(
    'title' => 'Acerca de mí',
    'greeting' => 'Hola 👋, mi nombre es <b>Petr</b> y tengo <b>' . date('Y') - 2006 .' años</b>.',
    'description' => 'Empecé a crear sitios web hace unos años en la escuela primaria. Desde entonces he cambiado muchas aficiones, entre ellas pintar o tocar el piano. En 2020, volví al desarrollo web a tiempo completo.',
    'workexp' => 'Experiencia laboral',
    'workexp_desc' => 'Todavía no tengo experiencia laboral, pero si estás interesado en que trabaje contigo en tu proyecto, puedes <b>contactar</b> conmigo.',
    'skills' => 'Habilidades',
    'frontend' => 'Interfaz',
    'backend' => 'Parte trasera',
);

/**
 * Sección "Mis Proyectos"
 */
$projects = array(
    'title' => 'Mis proyectos',
    'pnum' => 3,
    'info1' => '(He completado <span id="odometer" class="odometer">0</span> proyecto en total)',
    'info24' => '(He completado <span id="odometer" class="odometer">0</span> proyectos en total)',
    'info05' => '(He completado <span id="odometer" class="odometer">0</span> proyectos en total)',
    'project_title' => 'Nombre',
    'project_short_description' => 'Breve descripción',
    'project_published' => 'Publicado',
    'project_last_update' => 'Última actualización',
    'project_preview' => 'Avance',
    'project_used_technologies' => 'Tecnologías utilizadas',
    'project_status' => 'Estado',
    'projects' => array(
        array(
            'title' => 'Straty.cz',
            'description_short' => 'Portafolio',
            'description_long' => 'Portafolio para el youtuber checo y streamer de Twitch <b>Straty</b>',
            'used' => 'Bootstrap, HTML5, CSS3, FontAwesome',
            'status' => '<b class="text-danger">YA NO SE UTILIZA</b>',
            'published_in' => 'Desconocido cuando',
            'last_update' => 'No actualizado',
            'preview' => 'assets/img/projects/straty-cz.jpg'
        ),
        array(
            'title' => 'Czech-Play.eu',
            'description_short' => 'Sitio web de la comunidad',
            'description_long' => 'Sitio web de la comunidad para el servidor checo de Minecraft <b>Czech-Play.eu</b>',
            'used' => 'Bootstrap, HTML5, CSS3, JavaScript, PHP, MySQL',
            'status' => '<b class="text-danger">YA NO EXISTE</b>',
            'published_in' => 'Desconocido cuando',
            'last_update' => 'No actualizado',
            'preview' => 'assets/img/projects/placeholder_es.png'
        ),
        array(
            'title' => 'HopHub',
            'description_short' => 'Extensión del navegador',
            'description_long' => 'Una extensión del navegador que puede diseñar su página de GitHub para que se parezca a su sitio para adultos favorito',
            'used' => 'HTML5, CSS3, JavaScript, JSON',
            'status' => '<b class="text-success">DESCARGAR</b>&nbsp;<small>(<a href="https://github.com/ultronstudio/HopHub" target="_blank">aquí</a>)</small>',
            'published_in' => '7.3.2023',
            'last_update' => '6.4.2023',
            'preview' => 'assets/img/projects/hophub.png'
        ),
        array(
            'title' => 'Shadowless',
            'description_short' => 'Videojuego',
            'description_long' => 'Juego de terror psicologico',
            'used' => 'Unity',
            'status' => '<b class="text-warning">EN DESARROLLO</b>&nbsp;<small>(<a href="https://ultron01.ultronarmy.eu/shadowless" target="_blank">sitio web</a>)</small>',
            'published_in' => '11.3.2023',
            'last_update' => '<i>Datos no públicos</i>',
            'preview' => 'assets/img/shadowless/thumbnail.png'
        )
    )
);

/**
 * Sección "Contacto"
 */
$contact = array(
    'title' => 'Contacto',
    'description' => 'Si desea ponerse en contacto conmigo, utilice cualquier método del pie de página.'
);

/**
 * Mensajes a la consola
 */
$console = array(
    'stop' => "Atención!",
    'only_dev_func' => "Esta es una característica del navegador destinada a los desarrolladores. Si alguien te dijo que copiaras y pegaras algo aquí para habilitar la función secreta de este sitio o hackear la cuenta de alguien, es una estafa."
);