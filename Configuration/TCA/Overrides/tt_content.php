<?php

defined('TYPO3') or die();

// Add frame_layout, debug field, header_class, subheader_class
$temporaryColumns = [
    'frame_layout' => [
        'exclude' => true,
        'label' => 'Layout (Container)',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['label' => 'Default (Container)', 'value' => 'default'],
                ['label' => 'Small (container-sm)', 'value' => 'sm'],
                ['label' => 'Medium (container-md)', 'value' => 'md'],
                ['label' => 'Large (container-lg)', 'value' => 'lg'],
                ['label' => 'Extra Large (container-xl)', 'value' => 'xl'],
                ['label' => 'Extra Extra Large (container-xxl)', 'value' => 'xxl'],
                ['label' => 'Full Width (container-fluid)', 'value' => 'fluid'],
                ['label' => 'No Container', 'value' => 'none'],
            ],
            'default' => 'default',
        ],
    ],
    'tx_spark_debug' => [
        'exclude' => true,
        'label' => 'Debug Frame Content',
        'config' => [
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => [
                [
                    'label' => 'Enable Debug Output',
                ],
            ],
        ],
    ],
    'header_class' => [
        'exclude' => true,
        'label' => 'Header Class (Visual Level)',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['label' => 'Default', 'value' => ''],
                ['label' => 'Header 1 (h1)', 'value' => 'h1'],
                ['label' => 'Header 2 (h2)', 'value' => 'h2'],
                ['label' => 'Header 3 (h3)', 'value' => 'h3'],
                ['label' => 'Header 4 (h4)', 'value' => 'h4'],
                ['label' => 'Header 5 (h5)', 'value' => 'h5'],
            ],
        ],
    ],
    'subheader_class' => [
        'exclude' => true,
        'label' => 'Subheader Class (Visual Level)',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['label' => 'Default', 'value' => ''],
                ['label' => 'Header 1 (h1)', 'value' => 'h1'],
                ['label' => 'Header 2 (h2)', 'value' => 'h2'],
                ['label' => 'Header 3 (h3)', 'value' => 'h3'],
                ['label' => 'Header 4 (h4)', 'value' => 'h4'],
                ['label' => 'Header 5 (h5)', 'value' => 'h5'],
                ['label' => 'Lead (lead)', 'value' => 'lead'],
            ],
        ],
    ],
    'tx_spark_items' => [
        'exclude' => true,
        'label' => 'List Items',
        'config' => [
            'type' => 'inline',
            'foreign_table' => 'tx_spark_listitem',
            'foreign_field' => 'tt_content',
            'foreign_sortby' => 'sorting',
            'maxitems' => 99,
            'appearance' => [
                'collapseAll' => true,
                'expandSingle' => true,
                'levelLinksPosition' => 'bottom',
                'useSortable' => true,
                'showPossibleLocalizationRecords' => true,
                'showRemovedLocalizationRecords' => true,
                'showAllLocalizationLink' => true,
                'showSynchronizationLink' => true,
                'enabledControls' => [
                    'info' => false,
                ],
            ],
        ],
    ],
    'tx_spark_card_header' => [
        'exclude' => true,
        'label' => 'Card Header',
        'config' => [
            'type' => 'input',
            'eval' => 'trim',
        ],
    ],
    'tx_spark_card_footer' => [
        'exclude' => true,
        'label' => 'Card Footer',
        'config' => [
            'type' => 'input',
            'eval' => 'trim',
        ],
    ],
    'tx_spark_height' => [
        'exclude' => true,
        'label' => 'Height',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['label' => 'Auto', 'value' => 'auto'],
                ['label' => 'Extra Small (xs)', 'value' => 'xs'],
                ['label' => 'Small (sm)', 'value' => 'sm'],
                ['label' => 'Medium (md)', 'value' => 'md'],
                ['label' => 'Large (lg)', 'value' => 'lg'],
                ['label' => 'Extra Large (xl)', 'value' => 'xl'],
                ['label' => 'Full Screen', 'value' => 'full'],
            ],
            'default' => 'auto',
        ],
    ],
    'tx_spark_variant' => [
        'exclude' => true,
        'label' => 'Variant / Color Theme',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['label' => 'Light', 'value' => 'light'],
                ['label' => 'Primary', 'value' => 'primary'],
                ['label' => 'Dark', 'value' => 'dark'],
            ],
            'default' => 'light',
        ],
    ],
    'tx_spark_alignment' => [
        'exclude' => true,
        'label' => 'Alignment',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['label' => 'Start (Left)', 'value' => 'start'],
                ['label' => 'Center', 'value' => 'center'],
                ['label' => 'End (Right)', 'value' => 'end'],
            ],
            'default' => 'start',
        ],
    ],
    'tx_spark_icon' => [
        'exclude' => true,
        'label' => 'Icon Class (Bootstrap Icons)',
        'config' => [
            'type' => 'input',
            'eval' => 'trim',
        ],
    ],
    'tx_spark_button_text' => [
        'exclude' => true,
        'label' => 'Button Text',
        'config' => [
            'type' => 'input',
            'eval' => 'trim',
        ],
    ],
    'tx_spark_overlay' => [
        'exclude' => true,
        'label' => 'Enable Overlay',
        'config' => [
            'type' => 'check',
            'renderType' => 'checkboxToggle',
        ],
    ],
    'tx_spark_orientation' => [
        'exclude' => true,
        'label' => 'Orientation',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['label' => 'Vertical (Default)', 'value' => 'vertical'],
                ['label' => 'Horizontal', 'value' => 'horizontal'],
            ],
            'default' => 'vertical',
        ],
    ],
];

// Content Element: List Group
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'label' => 'List Group',
        'value' => 'listgroup',
        'icon' => 'content-bullets',
        'group' => 'common',
    ]
);

// Content Element: CTA
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'label' => 'Call to Action (CTA)',
        'value' => 'cta',
        'icon' => 'content-special-html', 
        'group' => 'common',
    ]
);

// Content Element: Hero
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'label' => 'Hero Banner',
        'value' => 'hero',
        'icon' => 'content-image', 
        'group' => 'common',
    ]
);

// Content Element: Card
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'label' => 'Card',
        'value' => 'card',
        'icon' => 'content-textpic', 
        'group' => 'common',
    ]
);

$GLOBALS['TCA']['tt_content']['types']['listgroup'] = [
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
            tx_spark_card_header,
            tx_spark_items,
            tx_spark_card_footer,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
    ',
];

$GLOBALS['TCA']['tt_content']['types']['cta'] = [
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
            bodytext;Description,
            tx_spark_button_text,
            header_link;Button Link,
            tx_spark_icon,
            tx_spark_variant,
            tx_spark_height,
            tx_spark_alignment,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
    ',
];

$GLOBALS['TCA']['tt_content']['types']['hero'] = [
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
            bodytext;Content,
            image,
            tx_spark_height,
            tx_spark_overlay,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
    ',
];

$GLOBALS['TCA']['tt_content']['types']['card'] = [
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
            tx_spark_card_header,
            tx_spark_orientation,
            image,
            tx_spark_icon,
            bodytext;Body Text,
            tx_spark_items,
            tx_spark_card_footer,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
    ',
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $temporaryColumns);

// Update Palette: Headers
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'headers',
    'header_class',
    'after:header_layout'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'headers',
    'subheader_class',
    'after:subheader'
);

// Update Palette: Frames
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'frames',
    'frame_layout, --linebreak--, tx_spark_debug',
    'after:frame_class'
);
