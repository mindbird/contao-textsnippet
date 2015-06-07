<?php

$GLOBALS ['BE_MOD'] ['content'] ['textsnippet'] = array(
    'tables' => array(
        'tl_textsnippet_archive',
        'tl_textsnippet',
    ),
    'icon' => 'system/modules/textsnippet/assets/images/icon.png'
);

$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('Textsnippet\Textsnippet', 'replaceInsertTag');