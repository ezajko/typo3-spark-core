<?php

/*
 * This file is part of the "Spark Core" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

declare(strict_types=1);

namespace EtfUnsa\SparkCore\Service;

use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;
use TYPO3\CMS\Core\Context\Context;
use TYPO3\CMS\Core\Context\UserAspect;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class BackendPermissionService
{
    protected Context $context;
    protected ExtensionConfiguration $extensionConfiguration;

    public function __construct(
        Context $context,
        ExtensionConfiguration $extensionConfiguration
    ) {
        $this->context = $context;
        $this->extensionConfiguration = $extensionConfiguration;
    }

    /**
     * Checks if the current BE user has permission based on a configuration key
     * The configuration key should point to a comma-separated list of group UIDs in EXT:spark_academics configuration
     *
     * @param string $configKey The key in ExtensionConfiguration (e.g. 'spark_perm_org_groups')
     * @param string $extensionName Default to 'spark_academics'
     * @return bool
     */
    public function hasPermission(string $configKey, string $extensionName = 'spark_academics'): bool
    {
        /** @var UserAspect $userAspect */
        $userAspect = $this->context->getAspect('backend.user');

        if ($userAspect->isAdmin()) {
            return true;
        }

        try {
            $config = $this->extensionConfiguration->get($extensionName);
            if (!isset($config[$configKey])) {
                return false;
            }

            $allowedGroupUids = GeneralUtility::intExplode(',', $config[$configKey], true);
            $userGroupUids = $userAspect->getGroupIds();

            foreach ($allowedGroupUids as $allowedUid) {
                if (in_array($allowedUid, $userGroupUids, true)) {
                    return true;
                }
            }
        } catch (\Exception $e) {
            // Log error or return false
            return false;
        }

        return false;
    }
}
