# Symfony 6 Skeleton Installation with Docker

## Prequisites (installations on host machine)

1. Install composer https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos
2. Install docker and compose https://docs.docker.com/compose/install/ 
3. Install PHP8.1 on host machine (this is needed by symfony CLI)

## Steps during trial and error

1. Install Symfony CLI from https://symfony.com/download
2. Add the Symfony bin path on `.bashrc` `export PATH="$HOME/.symfony5/bin:$PATH"`
3. Create the bare directories and empty files, such as `docker` and `app`
4. Run `symfony check:requirements` 
5. If everything is green, run `symfony new app --version="6.1.*"`. The `app` refers to the directory where Symfony installation resides
6. All other configurations are copied and modified based on https://dev.to/slns/symfony-6-with-docker-14i0

## Up and running

1. Run `composer install` inside `app`
2. Run `docker compose up -d` from root directory
3. Load `localhost` and voilà !
