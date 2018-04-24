<?php

$GLOBALS ['BE_MOD'] ['content'] ['textsnippet'] = array(
    'tables' => array(
        'tl_textsnippet_archive',
        'tl_textsnippet',
    ),
    'icon' => 'system/modules/textsnippet/assets/images/icon.png'
);

$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array(
    'Mindbird\Contao\Textsnippet\Modules\Textsnippet',
    'replaceInsertTag'
);

$GLOBALS['TL_MODELS']['tl_textsnippet'] = 'Mindbird\Contao\Textsnippet\Models\Textsnippet';
$GLOBALS['TL_MODELS']['tl_textsnippet_archive'] = 'Mindbird\Contao\Textsnippet\Models\TextsnippetArchive';