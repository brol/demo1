<?php
/**
 * @brief Demo#1, a theme for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Theme
 *
 * @author Azork (http://xtradotfreedotfr.free.fr/blog/), Pierre Van Glabeke
 *
 * @copyright public domain
 */

if (!defined('DC_RC_PATH')) {
    return;
}
$this->registerModule(
    'Demo#1',
    'Un thème avec des onglets et 3 volets de widgets',
    'Azork, Pierre Van Glabeke',
    '1.8',
    [
        'requires' => [['core', '2.24']],
        'type'     => 'theme',
        'tplset'   => 'mustek',
    ]
);
