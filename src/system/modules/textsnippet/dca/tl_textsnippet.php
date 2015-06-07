<?php


$GLOBALS ['TL_DCA'] ['tl_textsnippet'] = array (

    // Config
    'config' => array (
        'dataContainer' => 'Table',
        'enableVersioning' => true,
        'switchToEdit' => true,
        'ptable' => 'tl_textsnippet_archive',
        'sql' => array (
            'keys' => array (
                'id' => 'primary',
                'pid' => 'index'
            )
        )
    ),

    // List
    'list' => array (
        'sorting' => array (
            'mode' => 1,
            'fields' => array (
                'title'
            ),
            'flag' => 1,
            'panelLayout' => 'filter;search,limit'
        ),
        'label' => array (
            'fields' => array (
                'title',
                'pid:tl_textsnippet_archive.identifier',
                'id'
            ),
            'format' => '%s<br>{{textsnippet::%s::%s}}'
        ),
        'global_operations' => array (
            'all' => array (
                'label' => &$GLOBALS ['TL_LANG'] ['MSC'] ['all'],
                'href' => 'act=select',
                'class' => 'header_edit_all',
                'attributes' => 'onclick="Backend.getScrollOffset()" accesskey="e"'
            )
        ),
        'operations' => array (
            'edit' => array (
                'label' => &$GLOBALS ['TL_LANG'] ['tl_textsnippet'] ['edit'],
                'href' => 'act=edit',
                'icon' => 'edit.gif'
            ),
            'copy' => array (
                'label' => &$GLOBALS ['TL_LANG'] ['tl_textsnippet'] ['copy'],
                'href' => 'act=copy',
                'icon' => 'copy.gif'
            ),
            'delete' => array (
                'label' => &$GLOBALS ['TL_LANG'] ['tl_textsnippet'] ['delete'],
                'href' => 'act=delete',
                'icon' => 'delete.gif',
                'attributes' => 'onclick="if(!confirm(\'' . $GLOBALS ['TL_LANG'] ['MSC'] ['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
            )
        )
    ),

    // Palettes
    'palettes' => array (
        'default' => '{title_legend},title,text'
    ),
    // Fields
    'fields' => array (
        'id' => array (
            'sql' => "int(10) unsigned NOT NULL auto_increment"
        ),
        'tstamp' => array (
            'sql' => "int(10) unsigned NOT NULL default '0'"
        ),
        'pid' => array (
            'sql' => "int(10) unsigned NOT NULL default '0'"
        ),
        'title' => array (
            'label' => &$GLOBALS ['TL_LANG'] ['tl_textsnippet'] ['title'],
            'exclude' => true,
            'search' => true,
            'inputType' => 'text',
            'eval' => array (
                'mandatory' => true,
                'maxlength' => 255
            ),
            'sql' => "varchar(255) NOT NULL default ''"
        ),
        'text' => array (
            'label' => &$GLOBALS ['TL_LANG'] ['tl_textsnippet'] ['text'],
            'exclude' => true,
            'search' => true,
            'inputType' => 'textarea',
            'eval' => array (
                'rte' => 'tinyMCE'
            ),
            'sql' => "text NULL"
        )
    )
);
