<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Textsnippet',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Textsnippet\Textsnippet'        => 'system/modules/textsnippet/classes/Textsnippet.php',

	// Models
	'Contao\TextsnippetArchiveModel' => 'system/modules/textsnippet/models/TextsnippetArchiveModel.php',
	'Contao\TextsnippetModel'        => 'system/modules/textsnippet/models/TextsnippetModel.php',
));
