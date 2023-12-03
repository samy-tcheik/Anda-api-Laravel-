<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * 1xx Informational
 * @method static static CONTINUE()
 * @method static static SWITCHING_PROTOCOLS()
 * @method static static PROCESSING()
 * @method static static EARLY_HINTS()
 *
 * 2xx Success
 * @method static static OK()
 * @method static static CREATED()
 * @method static static ACCEPTED()
 * @method static static NON_AUTHORITATIVE_INFORMATION()
 * @method static static NO_CONTENT()
 * @method static static RESET_CONTENT()
 * @method static static PARTIAL_CONTENT()
 * @method static static MULTI_STATUS()
 * @method static static ALREADY_REPORTED()
 * @method static static IM_USED()
 *
 * 3xx Redirection
 * @method static static MULTIPLE_CHOICES()
 * @method static static MOVED_PERMANENTLY()
 * @method static static FOUND()
 * @method static static SEE_OTHER()
 * @method static static NOT_MODIFIED()
 * @method static static USE_PROXY()
 * @method static static RESERVED()
 * @method static static TEMPORARY_REDIRECT()
 * @method static static PERMANENTLY_REDIRECT()
 *
 * 4xx Client Error
 * @method static static BAD_REQUEST()
 * @method static static UNAUTHORIZED()
 * @method static static PAYMENT_REQUIRED()
 * @method static static FORBIDDEN()
 * @method static static NOT_FOUND()
 * @method static static METHOD_NOT_ALLOWED()
 * @method static static NOT_ACCEPTABLE()
 * @method static static PROXY_AUTHENTICATION_REQUIRED()
 * @method static static REQUEST_TIMEOUT()
 * @method static static CONFLICT()
 * @method static static GONE()
 * @method static static LENGTH_REQUIRED()
 * @method static static PRECONDITION_FAILED()
 * @method static static REQUEST_ENTITY_TOO_LARGE()
 * @method static static REQUEST_URI_TOO_LONG()
 * @method static static UNSUPPORTED_MEDIA_TYPE()
 * @method static static REQUESTED_RANGE_NOT_SATISFIABLE()
 * @method static static EXPECTATION_FAILED()
 * @method static static I_AM_A_TEAPOT()
 * @method static static MISDIRECTED_REQUEST()
 * @method static static UNPROCESSABLE_ENTITY()
 * @method static static LOCKED()
 * @method static static FAILED_DEPENDENCY()
 * @method static static TOO_EARLY()
 * @method static static UPGRADE_REQUIRED()
 * @method static static PRECONDITION_REQUIRED()
 * @method static static TOO_MANY_REQUESTS()
 * @method static static REQUEST_HEADER_FIELDS_TOO_LARGE()
 * @method static static UNAVAILABLE_FOR_LEGAL_REASONS()
 *
 * 5xx Server Error
 * @method static static INTERNAL_SERVER_ERROR()
 * @method static static NOT_IMPLEMENTED()
 * @method static static BAD_GATEWAY()
 * @method static static SERVICE_UNAVAILABLE()
 * @method static static GATEWAY_TIMEOUT()
 * @method static static VERSION_NOT_SUPPORTED()
 * @method static static VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL()
 * @method static static INSUFFICIENT_STORAGE()
 * @method static static LOOP_DETECTED()
 * @method static static NOT_EXTENDED()
 * @method static static NETWORK_AUTHENTICATION_REQUIRED()
 */
final class HttpStatusCode extends Enum
{
    // 1xx Informational
    public const CONTINUE                             = 100;
    public const SWITCHING_PROTOCOLS                  = 101;
    public const PROCESSING                           = 102;
    public const EARLY_HINTS                          = 103;

    // 2xx Success
    public const OK                                   = 200;
    public const CREATED                              = 201;
    public const ACCEPTED                             = 202;
    public const NON_AUTHORITATIVE_INFORMATION        = 203;
    public const NO_CONTENT                           = 204;
    public const RESET_CONTENT                        = 205;
    public const PARTIAL_CONTENT                      = 206;
    public const MULTI_STATUS                         = 207;
    public const ALREADY_REPORTED                     = 208;
    public const IM_USED                              = 226;

    // 3xx Redirection
    public const MULTIPLE_CHOICES                     = 300;
    public const MOVED_PERMANENTLY                    = 301;
    public const FOUND                                = 302;
    public const SEE_OTHER                            = 303;
    public const NOT_MODIFIED                         = 304;
    public const USE_PROXY                            = 305;
    public const RESERVED                             = 306;
    public const TEMPORARY_REDIRECT                   = 307;
    public const PERMANENTLY_REDIRECT                 = 308;

    // 4xx Client Error
    public const BAD_REQUEST                          = 400;
    public const UNAUTHORIZED                         = 401;
    public const PAYMENT_REQUIRED                     = 402;
    public const FORBIDDEN                            = 403;
    public const NOT_FOUND                            = 404;
    public const METHOD_NOT_ALLOWED                   = 405;
    public const NOT_ACCEPTABLE                       = 406;
    public const PROXY_AUTHENTICATION_REQUIRED        = 407;
    public const REQUEST_TIMEOUT                      = 408;
    public const CONFLICT                             = 409;
    public const GONE                                 = 410;
    public const LENGTH_REQUIRED                      = 411;
    public const PRECONDITION_FAILED                  = 412;
    public const REQUEST_ENTITY_TOO_LARGE             = 413;
    public const REQUEST_URI_TOO_LONG                 = 414;
    public const UNSUPPORTED_MEDIA_TYPE               = 415;
    public const REQUESTED_RANGE_NOT_SATISFIABLE      = 416;
    public const EXPECTATION_FAILED                   = 417;
    public const I_AM_A_TEAPOT                        = 418;
    public const MISDIRECTED_REQUEST                  = 421;
    public const UNPROCESSABLE_ENTITY                 = 422;
    public const LOCKED                               = 423;
    public const FAILED_DEPENDENCY                    = 424;
    public const TOO_EARLY                            = 425;
    public const UPGRADE_REQUIRED                     = 426;
    public const PRECONDITION_REQUIRED                = 428;
    public const TOO_MANY_REQUESTS                    = 429;
    public const REQUEST_HEADER_FIELDS_TOO_LARGE      = 431;
    public const UNAVAILABLE_FOR_LEGAL_REASONS        = 451;

    // 5xx Server Error
    public const INTERNAL_SERVER_ERROR                = 500;
    public const NOT_IMPLEMENTED                      = 501;
    public const BAD_GATEWAY                          = 502;
    public const SERVICE_UNAVAILABLE                  = 503;
    public const GATEWAY_TIMEOUT                      = 504;
    public const VERSION_NOT_SUPPORTED                = 505;
    public const VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL = 506;
    public const INSUFFICIENT_STORAGE                 = 507;
    public const LOOP_DETECTED                        = 508;
    public const NOT_EXTENDED                         = 510;
    public const NETWORK_AUTHENTICATION_REQUIRED      = 511;
}
