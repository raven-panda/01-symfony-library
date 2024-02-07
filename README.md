# Library project - Symfony

This project aims to create a simple library application.\
It will support CRUD of books, authors, editors and book categories.

## Specifications

### MySQL Database Service

I use MySQL to create and run the database. Ran on a Docker service with a docker-compose, it's automaticly generated with an sql script copied into the directory `/docker-entripoint-initdb.d` of the service and executed automaticly.

### MySQL Workbench

To create a schematized diagram of the database, I use MySQL Workbench.

### PHP 8.2.9

This project is created with a PHP framework, so I use PHP 8.2.9.

### Symfony 7.0.3

The application is built with the framework **Symfony 7.0.3**, and I use **Symfony CLI 5.8.4** to run symfony commands.

### Docker Desktop

I use **Docker Desktop 24.0.5** for a contained environment of the database.

### Figma

I use **Figma** to create the mockup for the front-end part of the application.

## Getting Started

### Requirements

- **Docker Desktop**
- **Composer**
- **Symfony CLI**

### Installation

1. Clone the repository

```bash
git clone https://github.com/raven-panda/01-symfony-library.git
```

2. Download and install Docker Desktop at https://docs.docker.com/engine/install/

3. Download and install PHP at https://www.php.net/downloads

4. Download and install Composer at https://getcomposer.org/download/

5. Download and install Symfony CLI at https://symfony.com/download (note that if you use windows, you will need to install scoop first)

6. Open your terminal into the project directory

```bash
cd /path/to/the/project/app-library
```

7. Check requirements to see if your environment meets all requirements to run a Symfony project.

```bash
symfony check:requirements
```

8. Install dependencies

```bash
composer install
```

9. Run the Symfony local server (skip this if you use )
```bash
symfony server:start
```

10. Run docker compose

```bash
docker compose up
```