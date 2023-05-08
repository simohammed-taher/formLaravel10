# Laravel Employee Management System (formlaravel10)

Laravel Employee Management System (formlaravel10) is a simple web application built with Laravel that allows you to manage employee information. This system allows you to create, read, update, and delete employee records.

## Features

- List all employees
- Add new employees
- Edit existing employee information
- Delete employees

## Installation

Before you proceed with the installation, make sure you have the following requirements:

- PHP >= 7.3
- Composer
- A web server (e.g., Apache, Nginx)
- A database server (e.g., MySQL, PostgreSQL)

1. **Clone the repository**

https://github.com/simohammed-taher/formLaravel10

2. **Change to the project directory**

`cd formlaravel10`


3. **Install dependencies**
`composer install`


4. **Create a copy of the .env.example file and rename it to .env**


`cp .env.example .env`

5. **Update the .env file with your database and mail server credentials**

6. **Generate an application key**
`php artisan key:generate`


7. **Run the database migrations and seed the database**

`php artisan migrate --seed`

8. **Start the local development server**


`php artisan serve`


The application should now be accessible at http://localhost:8000.

## Usage

The application has the following routes defined:

- `GET /employees`: Display a list of all employees.
- `GET /employees/create`: Show the form for creating a new employee.
- `POST /employees`: Store a new employee record in the database.
- `GET /employees/{employee}/edit`: Show the form for editing an existing employee.
- `PUT /employees/{employee}`: Update an employee's information in the database.
- `DELETE /employees/{employee}`: Delete an employee record from the database.

You can navigate through these routes using the provided UI or interact with them directly via their respective endpoints.

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

[MIT](SIMOHAMMED)

## Contact

[simohamedtaher123@gmail.com](mailto:simohamedtaher123@gmail.com)


# formLaravel10
