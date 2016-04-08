<?php
# ***** BEGIN LICENSE BLOCK *****
#
#  	Demo#1
#  	Theme by Azork (http://xtradotfreedotfr.free.fr/blog/) and Pierre Van Glabeke
#   License : public domain
#
# ***** END LICENSE BLOCK *****
if (!defined('DC_RC_PATH')) { return; }

$this->registerModule(
	/* Name */			   "Demo#1",
	/* Description*/	 "Un thème avec des onglets et 3 volets de widgets",
	/* Author */		   "Azork, Pierre Van Glabeke",
	/* Version */		   "1.6",
	array(
		'type'		=>		'theme',
		'tplset' => 'mustek',
		'dc_min' => '2.9'
	)
);