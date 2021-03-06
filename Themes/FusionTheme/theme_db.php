<?php
/*-------------------------------------------------------+
| PHPFusion Content Management System
| Copyright (C) PHP Fusion Inc
| https://phpfusion.com/
+--------------------------------------------------------+
| Filename: theme_db.php
| Author: PHP Fusion Inc
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
$theme_folder = 'FusionTheme';
$theme_title = 'FusionTheme';
$theme_screenshot = 'screenshot.png';
$theme_author = 'PHP Fusion Inc';
$theme_web = 'https://phpfusion.com';
$theme_license = 'AGPL3';
$theme_version = '1.5.2';
$theme_description = 'Official theme release for PHPFusion 9 RC5';

$theme_insertdbrow[] = DB_SETTINGS_THEME." (settings_name, settings_value, settings_theme) VALUES ('theme_pack', 'Nebula', '".$theme_folder."')";
$theme_deldbrow[] = DB_SETTINGS_THEME." WHERE settings_theme='".$theme_folder."'";
