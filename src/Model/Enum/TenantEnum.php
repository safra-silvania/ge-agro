<?php
declare(strict_types=1);

namespace App\Model\Enum;

abstract class TenantEnum extends Base\BaseEnum {
    const __default = self::GeAgro;

    const SafraGp = 1;
    const GeAgro = 2;
}