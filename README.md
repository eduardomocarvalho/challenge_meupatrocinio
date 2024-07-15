
# Laravel API with Docker

This project sets up a Laravel API with Docker, utilizing two containers: one for Laravel (PHP-FPM) and another for Nginx.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

- Docker
- Docker Compose

### Installation

1. **Clone the repository:**

   ```sh
   git clone https://github.com/eduardomocarvalho/challenge_meupatrocinio.git
   cd challenge_meupatrocinio
   ```

2. **Start the Docker containers:**

   ```sh
   docker-compose up -d --build
   ```

### API Endpoint

#### GET /api/items

This endpoint retrieves a list of items from the legacy API. It accepts `page` and `perPage` query parameters to allow for flexible pagination.

- **URL:** `/api/items`
- **Method:** `GET`
- **Query Parameters:**
  - `page` (integer, optional): The page number to retrieve. Default is 1.
  - `perPage` (integer, optional): The number of items per page. Default is 100.
- **Response:**
  - `data` (array): List of items.
  - `total` (integer): Total number of items.
  - `page` (integer): Current page number.
  - `perPage` (integer): Number of items per page.

**Example Request:**

```sh
curl -X GET "http://localhost:80/api/items?page=1&perPage=100"
```

### Configuration

- **Docker Compose Configuration:** `docker-compose.yml`
- **Nginx Configuration:** `docker/nginx/laravel.conf`
- **Laravel Dockerfile:** `docker/laravel/Dockerfile`
- **Nginx Dockerfile:** `docker/nginx/Dockerfile`

### Directory Structure

```
laravel-api/
├── docker/
│   ├── laravel/
│   │   ├── Dockerfile
│   │   ├── supervisord.conf
│   │   ├── start-container
│   │   └── php.ini
│   ├── nginx/
│   │   ├── Dockerfile
│   │   └── laravel.conf
├── public/
├── app/
├── bootstrap/
├── config/
├── database/
├── routes/
├── storage/
├── .env.example
├── composer.json
├── composer.lock
├── docker-compose.yml
└── README.md
```
