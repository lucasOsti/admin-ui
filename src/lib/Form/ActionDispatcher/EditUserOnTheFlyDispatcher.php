<?php

/**
 * @copyright Copyright (C) Ibexa AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace Ibexa\AdminUi\Form\ActionDispatcher;

use EzSystems\EzPlatformContentForms\Form\ActionDispatcher\ContentDispatcher;
use Ibexa\Contracts\AdminUi\Event\UserOnTheFlyEvents;

class EditUserOnTheFlyDispatcher extends ContentDispatcher
{
    protected function getActionEventBaseName(): string
    {
        return UserOnTheFlyEvents::USER_EDIT;
    }
}

class_alias(EditUserOnTheFlyDispatcher::class, 'EzSystems\EzPlatformAdminUi\Form\ActionDispatcher\EditUserOnTheFlyDispatcher');
