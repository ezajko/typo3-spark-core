<?php

defined('TYPO3') or die();

// Add frame_layout field
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
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $temporaryColumns);

// Add frame_layout to appearance palette
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'frames',
    'frame_layout',
    'after:frame_class'
);

// Customize space_before_class and space_after_class items if needed via PageTS
// but we ensure they are in the palette
