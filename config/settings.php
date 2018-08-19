<?php

return [

    /*
     * Application Project Version
     */
    'app_project_version' => env('APP_PROJECT_VERSION'),

    /*
     * Application Author
     */
    'author' => env('APP_AUTHOR'),

    /*
     * Is email activation required
     */
    'activation' => env('ACTIVATION', false),

    /*
     * Email activation time limit allowed
     */
    'timePeriod' => env('ACTIVATION_LIMIT_TIME_PERIOD', 24),

    /*
     * Email activation maximum attempts allowed
     */
    'maxAttempts' => env('ACTIVATION_LIMIT_MAX_ATTEMPTS', 3),

    /*
     * NULL Ip to enter to match database schema
     */
    'nullIpAddress' => env('NULL_IP_ADDRESS', '0.0.0.0'),

    /*
     * User restore encryption type
     */
    'restoreUserEncType' => 'AES-256-ECB',

    /*
     * User restore days past cutoff
     */
    'restoreUserCutoff' => env('USER_RESTORE_CUTOFF_DAYS', 31),

    /*
     * User list pagination size
     */
    'userListPaginationSize' => env('USER_LIST_PAGINATION_SIZE', 50),

    /*
     * User restore encryption key
     */
    'restoreKey' => env('USER_RESTORE_ENCRYPTION_KEY', 'sup3rS3cr3tR35t0r3K3y21!'),

    /*
     * ReCaptcha Status
     */
    'reCaptchStatus' => env('ENABLE_RECAPTCHA', false),

    /*
     * ReCaptcha Site Key
     */
    'reCaptchSite'   => env('RE_CAP_SITE', 'YOURGOOGLECAPTCHAsitekeyHERE'),

    /*
     * ReCaptcha Secret
     */
    'reCaptchSecret' => env('RE_CAP_SECRET', 'YOURGOOGLECAPTCHAsecretHERE'),

    /*
     * Google Maps API V3 Status
     */
    'googleMapsAPIStatus' => env('GOOGLEMAPS_API_STATUS', false),

    /*
     * Google Maps API Key
     */
    'googleMapsAPIKey'    => env('GOOGLEMAPS_API_KEY', 'YOURGOOGLEMAPSkeyHERE'),

    /*
     * DropZone CDN
     */
    'dropZoneJsCDN'    => env('DROPZONE_JS_CDN', 'https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js'),
];
