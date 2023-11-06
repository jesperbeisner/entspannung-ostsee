<?php

declare(strict_types=1);

$finder = (new PhpCsFixer\Finder())
    ->in([
        __DIR__ . '/app',
        __DIR__ . '/tests',
        __DIR__ . '/database',
        __DIR__ . '/config',
        __DIR__ . '/public',
        __DIR__ . '/bootstrap',
    ])
;

return (new PhpCsFixer\Config())->setRules([
    '@Symfony' => true,
    'strict_param' => true,
    'declare_strict_types' => true,
    'concat_space' => ['spacing' => 'one'],
    'yoda_style' => false,
    'phpdoc_align' => ['align' => 'left'],
    'global_namespace_import' => false,
])
    ->setFinder($finder)
    ->setRiskyAllowed(true)
    ->setUsingCache(false)
;