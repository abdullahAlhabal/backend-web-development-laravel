# Employee and Department Management System

## Project Name and Description:
This system manages employees and departments, allowing CRUD operations on both entities. It's built to facilitate the management of employee records and department details.

## Installation Instructions:
1. Clone the repository. `git clone "https://gitlab.com/AbdullahAlhabal/backend-web-development-laravel.git" `
2. Run `composer install` to install dependencies. `composer install`
3. Create a `.env` file from `.env.example` and configure your database settings.
3.1. Duplicate `.env.example` and rename it to `.env` 
3.2. Configure your database settings in the `.env` file 
4. Run `php artisan key:generate` to generate an application key. `php artisan key:generate`
5. Run `php artisan migrate` to migrate the database schema. `php artisan migrate`
6. Optionally, run `php artisan db:seed` to seed the database with initial data. 'php artisan db:seed'
7. Serve the Application , start your local server with ' php artisan serve' then open your web browser and navigate to `http://localhost:port_number` (make sure about the port_number 8000 ? )

**you might need to set up XAMPP, WAMP, or any other local server environment**

## Technologies Used:
- **Programming Languages**: PHP, HTML, JavaScript
- **Framework**: Laravel
- **Database**: MySQL
- **Frontend Libraries**: Blade system , TailwindCss
- **Other Tools**: Composer , XAMPP , Visual Studio Code 

## Folder Structure:
- `/app`: Contains controllers, models, and other PHP files.
- `/database`: Migrations and seeders.
- `/resources`: Views and frontend assets.
- `/routes`: Defines application routes.
- `/public`: Publicly accessible assets and the entry point (`index.php`).

## Database Schema:
The system uses the following tables:
- `employees`: 
  - `id`
  - `name`
  - `email`
  - `age`
  - `address`
  - `phone`
  - `salary`
  - `department_id`
- `departments`:
  - `id`
  - `name`
  - `description`
  - `manager_id`

## Contact Information
Connect with me on:
- **Email**: [mail me](mailto:dbnkalhbalb@gmail.com) .
- **LinkedIn** : [Abdullah AlHabal](https://www.linkedin.com/in/engabdullahalhabal/) .
- **WebSite** : [Abdullah's Website](http://abdullah.infinityfreeapp.com/) .
- **Bio Links** : [Abdullah's Bio Links](https://abdullahalhbal.bio.link/) .

## EXPLORE MY RESUME 
[Resume](./Abdullah%20AlHabal%20Resume.pdf)

## Additional Notes:
Feel free to explore my repository and join me in this exciting journey of learning and growth in Software Engineering!
