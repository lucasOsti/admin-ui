<?php

/**
 * @copyright Copyright (C) Ibexa AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace Ibexa\AdminUi\Form\Type\Content;

use eZ\Publish\API\Repository\ContentService;
use Ibexa\AdminUi\Form\DataTransformer\ContentInfoTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;

class ContentInfoType extends AbstractType
{
    /** @var \eZ\Publish\API\Repository\ContentService */
    protected $contentService;

    /**
     * @param \eZ\Publish\API\Repository\ContentService $contentService
     */
    public function __construct(ContentService $contentService)
    {
        $this->contentService = $contentService;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addViewTransformer(new ContentInfoTransformer($this->contentService));
    }

    public function getParent(): ?string
    {
        return HiddenType::class;
    }
}

class_alias(ContentInfoType::class, 'EzSystems\EzPlatformAdminUi\Form\Type\Content\ContentInfoType');
