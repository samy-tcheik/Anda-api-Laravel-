<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static ALREADY_LIKED_EXCEPTION()
 */
final class ExceptionCode extends Enum
{
    const ALREADY_LIKED_EXCEPTION = "User has already liked this element";
}