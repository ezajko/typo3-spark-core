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
$GLOBALS['TCA']['tt_content']['palettes']['headers']['showitem'] = '
    header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel,
    --linebreak--,
    subheader;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:subheader_formlabel,
';

// Register Card Group Container
if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('container')) {
    $containerRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class);

    // Card Group
    $containerRegistry->configureContainer(
        (
            new \B13\Container\Tca\ContainerConfiguration(
                'card_group',
                'Card Group',
                'Groups cards together with equal height and spacing.',
                [
                    [
                        ['name' => 'Cards', 'colPos' => 200, 'allowed' => ['CType' => 'card']]
                    ]
                ]
            )
        )
            ->setIcon('content-container-columns-3')
    );

    // 2 Columns (50/50)
    $containerRegistry->configureContainer(
        (
            new \B13\Container\Tca\ContainerConfiguration(
                'container_2_columns',
                '2 Columns',
                '50% / 50%',
                [
                    [
                        ['name' => 'Left', 'colPos' => 201],
                        ['name' => 'Right', 'colPos' => 202],
                    ]
                ]
            )
        )
            ->setIcon('content-container-columns-2')
    );

    // 2 Columns Right (33/66)
    $containerRegistry->configureContainer(
        (
            new \B13\Container\Tca\ContainerConfiguration(
                'container_2_columns_right',
                '2 Columns Right',
                '33% / 66%',
                [
                    [
                        ['name' => 'Left', 'colPos' => 201, 'colspan' => 1],
                        ['name' => 'Right', 'colPos' => 202, 'colspan' => 2],
                    ]
                ]
            )
        )
            ->setIcon('content-container-columns-2')
    );

    // 2 Columns Left (66/33)
    $containerRegistry->configureContainer(
        (
            new \B13\Container\Tca\ContainerConfiguration(
                'container_2_columns_left',
                '2 Columns Left',
                '66% / 33%',
                [
                    [
                        ['name' => 'Left', 'colPos' => 201, 'colspan' => 2],
                        ['name' => 'Right', 'colPos' => 202, 'colspan' => 1],
                    ]
                ]
            )
        )
            ->setIcon('content-container-columns-2')
    );

    // 2 Columns (25/75)
    $containerRegistry->configureContainer(
        (
            new \B13\Container\Tca\ContainerConfiguration(
                'container_2_columns_25_75',
                '2 Columns (25% / 75%)',
                '25% / 75%',
                [
                    [
                        ['name' => 'Left', 'colPos' => 201, 'colspan' => 1],
                        ['name' => 'Right', 'colPos' => 202, 'colspan' => 3],
                    ]
                ]
            )
        )
            ->setIcon('content-container-columns-2')
    );

    // 2 Columns (75/25)
    $containerRegistry->configureContainer(
        (
            new \B13\Container\Tca\ContainerConfiguration(
                'container_2_columns_75_25',
                '2 Columns (75% / 25%)',
                '75% / 25%',
                [
                    [
                        ['name' => 'Left', 'colPos' => 201, 'colspan' => 3],
                        ['name' => 'Right', 'colPos' => 202, 'colspan' => 1],
                    ]
                ]
            )
        )
            ->setIcon('content-container-columns-2')
    );

    // 3 Columns (33/33/33)
    $containerRegistry->configureContainer(
        (
            new \B13\Container\Tca\ContainerConfiguration(
                'container_3_columns',
                '3 Columns',
                '33% / 33% / 33%',
                [
                    [
                        ['name' => 'Left', 'colPos' => 201],
                        ['name' => 'Middle', 'colPos' => 202],
                        ['name' => 'Right', 'colPos' => 203],
                    ]
                ]
            )
        )
            ->setIcon('content-container-columns-3')
    );

    // 3 Columns Left (50/25/25)
    $containerRegistry->configureContainer(
        (
            new \B13\Container\Tca\ContainerConfiguration(
                'container_3_columns_left',
                '3 Columns Left',
                '50% / 25% / 25%',
                [
                    [
                        ['name' => 'Left', 'colPos' => 201, 'colspan' => 2],
                        ['name' => 'Middle', 'colPos' => 202, 'colspan' => 1],
                        ['name' => 'Right', 'colPos' => 203, 'colspan' => 1],
                    ]
                ]
            )
        )
            ->setIcon('content-container-columns-3')
    );

    // 3 Columns Right (25/25/50)
    $containerRegistry->configureContainer(
        (
            new \B13\Container\Tca\ContainerConfiguration(
                'container_3_columns_right',
                '3 Columns Right',
                '25% / 25% / 50%',
                [
                    [
                        ['name' => 'Left', 'colPos' => 201, 'colspan' => 1],
                        ['name' => 'Middle', 'colPos' => 202, 'colspan' => 1],
                        ['name' => 'Right', 'colPos' => 203, 'colspan' => 2],
                    ]
                ]
            )
        )
            ->setIcon('content-container-columns-3')
    );

    // 3 Columns Middle (25/50/25)
    $containerRegistry->configureContainer(
        (
            new \B13\Container\Tca\ContainerConfiguration(
                'container_3_columns_middle',
                '3 Columns Middle',
                '25% / 50% / 25%',
                [
                    [
                        ['name' => 'Left', 'colPos' => 201, 'colspan' => 1],
                        ['name' => 'Middle', 'colPos' => 202, 'colspan' => 2],
                        ['name' => 'Right', 'colPos' => 203, 'colspan' => 1],
                    ]
                ]
            )
        )
            ->setIcon('content-container-columns-3')
    );

    // 4 Columns (25/25/25/25)
    $containerRegistry->configureContainer(
        (
            new \B13\Container\Tca\ContainerConfiguration(
                'container_4_columns',
                '4 Columns',
                '25% / 25% / 25% / 25%',
                [
                    [
                        ['name' => 'Left', 'colPos' => 201],
                        ['name' => 'Middle Left', 'colPos' => 202],
                        ['name' => 'Middle Right', 'colPos' => 203],
                        ['name' => 'Right', 'colPos' => 204],
                    ]
                ]
            )
        )
            ->setIcon('content-container-columns-4')
    );

    // Accordion
    $containerRegistry->configureContainer(
        (
            new \B13\Container\Tca\ContainerConfiguration(
                'accordion',
                'Accordion',
                'Accordion Group',
                [
                    [
                        ['name' => 'Accordion Items', 'colPos' => 200, 'allowed' => ['CType' => 'accordion_item']]
                    ]
                ]
            )
        )
            ->setIcon('content-bootstrappackage-accordion')
    );

    // Accordion Item
    $containerRegistry->configureContainer(
        (
            new \B13\Container\Tca\ContainerConfiguration(
                'accordion_item',
                'Accordion Item',
                'Single Accordion Panel',
                [
                    [
                        ['name' => 'Content', 'colPos' => 201]
                    ]
                ]
            )
        )
            ->setIcon('content-bootstrappackage-accordion-item')
    );

    // Tabs
    $containerRegistry->configureContainer(
        (
            new \B13\Container\Tca\ContainerConfiguration(
                'tab',
                'Tabs',
                'Tab Group',
                [
                    [
                        ['name' => 'Tab Items', 'colPos' => 200, 'allowed' => ['CType' => 'tab_item']]
                    ]
                ]
            )
        )
            ->setIcon('content-bootstrappackage-tab')
    );

    // Tab Item
    $containerRegistry->configureContainer(
        (
            new \B13\Container\Tca\ContainerConfiguration(
                'tab_item',
                'Tab Item',
                'Single Tab Panel',
                [
                    [
                        ['name' => 'Content', 'colPos' => 201]
                    ]
                ]
            )
        )
            ->setIcon('content-bootstrappackage-tab-item')
    );
}

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
