# phil_web_project

phil_web_project est un site qui présentera les différentes oeuvres d'un auteur (livres, peintures, dessins, etc.).

## Environnement de développement

### Pré-requis

    * PHP 7.4
    * Composer
    * Symfony CLI
    * Docker
    * Docker-compose
    * nodejs et npm

### Lancer l'environnement de développement

    * composer install
    * npm install
    * npm run build
    * docker-compose up-d
    * symfony serve -d

### Ajouter des données de tests 

    * symfony console doctrine:fixtures:load

### Lancer des tests

```bash
php bin/phpunit --testdox