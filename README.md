# 🧙‍♂️ Magical Book API - The Lineage of the Eagle 📚

## ✨ Description

This project is a magical book API inspired by the Harry Potter universe. It allows users to search, consult, and unlock books protected by magical questions, adding a touch of interactivity and challenge to the experience.

## 🎯 Objectives

* Allow users to **search and consult** information about available books.
* Implement a system of **magical questions** to protect access to certain books.
* Facilitate the **unlocking of books** by correctly answering the magical questions.

## 🛠️ Technologies

* **Backend:** PHP (version 8.1 or higher recommended), Laravel
* **Database:** MariaDB
* **Version Control:** Git
* **Repository:** GitHub

## 📂 Project Documentation

The detailed technical documentation of the project is located in the `docs/` folder and includes:

* **Entity-Relationship Diagram (ERD) of the database:** [docs/entity-relationship-diagram.md](docs/entity-relationship-diagram.md)
* **Interface Agreement (API) - Frontend Communication:** [docs/interface-agreement-api.md](docs/interface-agreement-api.md)
* **Commit Convention:** We are using the Conventional Commits convention for a cleaner and more readable commit history. [https://www.conventionalcommits.org/en/v1.0.0/](https://www.conventionalcommits.org/en/v1.0.0/)

## 📚 Recommended Documentation

Here are some resources that may be helpful for understanding and working with this project:

* **What is an Entity-Relationship Diagram?** [https://mermaid.js.org/syntax/entityRelationshipDiagram.html](https://mermaid.js.org/syntax/entityRelationshipDiagram.html)
* **Conventional Commits (English):** [https://www.conventionalcommits.org/en/v1.0.0/](https://www.conventionalcommits.org/en/v1.0.0/)
* **Swagger (for API documentation and interaction):** [https://swagger.io/](https://swagger.io/)
* **Postman (for testing the REST API):** [https://www.postman.com/](https://www.postman.com/)
* **Markdown Editors (for editing this and other files):** [https://readme.so/](https://readme.so/)

## ⚙️ Installation

Follow these steps to set up the project in your local environment:

**Prerequisites:**

* PHP (version 8.1 or higher recommended)
* Composer (PHP dependency manager)
* MariaDB (or MySQL) installed and running
* Git

**Installation Steps:**

1.  **Clone the repository:**

    ```bash
    git clone [https://github.com/TEAM3-ED9/magical-bookstore-api.git](https://github.com/TEAM3-ED9/magical-bookstore-api.git)
    ```

2.  **Navigate to the project directory:**

    ```bash
    cd magical-bookstore-api
    ```

3.  **Verify the PHP version:**

    ```bash
    php --version
    ```

    Ensure you have PHP version 8.1 or higher.

4.  **Verify the Composer version:**

    ```bash
    composer --version
    ```

    Ensure you have Composer version 2.x installed.

5.  **Install Composer dependencies:**

    ```bash
    composer install
    ```

6.  **Configure the database connection:**

    * Copy the `.env.example` file to `.env`:

        ```bash
        cp .env.example .env
        ```

    * Open the `.env` file and configure the database environment variables (DB\_CONNECTION, DB\_HOST, DB\_PORT, DB\_DATABASE, DB\_USERNAME, DB\_PASSWORD).

7.  **Generate the Laravel application key:**

    ```bash
    php artisan key:generate
    ```

8.  **Run database migrations:**

    ```bash
    php artisan migrate
    ```

9.  **Start the Laravel development server:**

    ```bash
    php artisan serve
    ```

    This will start the server at `http://localhost:8000`.

## 🐳 Docker Installation

If you prefer to use Docker for an isolated development environment, follow these steps:

**Prerequisites:**

* Docker installed on your operating system.

**Docker Installation Steps:**

1.  **Verify the Docker version:**

    ```bash
    docker --version
    ```

    Ensure you have Docker version 20.x or higher.

2.  **Clone the repository:**

    ```bash
    git clone [https://github.com/TEAM3-ED9/magical-bookstore-api.git](https://github.com/TEAM3-ED9/magical-bookstore-api.git)
    ```

3.  **Navigate to the project directory:**

    ```bash
    cd magical-bookstore-api
    ```

4.  **Configure environment variables:**

    * Copy the `.env.example` file to `.env`:

        ```bash
        cp .env.example .env
        ```

    * Open the `.env` file and configure the necessary environment variables.

5.  **Configure environment variables for the MariaDB database (if necessary):**

    * Copy the `.env-example` file in `Application/MariaDB/` to `.env`:

        ```bash
        cp Application/MariaDB/.env-example Application/MariaDB/.env
        ```

    * Open the `Application/MariaDB/.env` file and configure the database environment variables.

6.  **Build and run the Docker containers:**

    ```bash
    docker-compose up -d --build
    ```

    This will build the Docker images (if it's the first time) and run the containers in the background.

## 🚀 Usage

Once the server is running (either locally or with Docker), you can access the application through your browser at `http://localhost:8000`.

To interact with the API, consult the interface (API) documentation in `docs/interface-agreement-api.md` to learn about the available endpoints, HTTP methods, and data formats.

## 🤝 Contribution

If you would like to contribute to this project, please follow these steps:

1.  **Fork** the repository if you are not part of the original team.
2.  **Create a branch** for your contribution: `git checkout -b feat/feature-name`.
3.  **Make your changes** and commit them: `git commit -m "feat: Clear description of the changes made"`.
4.  **Push your changes** to your fork: `git push origin feat/feature-name`.
5.  **Create a Pull Request** to the `develop` branch of the original repository.

Please ensure that you follow the established commit conventions and that your code is well-documented.

## 📄 License

This project is licensed under the [MIT License](LICENSE).

---