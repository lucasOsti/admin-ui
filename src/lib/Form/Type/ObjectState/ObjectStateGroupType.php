<?php

/**
 * @copyright Copyright (C) Ibexa AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace Ibexa\AdminUi\Form\Type\ObjectState;

use eZ\Publish\API\Repository\ObjectStateService;
use Ibexa\AdminUi\Form\DataTransformer\ObjectStateGroupTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;

class ObjectStateGroupType extends AbstractType
{
    /** @var \eZ\Publish\API\Repository\ObjectStateService */
    protected $objectStateService;

    /**
     * @param \eZ\Publish\API\Repository\ObjectStateService $objectStateService
     */
    public function __construct(ObjectStateService $objectStateService)
    {
        $this->objectStateService = $objectStateService;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addModelTransformer(new ObjectStateGroupTransformer($this->objectStateService));
    }

    public function getParent()
    {
        return HiddenType::class;
    }
}

class_alias(ObjectStateGroupType::class, 'EzSystems\EzPlatformAdminUi\Form\Type\ObjectState\ObjectStateGroupType');
