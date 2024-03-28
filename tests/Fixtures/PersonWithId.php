<?php

declare(strict_types=1);

namespace JMS\Serializer\Tests\Fixtures;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * @XmlRoot("child")
 */
#[XmlRoot(name: 'child')]
class PersonWithId
{
    /**
     * @Type("mixed")
     */
    #[Type(name: 'mixed')]
    private $afterBeginText;

    /**
     * @Type("string")
     */
    #[Type(name: 'string')]
    #[XmlElement]
    private $id;
}
