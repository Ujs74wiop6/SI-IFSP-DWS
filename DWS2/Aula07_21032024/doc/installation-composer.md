# Install Composer PHP on Linux - Ubuntu 22.04 | 2024

Official site: https://getcomposer.org/

## Code sequence for install:

```shell
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"

php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"

php composer-setup.php

php composer-setup.php

# So far, composer will be installed locally in the current 
# directory of your project, now if you want, we will move 
# it to the composer root folder to make it global

sudo mv composer.phar /usr/local/bin/composer

# Now to validate the installation, run the following command::

composer --version

```

## Init project with Composer:

```shell
 composer init
```

## Install project dependencies:

```shell
 composer install
```

## Update project dependencies:

```shell
 composer update
```

## Remove project dependencies:

```shell
 composer remove ...
```

[Voltar](../index.php)
