phpstan:
	vendor/bin/phpstan analyse -l 8 src/ tests/ --error-format=github -c phpstan.neon

cs:
	vendor/bin/phpcs src/ tests/ --ignore=tests/temp/ --standard=vendor/pd/coding-standard/src/PeckaCodingStandard/ruleset.xml

unit-tests:
	vendor/bin/phpunit tests


build:
	make phpstan
	make cs
	make unit-tests
