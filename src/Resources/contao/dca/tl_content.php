<?php 

use Contao\CoreBundle\DataContainer\PaletteManipulator;
use Contao\DataContainer;
use Contao\System;

PaletteManipulator::create()
    ->addField('headline', 'type_legend', PaletteManipulator::POSITION_APPEND)

    ->addLegend('route_legend_content', 'headline', PaletteManipulator::POSITION_AFTER)

    
    ->addField('route_lat', 'route_legend_content', PaletteManipulator::POSITION_APPEND)
    ->addField('route_long', 'route_legend_content', PaletteManipulator::POSITION_APPEND)
    ->addField('route_start', 'route_legend_content', PaletteManipulator::POSITION_APPEND)
    ->addField('route_send', 'route_legend_content', PaletteManipulator::POSITION_APPEND)
    ->addField('route_info', 'route_legend_content', PaletteManipulator::POSITION_APPEND)

    ->addLegend('expert_legend', 'route_long', PaletteManipulator::POSITION_APPEND)
    ->addField('cssID', 'expert_legend', PaletteManipulator::POSITION_APPEND)
    
    ->addLegend('invisible_legend', 'expert_legend', PaletteManipulator::POSITION_APPEND)
    ->addField('invisible', 'invisible_legend', PaletteManipulator::POSITION_APPEND)
    ->addField('start', 'invisible', PaletteManipulator::POSITION_APPEND)
    ->addField('stop', 'start', PaletteManipulator::POSITION_APPEND)

    ->applyToPalette('default', 'tl_content')
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