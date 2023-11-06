<?php declare(strict_types = 1);

$ignoreErrors = [];
$ignoreErrors[] = [
	'message' => '#^Method App\\\\Repositories\\\\AbstractRepository\\:\\:find\\(\\) should return \\(T of Illuminate\\\\Database\\\\Eloquent\\\\Model\\)\\|null but returns Illuminate\\\\Database\\\\Eloquent\\\\Model\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../app/Repositories/AbstractRepository.php',
];
$ignoreErrors[] = [
	'message' => '#^Method App\\\\Repositories\\\\AbstractRepository\\:\\:findAll\\(\\) should return Illuminate\\\\Database\\\\Eloquent\\\\Collection\\<int, T of Illuminate\\\\Database\\\\Eloquent\\\\Model\\> but returns Illuminate\\\\Database\\\\Eloquent\\\\Collection\\<int, Illuminate\\\\Database\\\\Eloquent\\\\Model\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../app/Repositories/AbstractRepository.php',
];
$ignoreErrors[] = [
	'message' => '#^Method App\\\\Repositories\\\\AbstractRepository\\:\\:get\\(\\) should return T of Illuminate\\\\Database\\\\Eloquent\\\\Model but returns Illuminate\\\\Database\\\\Eloquent\\\\Model\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../app/Repositories/AbstractRepository.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$title of static method Illuminate\\\\Support\\\\Str\\:\\:slug\\(\\) expects string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../config/cache.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$title of static method Illuminate\\\\Support\\\\Str\\:\\:slug\\(\\) expects string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../config/database.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$title of static method Illuminate\\\\Support\\\\Str\\:\\:slug\\(\\) expects string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../config/session.php',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
