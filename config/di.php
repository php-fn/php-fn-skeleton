<?php
/**
 * Copyright (C) php-fn. See LICENSE file for license details.
 */

namespace DI;

use fn;

return [
    'cli.name'             => fn\PACKAGES[fn\VENDOR\PHP_FN\SKELETON]['name'],
    'cli.version'          => fn\PACKAGES[fn\VENDOR\PHP_FN\SKELETON]['version'],
    'cli.commands.default' => false,
];
