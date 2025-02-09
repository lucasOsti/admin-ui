<?php

/**
 * @copyright Copyright (C) Ibexa AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace Ibexa\AdminUi\Form\Event;

final class ContentEditEvents
{
    /**
     * Triggered when requesting a content preview.
     */
    const CONTENT_PREVIEW = 'content.edit.preview';
}

class_alias(ContentEditEvents::class, 'EzSystems\EzPlatformAdminUi\Form\Event\ContentEditEvents');
