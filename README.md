### Symfony Microkernel Starter Kit

## Installation

```git clone git@github.com:systemowiec/dockerized-symfony-microkernel-starter-kit.git```

```docker-machine create starter```

```eval $(docker-machine env starter)```

```docker-compose build```

```docker-compose up```

```docker-compose exec php-dev composer install```

Get docker machine IP and Edit you hosts file:

```docker-machine ip starter // to get IP for setup hosts```

```xxx.xx.xx.xx starter.local```

**Never use Staging Database in parameters_e2e.yml file!**

## Usage

Run tests:

```bin/phpspec run```

```docker-compose exec php bin/behat -p domain features```

```docker-compose exec php bin/behat -p e2e features```
