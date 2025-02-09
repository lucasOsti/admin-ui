<?php

/**
 * @copyright Copyright (C) Ibexa AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace Ibexa\AdminUi\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class UniqueURL extends Constraint
{
    /**
     * %url% placeholder is passed.
     *
     * @var string
     */
    public $message = 'ez.url.unique';

    /**
     * @inheritdoc
     */
    public function validatedBy()
    {
        return 'ezplatform.content_forms.validator.unique_url';
    }

    /**
     * @inheritdoc
     */
    public function getTargets()
    {
        return self::CLASS_CONSTRAINT;
    }
}

class_alias(UniqueURL::class, 'EzSystems\EzPlatformAdminUi\Validator\Constraints\UniqueURL');
