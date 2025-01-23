# CodeIgniter 4 Dockerized Project

Welcome to the CodeIgniter 4 Dockerized Project! This repository contains the necessary files to set up and run a CodeIgniter 4 project using Docker. By following the instructions below, you'll have your environment up and running with minimal effort.

---

## Table of Contents

- [Features](#features)
- [Prerequisites](#prerequisites)
- [Getting Started](#getting-started)
  - [1. Clone the Repository](#1-clone-the-repository)
  - [2. Configure Environment Variables](#2-configure-environment-variables)
  - [3. Build and Run Containers](#3-build-and-run-containers)
  - [4. Access the Application](#4-access-the-application)
  - [5. Database Management](#5-database-management)
- [Development Workflow](#development-workflow)
- [Troubleshooting](#troubleshooting)
- [Future Enhancements](#future-enhancements)
- [License](#license)

---

## Features

- Fully containerized environment with Docker.
- CodeIgniter 4 application with PHP 8.2.
- MySQL database and phpMyAdmin for database management.
- Simple setup with Docker Compose.
- Auto-rebuild for changes during development.

---

## Prerequisites

Ensure you have the following installed on your system:

- [Docker Desktop](https://www.docker.com/products/docker-desktop) (latest version)
- [Git](https://git-scm.com/)

---

## Getting Started

### 1. Clone the Repository

Clone this repository to your local machine:

```bash
git clone https://github.com/rifqireza/codeigniter-4.git
cd codeigniter-4
```

### 2. Configure Environment Variables

Copy the `.env.example` file to `.env`:

```bash
cp .env.example .env
```

Update the following variables in the `.env` file:

- **`DB_HOST=db`**
- **`DB_DATABASE=codeigniter4db`**
- **`DB_USERNAME=user`**
- **`DB_PASSWORD=userpassword`**

### 3. Build and Run Containers

Run the following commands to build and start the containers:

```bash
docker-compose up -d --build
```

This will start the following services:

- **Web Server:** Accessible on `http://localhost:8080`
- **phpMyAdmin:** Accessible on `http://localhost:8081`

### 4. Access the Application

Once the containers are up, open your browser and navigate to:

- **Application:** [http://localhost:8080](http://localhost:8080)
- **phpMyAdmin:** [http://localhost:8081](http://localhost:8081)

### 5. Database Management

Login to phpMyAdmin using the following credentials:

- **Server:** `db`
- **Username:** `user`
- **Password:** `userpassword`

---

## Development Workflow

1. **Edit Your Code**
   All project files are located in the `codeigniter_4` directory. Changes will automatically reflect in the running container.

2. **Run Migrations**
   To run migrations with CodeIgniter, execute:

   ```bash
   docker exec -it codeigniter4-web php spark migrate
   ```

3. **Rebuild the Container**
   If dependencies are updated (e.g., `composer.json`), rebuild the container:

   ```bash
   docker-compose up -d --build
   ```

---

## Troubleshooting

### 1. Container Fails to Start

- Check logs for errors:

  ```bash
  docker logs codeigniter4-web
  ```

- Ensure ports `8080` and `8081` are not in use.

### 2. Database Connection Issues

- Verify credentials in `.env` and `docker-compose.yml`.
- Check if the `db` container is running:

  ```bash
  docker ps
  ```

---

## License

This project is licensed under the MIT License. See the LICENSE file for more details.
