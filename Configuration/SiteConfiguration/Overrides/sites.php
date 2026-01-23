<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || die();

(static function (): void {
    $ll = 'LLL:EXT:spark_core/Resources/Private/Language/locallang_db.xlf:';

    // -----------------------------------------------------------------------------------------------------------------
    // COLUMNS DEFINITION
    // -----------------------------------------------------------------------------------------------------------------

    // IDENTITY
    $GLOBALS['SiteConfiguration']['site']['columns']['institutionName'] = [
        'label' => $ll . 'site.configuration.institutionName',
        'config' => [
            'type' => 'input',
            'size' => 40,
        ],
    ];
    $GLOBALS['SiteConfiguration']['site']['columns']['parentInstitutionName'] = [
        'label' => $ll . 'site.configuration.parentInstitutionName',
        'config' => [
            'type' => 'input',
            'size' => 40,
        ],
    ];
    $GLOBALS['SiteConfiguration']['site']['columns']['address'] = [
        'label' => $ll . 'site.configuration.address',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
        ],
    ];
    $GLOBALS['SiteConfiguration']['site']['columns']['city'] = [
        'label' => $ll . 'site.configuration.city',
        'config' => [
            'type' => 'input',
            'size' => 40,
        ],
    ];
    $GLOBALS['SiteConfiguration']['site']['columns']['copyrightText'] = [
        'label' => $ll . 'site.configuration.copyrightText',
        'config' => [
            'type' => 'input',
            'size' => 40,
        ],
    ];
    $GLOBALS['SiteConfiguration']['site']['columns']['footerText'] = [
        'label' => $ll . 'site.configuration.footerText',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
        ],
    ];
    $GLOBALS['SiteConfiguration']['site']['columns']['email'] = [
        'label' => $ll . 'site.configuration.email',
        'config' => [
            'type' => 'input',
            'size' => 40,
        ],
    ];
    $GLOBALS['SiteConfiguration']['site']['columns']['phone'] = [
        'label' => $ll . 'site.configuration.phone',
        'config' => [
            'type' => 'input',
            'size' => 40,
        ],
    ];
    $GLOBALS['SiteConfiguration']['site']['columns']['fax'] = [
        'label' => $ll . 'site.configuration.fax',
        'config' => [
            'type' => 'input',
            'size' => 40,
        ],
    ];
    $GLOBALS['SiteConfiguration']['site']['columns']['web'] = [
        'label' => $ll . 'site.configuration.web',
        'config' => [
            'type' => 'input',
            'size' => 40,
        ],
    ];

    // LOGOS
    $logoConfig = [
        'type' => 'link',
        'allowedTypes' => ['file'],
    ];

    $GLOBALS['SiteConfiguration']['site']['columns']['logoMain'] = [
        'label' => $ll . 'site.configuration.logoMain',
        'config' => $logoConfig,
    ];
    $GLOBALS['SiteConfiguration']['site']['columns']['logoParent'] = [
        'label' => $ll . 'site.configuration.logoParent',
        'config' => $logoConfig,
    ];
    $GLOBALS['SiteConfiguration']['site']['columns']['logoMobile'] = [
        'label' => $ll . 'site.configuration.logoMobile',
        'config' => $logoConfig,
    ];
    $GLOBALS['SiteConfiguration']['site']['columns']['logoSmall'] = [
        'label' => $ll . 'site.configuration.logoSmall',
        'config' => $logoConfig,
    ];

    // SOCIAL MEDIA
    $socialConfig = [
        'type' => 'link',
        'allowedTypes' => ['url'],
    ];

    $GLOBALS['SiteConfiguration']['site']['columns']['socialFacebook'] = [
        'label' => $ll . 'site.configuration.socialFacebook',
        'config' => $socialConfig,
    ];
    $GLOBALS['SiteConfiguration']['site']['columns']['socialInstagram'] = [
        'label' => $ll . 'site.configuration.socialInstagram',
        'config' => $socialConfig,
    ];
    $GLOBALS['SiteConfiguration']['site']['columns']['socialX'] = [
        'label' => $ll . 'site.configuration.socialX',
        'config' => $socialConfig,
    ];
    $GLOBALS['SiteConfiguration']['site']['columns']['socialLinkedin'] = [
        'label' => $ll . 'site.configuration.socialLinkedin',
        'config' => $socialConfig,
    ];
    $GLOBALS['SiteConfiguration']['site']['columns']['socialYoutube'] = [
        'label' => $ll . 'site.configuration.socialYoutube',
        'config' => $socialConfig,
    ];

    // PIDS (Links)
    $pidConfig = [
        'type' => 'link',
        'allowedTypes' => ['page', 'url'],
        'default' => '#',
    ];

    $GLOBALS['SiteConfiguration']['site']['columns']['pidCorruption'] = [
        'label' => $ll . 'site.configuration.pidCorruption',
        'config' => $pidConfig,
    ];
    $GLOBALS['SiteConfiguration']['site']['columns']['pidPrivacy'] = [
        'label' => $ll . 'site.configuration.pidPrivacy',
        'config' => $pidConfig,
    ];
    $GLOBALS['SiteConfiguration']['site']['columns']['pidTerms'] = [
        'label' => $ll . 'site.configuration.pidTerms',
        'config' => $pidConfig,
    ];
    $GLOBALS['SiteConfiguration']['site']['columns']['pidAccessibility'] = [
        'label' => $ll . 'site.configuration.pidAccessibility',
        'config' => $pidConfig,
    ];

    // PIDS (Storage / Menus - Integers)
    $menuPidConfig = [
        'type' => 'number',
        'default' => 0,
    ];

    $GLOBALS['SiteConfiguration']['site']['columns']['pidMainMenu'] = [
        'label' => 'Main Menu Root Page', // TODO: Add to locallang
        'config' => $menuPidConfig,
    ];
    $GLOBALS['SiteConfiguration']['site']['columns']['pidFooterMenu'] = [
        'label' => 'Footer Menu Root Page',
        'config' => $menuPidConfig,
    ];
    $GLOBALS['SiteConfiguration']['site']['columns']['pidSlimMenu'] = [
        'label' => 'Slim Menu Root Page',
        'config' => $menuPidConfig,
    ];

    // -----------------------------------------------------------------------------------------------------------------
    // PALETTES & TABS (SITE)
    // -----------------------------------------------------------------------------------------------------------------

    $GLOBALS['SiteConfiguration']['site']['palettes']['sparkIdentity'] = [
        'showitem' => 'institutionName, --linebreak--, parentInstitutionName, --linebreak--, address, --linebreak--, city, --linebreak--, copyrightText, --linebreak--, footerText, --linebreak--, email, phone, fax, web',
    ];
    $GLOBALS['SiteConfiguration']['site']['palettes']['sparkLogos'] = [
        'showitem' => 'logoParent, --linebreak--, logoMain, --linebreak--, logoMobile, --linebreak--, logoSmall',
    ];
    $GLOBALS['SiteConfiguration']['site']['palettes']['sparkPids'] = [
        'showitem' => 'pidMainMenu, pidFooterMenu, pidSlimMenu, --linebreak--, pidCorruption, pidPrivacy, pidTerms, pidAccessibility',
    ];
    $GLOBALS['SiteConfiguration']['site']['palettes']['sparkSocial'] = [
        'showitem' => 'socialFacebook, socialInstagram, socialX, socialLinkedin, socialYoutube',
    ];

    $GLOBALS['SiteConfiguration']['site']['types']['0']['showitem'] .= '
        ,--div--;' . $ll . 'site.configuration.tab.identity, --palette--;;sparkIdentity
        ,--div--;' . $ll . 'site.configuration.tab.logos, --palette--;;sparkLogos
        ,--div--;' . $ll . 'site.configuration.tab.pids, --palette--;;sparkPids
        ,--div--;' . $ll . 'site.configuration.tab.social, --palette--;;sparkSocial
    ';

})();


