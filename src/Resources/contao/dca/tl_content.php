<?php 

use Berecont\ContaoRouteBundle\Controller\ContentElement\RouteElementController;
use Contao\DataContainer;
use Contao\System;

$GLOBALS['TL_DCA']['tl_content']['palettes']['route_element'] = 
    '{type_legend},type,headline;{route_legend_content},route_lat,route_long,route_start,route_send,route_info;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop'
;

$GLOBALS['TL_DCA']['tl_content']['fields']['route_lat'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['route_lat'],
    'inputType' => 'text',
    'eval'      => ['mandatory' => true, 'tl_class' => 'w50'],
    'sql'       => "char(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_content']['fields']['route_long'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['route_long'],
    'inputType' => 'text',
    'eval'      => ['mandatory' => true, 'tl_class' => 'w50'],
    'sql'       => "char(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_content']['fields']['route_start'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['route_start'],
    'inputType' => 'text',
    'eval'      => ['tl_class' => 'w33'],
    'sql'       => "char(255) NOT NULL default 'Meine Startadresse:'",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['route_send'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['route_send'],
    'inputType' => 'text',
    'eval'      => ['tl_class' => 'w33'],
    'sql'       => "char(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_content']['fields']['route_info'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['route_info'],
    'inputType' => 'text',
    'eval'      => ['tl_class' => 'w33'],
    'sql'       => "char(255) NOT NULL default 'Sie werden zu OpenStreetMap weitergeleitet'",
];