<?php

/**
 * @copyright Copyright (C) Ibexa AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace Ibexa\AdminUi\Form\Data\ObjectState;

use eZ\Publish\API\Repository\Values\ObjectState\ObjectStateGroup;

class ObjectStateGroupDeleteData
{
    /**
     * @var \eZ\Publish\API\Repository\Values\ObjectState\ObjectStateGroup|null
     */
    private $objectStateGroup;

    /**
     * @param \eZ\Publish\API\Repository\Values\ObjectState\ObjectStateGroup|null $objectStateGroup
     */
    public function __construct(?ObjectStateGroup $objectStateGroup = null)
    {
        $this->objectStateGroup = $objectStateGroup;
    }

    /**
     * @return \eZ\Publish\API\Repository\Values\ObjectState\ObjectStateGroup
     */
    public function getObjectStateGroup(): ObjectStateGroup
    {
        return $this->objectStateGroup;
    }

    /**
     * @param \eZ\Publish\API\Repository\Values\ObjectState\ObjectStateGroup $objectStateGroup
     */
    public function setObjectStateGroup(ObjectStateGroup $objectStateGroup)
    {
        $this->objectStateGroup = $objectStateGroup;
    }
}

class_alias(ObjectStateGroupDeleteData::class, 'EzSystems\EzPlatformAdminUi\Form\Data\ObjectState\ObjectStateGroupDeleteData');
