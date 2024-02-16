<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Facebook()
 * @method static static Google()
 * @method static static App()
 */
final class AuthPlugin extends Enum
{
    const Facebook = "facebook";
    const Google = "google";
    const App = "app";
}
