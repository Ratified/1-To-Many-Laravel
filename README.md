# Author and Book Management

This is a simple Laravel project demonstrating a one-to-many relationship between authors and books. Each author can have multiple books. The project includes functionality to seed the database with sample data and view the relationships in a web interface.

## Features

- **Authors and Books:** Manage authors and their books with ease.
- **Database Seeding:** Automatically seed the database with sample data.
- **Relationship Management:** Demonstrates a one-to-many relationship between authors and books.

## Prerequisites

- PHP (>= 7.3)
- Composer
- MySQL or another supported database

## Installation

1. **Clone the repository:**
    ```bash
    git clone https://github.com/your-username/author-book-management.git
    cd author-book-management
    ```

2. **Install dependencies:**
    ```bash
    composer install
    npm install
    npm run dev
    ```

3. **Set up the environment file:**
    ```bash
    cp .env.example .env
    ```
    Update the `.env` file with your database credentials and other configurations.

4. **Generate application key:**
    ```bash
    php artisan key:generate
    ```

5. **Run migrations and seed the database:**
    ```bash
    php artisan migrate --seed
    ```

## Usage

1. **Start the development server:**
    ```bash
    php artisan serve
    ```

2. **Access the application:**
    Open your browser and navigate to `http://localhost:8000/authors` to view the list of authors and their books.

## Project Structure

- **Models:**
  - `Author`: Represents an author.
  - `Book`: Represents a book written by an author.

- **Database Migrations:**
  - `create_authors_table`: Creates the `authors` table.
  - `create_books_table`: Creates the `books` table with a foreign key to the `authors` table.

- **Seeders:**
  - `AuthorBookSeeder`: Seeds the database with sample authors and books.

- **Controllers:**
  - `AuthorController`: Handles the logic for fetching and displaying authors and their books.

## Example Data

The seeder adds the following authors and books to the database:

- **Jordan Peterson:**
  - "12 Rules for Life"
  - "Maps of Meaning"

- **Corey Wayne:**
  - "How To Be A 3% Man"
  - "Mastering Yourself"

- **Robert Greene:**
  - "The 48 Laws of Power"
  - "The Art of Seduction"

## Contributing

If you would like to contribute to this project, please fork the repository and submit a pull request.

## License

This project is open-source and available under the [MIT License](LICENSE).
