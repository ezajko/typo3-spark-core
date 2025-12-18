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

$GLOBALS['TCA']['tt_content']['types']['listgroup'] = [
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
            tx_spark_items,
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
