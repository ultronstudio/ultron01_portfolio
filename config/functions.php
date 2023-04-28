<?php
require_once __DIR__ . '/config.php';

/**
 * Vytvoří odkaz a přidá do něj kód jazyka a cílovou stránku
 * @param string $lang Kód jazyka (pomocí tohoto kódu se načítají překlady), výchozím jazykem je angličtina
 * @param string $page Cílová stránka (udává, kam má odkaz směřovat), výchozí stránkou je stránka "Domů"
 * @return string Vrátí kompletní URL adresu
 */
function CreateLink($lang = "en", $page = "home") {
    return BASE_URL . "/?page=$page&lang=$lang";
}