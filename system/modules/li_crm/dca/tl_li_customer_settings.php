<?php

/**
 * @copyright  Liplex Webprogrammierung und -design Christian Kolb 2011
 * @author     Christian Kolb <info@liplex.de>
 * @license    MIT (see /LICENSE.txt for further information)
 */

/**
 * Settings - Customer settings
 */
$GLOBALS['TL_DCA']['tl_li_customer_settings'] = array
(
	// Config
	'config' => array
	(
	    'dataContainer'             => 'File',
		'closed'					=> true
	),

	// Palettes
	'palettes' => array
	(
		'default'                   => '{customer_number_legend},li_crm_customer_number_generation, li_crm_customer_number_generation_start;'
	),

	// Fields
	'fields' => array
	(
		'li_crm_customer_number_generation' => array
		(
			'label'                 => &$GLOBALS['TL_LANG']['tl_li_customer_settings']['li_crm_customer_number_generation'],
			'inputType'             => 'text',
			'exclude'   			=> true,
			'eval'                  => array('tl_class'=>'long')
		),
		'li_crm_customer_number_generation_start' => array
		(
			'label'                 => &$GLOBALS['TL_LANG']['tl_li_customer_settings']['li_crm_customer_number_generation_start'],
			'inputType'             => 'text',
			'exclude'   			=> true,
			'eval'                  => array('tl_class'=>'clr', 'rgxp'=>'digit')
		)
	)
);
