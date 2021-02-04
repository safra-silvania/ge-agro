<?php
declare(strict_types=1);

namespace App\Model\Enum;

abstract class PageStatus extends Base\BaseEnum {
    const __default = self::Ativo;

    const Ativa = 1;
    const Inativa = 2;
}