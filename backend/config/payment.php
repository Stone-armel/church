<?php

declare(strict_types=1);

/**
 * Genius Pay payment gateway configuration.
 * These credentials must NEVER be exposed to the frontend or committed in plain text.
 * In production, load these from environment variables.
 */
return [
    'base_url'   => getenv('GENIUS_PAY_BASE_URL') ?: 'https://geniuspay.ci/api/v1/merchant/payments',
    'api_key'    => getenv('GENIUS_PAY_API_KEY')  ?: 'sk_sandbox_GH3OjAa8g2ividEVgUNyvrMD4h8blej9',
    'secret_key' => getenv('GENIUS_PAY_SECRET')   ?: 'ss_sandbox_jfcTUNSMMaNOh2thLDoxdviD0fnNCoGMQySGDQCCZ0Bzs8pV',
    'currency'   => 'XOF',
];
