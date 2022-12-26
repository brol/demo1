<?php
# ***** BEGIN LICENSE BLOCK *****
#
#  	Demo#1
#  	Theme by Azork (http://xtradotfreedotfr.free.fr/blog/) and Pierre Van Glabeke
#   License : public domain
#
# ***** END LICENSE BLOCK *****
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