// -----------------------------------------------------------------------------------------------------------------
// LOCALIZATION (SITE LANGUAGE)
// -----------------------------------------------------------------------------------------------------------------

(static function (): void {
    $ll = 'LLL:EXT:spark_core/Resources/Private/Language/locallang_db.xlf:';

    // List of keys that should be localizable
    $localizableKeys = [
        'institutionName',
        'parentInstitutionName',
        'address',
        'city',
        'copyrightText',
        'footerText',
        'email',
        'phone',
        'fax',
        'web',
        'logoParent',
        'logoMain',
        'logoMobile',
        'logoSmall',
        'pidCorruption',
        'pidPrivacy',
        'pidTerms',
        'pidAccessibility',
        'pidMainMenu',
        'pidFooterMenu',
        'pidSlimMenu',
        'socialFacebook',
        'socialInstagram',
        'socialX',
        'socialLinkedin',
        'socialYoutube',
    ];

    // Copy properties from 'site' to 'site_language'
    foreach ($localizableKeys as $key) {
        if (isset($GLOBALS['SiteConfiguration']['site']['columns'][$key])) {
            $GLOBALS['SiteConfiguration']['site_language']['columns'][$key] = $GLOBALS['SiteConfiguration']['site']['columns'][$key];
        } else {
            // Check global or just skip/warn
            // In a valid setup this should be fine as we just added them above.
        }
    }

    // Add palettes to site_language
    $GLOBALS['SiteConfiguration']['site_language']['palettes']['sparkIdentityLocalized'] = [
        'label' => $ll . 'site.configuration.palette.identity_localized',
        'showitem' => 'institutionName, --linebreak--, parentInstitutionName, --linebreak--, address, --linebreak--, city, --linebreak--, copyrightText, --linebreak--, footerText, --linebreak--, email, phone, fax, web',
    ];

    $GLOBALS['SiteConfiguration']['site_language']['palettes']['sparkLogosLocalized'] = [
        'label' => $ll . 'site.configuration.palette.logos_localized',
        'showitem' => 'logoParent, --linebreak--, logoMain, --linebreak--, logoMobile, --linebreak--, logoSmall',
    ];

    $GLOBALS['SiteConfiguration']['site_language']['palettes']['sparkPidsLocalized'] = [
        'label' => $ll . 'site.configuration.palette.pids_localized',
        'showitem' => 'pidMainMenu, pidFooterMenu, pidSlimMenu, --linebreak--, pidCorruption, pidPrivacy, pidTerms, pidAccessibility',
    ];

    $GLOBALS['SiteConfiguration']['site_language']['palettes']['sparkSocialLocalized'] = [
        'label' => $ll . 'site.configuration.palette.social_localized',
        'showitem' => 'socialFacebook, socialInstagram, socialX, socialLinkedin, socialYoutube',
    ];

    // Add tabs to site_language type definition
    // We append them to the existing tabs
    $GLOBALS['SiteConfiguration']['site_language']['types']['1']['showitem'] .= '
        ,--div--;' . $ll . 'site.configuration.tab.identity, --palette--;;sparkIdentityLocalized
        ,--div--;' . $ll . 'site.configuration.tab.logos, --palette--;;sparkLogosLocalized
        ,--div--;' . $ll . 'site.configuration.tab.pids, --palette--;;sparkPidsLocalized
        ,--div--;' . $ll . 'site.configuration.tab.social, --palette--;;sparkSocialLocalized
    ';
})();
