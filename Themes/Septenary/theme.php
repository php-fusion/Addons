<?php
/*-------------------------------------------------------+
| PHPFusion Content Management System
| Copyright (C) PHP Fusion Inc
| https://phpfusion.com/
+--------------------------------------------------------+
| Filename: theme.php
| Author: PHPFusion Mods UK
| Developer & Designer: Craig, Chan
| Site: http://www.phpfusionmods.co.uk
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
defined('IN_FUSION') || exit;

const BOOTSTRAP = TRUE;
const FONTAWESOME = TRUE;

// Load Septenary Parts
include THEME."theme_autoloader.php";

// Factoring Septenary
$septenary = PHPFusion\SeptenaryTheme::Factory();

// Declare custom codes functions here
include THEME."templates/custom_news.php";

// Definition of Constant
const THEME_BULLET = "<img src='".THEME."images/bullet.png' class='bullet'  alt='&raquo;' />";

/**
 * Legacy Render Page Function
 */
function render_page() {
    \PHPFusion\SeptenaryTheme::Factory()->render_page();
}

/**
 * Legacy openside function
 *
 * @param bool|FALSE $title
 * @param string     $state
 */
function openside($title = FALSE, $state = 'ON') {
    \PHPFusion\SeptenaryTheme::openside($title, $state);
}

/**
 * Legacy closeside function
 */
function closeside() {
    \PHPFusion\SeptenaryTheme::closeside();
}

/**
 * Legacy opentable function
 *
 * @param bool|FALSE $title
 */
function opentable($title = FALSE) {
    \PHPFusion\SeptenaryTheme::opentable($title);
}

/**
 * Legacy closetable function
 */
function closetable() {
    \PHPFusion\SeptenaryTheme::closetable();
}
