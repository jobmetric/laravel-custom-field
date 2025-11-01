<?php

// Run IDE helper generation only in dev/local contexts

$isDevMode = getenv('COMPOSER_DEV_MODE') === '1';
$appEnv = getenv('APP_ENV') ?: '';
$isLocalEnv = in_array(strtolower($appEnv), ['local', 'development', 'dev'], true);

if (! $isDevMode && ! $isLocalEnv) {
    // Not in dev/no APP_ENV=local — skip silently
    return 0;
}

// Prefer APP_ENV gate; if not set, rely on Composer dev mode
if (! $isLocalEnv && $isDevMode === false) {
    return 0;
}

// Execute artisan command if available
$artisan = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'artisan';
if (! file_exists($artisan)) {
    // Try project root (package might live in subdir during development)
    $artisan = getcwd() . DIRECTORY_SEPARATOR . 'artisan';
}

if (file_exists($artisan)) {
    $cmd = escapeshellcmd(PHP_BINARY) . ' ' . escapeshellarg($artisan) . ' custom-field:ide --no-interaction';
    // On Windows, escapeshellcmd can add quotes oddly; fallback to simple concat
    if (str_starts_with(PHP_OS_FAMILY, 'Windows')) {
        $cmd = '"' . PHP_BINARY . '" "' . $artisan . '" custom-field:ide --no-interaction';
    }
    passthru($cmd, $code);

    return $code;
}

// No artisan found; nothing to do
return 0;

