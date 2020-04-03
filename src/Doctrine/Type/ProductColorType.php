<?php

declare(strict_types=1);

namespace App\Doctrine\Type;

use App\Entity\Product\ProductColor;
use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\TextType;

final class ProductColorType extends TextType
{
    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        return new ProductColor($value);
    }

    /** @param ProductColor $value */
    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        return $value->getColor();
    }

    public function getName()
    {
        return 'product_color';
    }
}
