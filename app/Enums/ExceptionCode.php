<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static ALREADY_LIKED_EXCEPTION()
 * @method static static GOOGLE_LOGIN_FAILED_EXCEPTION()
 * @method static static ALREADY_REVIEWED_EXCEPTION()
 * @method static static EMAIL_NOT_VERIFIED_EXCEPTION()
 * @method static static REVIEW_CANT_BE_DELETED()
 * @method static static GEOLOCATION_MISSING()
 */
final class ExceptionCode extends Enum
{
    const ALREADY_LIKED_EXCEPTION = "User has already liked this element";
    const GOOGLE_LOGIN_FAILED_EXCEPTION = "Google login failed";
    const ALREADY_REVIEWED_EXCEPTION = "User has already reviewed this element";
    const EMAIL_NOT_VERIFIED_EXCEPTION = "Email address is not verified";
    const REVIEW_CANT_BE_DELETED = "Review can't be deleted";
    const GEOLOCATION_MISSING = "Geolocation data is missing";
}
