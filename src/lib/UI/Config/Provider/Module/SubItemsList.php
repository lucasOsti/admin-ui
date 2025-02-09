<?php

/**
 * @copyright Copyright (C) Ibexa AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace Ibexa\AdminUi\UI\Config\Provider\Module;

use EzSystems\EzPlatformUser\UserSetting\UserSettingService;
use Ibexa\Contracts\AdminUi\UI\Config\ProviderInterface;

/**
 * Provides information about current setting for sub-items list.
 */
class SubItemsList implements ProviderInterface
{
    /** @var \EzSystems\EzPlatformUser\UserSetting\UserSettingService */
    private $userSettingService;

    /**
     * @param \EzSystems\EzPlatformUser\UserSetting\UserSettingService $userSettingService
     */
    public function __construct(UserSettingService $userSettingService)
    {
        $this->userSettingService = $userSettingService;
    }

    /**
     * @return array
     *
     * @throws \eZ\Publish\API\Repository\Exceptions\InvalidArgumentException
     * @throws \eZ\Publish\API\Repository\Exceptions\UnauthorizedException
     */
    public function getConfig(): array
    {
        return [
            'limit' => (int)$this->userSettingService->getUserSetting('subitems_limit')->value,
        ];
    }
}

class_alias(SubItemsList::class, 'EzSystems\EzPlatformAdminUi\UI\Config\Provider\Module\SubItemsList');
