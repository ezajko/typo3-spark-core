<?php

return [
    'ctrl' => [
        'title' => 'List Group Item',
        'label' => 'header',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'header,bodytext',
        'type' => 'item_type',
        'sortby' => 'sorting',
    ],
    'types' => [
        'default' => [
            'showitem' => '
                --div--;General,
                    item_type,
                    header,
                    bodytext,
                    link,
                --div--;Access,
                    --palette--;;hidden,
                    --palette--;;access,
            ',
        ],
        'icon' => [
            'showitem' => '
                --div--;General,
                    item_type,
                    header,
                    icon,
                    link,
                --div--;Access,
                    --palette--;;hidden,
                    --palette--;;access,
            ',
        ],
        'image' => [
            'showitem' => '
                --div--;General,
                    item_type,
                    header,
                    bodytext,
                    image,
                    link,
                --div--;Access,
                    --palette--;;hidden,
                    --palette--;;access,
            ',
        ],
        'contact' => [
            'showitem' => '
                --div--;General,
                    item_type,
                    contact_type,
                    bodytext,
                    link,
                --div--;Access,
                    --palette--;;hidden,
                    --palette--;;access,
            ',
        ],
        'file' => [
             'showitem' => '
                --div--;General,
                    item_type,
                    header,
                    file_reference,
                    link,
                --div--;Access,
                    --palette--;;hidden,
                    --palette--;;access,
            ',
        ]
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['label' => '', 'value' => 0],
                ],
                'foreign_table' => 'tx_spark_listitem',
                'foreign_table_where' => 'AND tx_spark_listitem.pid=###CURRENT_PID### AND tx_spark_listitem.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.enabled',
                    ],
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'datetime',
                'default' => 0,
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => 2147483647,
                ],
            ],
        ],
        'tt_content' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'item_type' => [
            'exclude' => true,
            'label' => 'Item Type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['label' => 'Simple List Item', 'value' => 'default'],
                    ['label' => 'Icon Item', 'value' => 'icon'],
                    ['label' => 'Image Item', 'value' => 'image'],
                    ['label' => 'Contact Item', 'value' => 'contact'],
                    ['label' => 'File Item', 'value' => 'file'],
                ],
                'default' => 'default',
            ],
        ],
        'header' => [
            'exclude' => true,
            'label' => 'Title / Label',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
            ],
        ],
        'bodytext' => [
            'exclude' => true,
            'label' => 'Description / Value',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 3,
                'eval' => 'trim',
            ],
        ],
        'icon' => [
            'exclude' => true,
            'label' => 'Bootstrap Icon Class (e.g. bi-star-fill)',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
            ],
        ],
        'link' => [
             'exclude' => true,
             'label' => 'Link',
             'config' => [
                 'type' => 'link',
                 'allowedTypes' => ['page', 'url', 'file', 'email', 'folder'],
             ]
        ],
        'contact_type' => [
            'exclude' => true,
            'label' => 'Contact Type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['label' => 'Email', 'value' => 'email'],
                    ['label' => 'Phone', 'value' => 'phone'],
                    ['label' => 'Address', 'value' => 'address'],
                    ['label' => 'Website', 'value' => 'website'],
                ],
            ],
        ],
        'image' => [
            'exclude' => true,
            'label' => 'Image',
            'config' => [
                'type' => 'file',
                'maxitems' => 1,
                'allowed' => 'common-image-types',
            ],
        ],
        'file_reference' => [
            'exclude' => true,
            'label' => 'File',
            'config' => [
                'type' => 'file',
                'maxitems' => 1,
            ],
        ],
    ],
];
