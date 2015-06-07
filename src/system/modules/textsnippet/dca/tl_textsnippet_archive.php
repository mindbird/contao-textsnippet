<?php


$GLOBALS ['TL_DCA'] ['tl_textsnippet_archive'] = array (

    // Config
    'config' => array (
        'dataContainer' => 'Table',
        'enableVersioning' => true,
        'switchToEdit' => true,
        'ctable' => array('tl_textsnippet'),
        'sql' => array (
            'keys' => array (
                'id' => 'primary',
                'identifier' => 'unique'
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
                'title'
            ),
            'format' => '%s'
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
                'label' => &$GLOBALS ['TL_LANG'] ['tl_textsnippet_archive'] ['edit'],
                'href' => 'table=tl_textsnippet',
                'icon' => 'edit.gif'
            ),
            'editheader' => array (
                'label' => &$GLOBALS ['TL_LANG'] ['tl_textsnippet_archive'] ['editheader'],
                'href' => 'act=edit',
                'icon' => 'header.gif'
            ),
            'copy' => array (
                'label' => &$GLOBALS ['TL_LANG'] ['tl_textsnippet_archive'] ['copy'],
                'href' => 'act=copy',
                'icon' => 'copy.gif'
            ),
            'delete' => array (
                'label' => &$GLOBALS ['TL_LANG'] ['tl_textsnippet_archive'] ['delete'],
                'href' => 'act=delete',
                'icon' => 'delete.gif',
                'attributes' => 'onclick="if(!confirm(\'' . $GLOBALS ['TL_LANG'] ['MSC'] ['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
            )
        )
    ),

    // Palettes
    'palettes' => array (
        'default' => '{title_legend},title,identifier'
    ),
    // Fields
    'fields' => array (
        'id' => array (
            'sql' => "int(10) unsigned NOT NULL auto_increment"
        ),
        'tstamp' => array (
            'sql' => "int(10) unsigned NOT NULL default '0'"
        ),
        'title' => array (
            'label' => &$GLOBALS ['TL_LANG'] ['tl_textsnippet_archive'] ['title'],
            'exclude' => true,
            'search' => true,
            'inputType' => 'text',
            'eval' => array (
                'mandatory' => true,
                'maxlength' => 255
            ),
            'sql' => "varchar(255) NOT NULL default ''"
        ),
        'identifier' => array (
            'label' => &$GLOBALS ['TL_LANG'] ['tl_textsnippet_archive'] ['identifier'],
            'exclude' => true,
            'search' => true,
            'inputType' => 'text',
            'eval' => array (
                'mandatory' => true,
                'maxlength' => 5,
                'unique' => true
            ),
            'sql' => "varchar(5) NOT NULL default ''"
        )
    )
);
