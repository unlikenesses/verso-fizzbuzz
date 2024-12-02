# FizzBuzz Generator 

A slightly over-engineered FizzBuzz implementation 

### Requirements

PHP 8.3

### Installing it

```
composer install
```

### Running the CLI command

```
php bin/console app:fizz-buzz
```

The command has two optional arguments: `start` and `end`, e.g.:

```
php bin/console app:fizz-buzz 1 10
```

will run FizzBuzz for all numbers between one and ten.

### Running the tests

```
php bin/phpunit
```

Please note the command (integration) test will only pass on a Linux/Mac machine, because it tests for the presence of new lines, which on Linux-based systems is "\n", whereas on Windows it's "\r\n".

### Running the static analyis:

```
vendor/bin/phpstan analyse
```
