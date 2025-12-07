# Student Management System (SMS)

A web-based Student Management System built with PHP and minimal JavaScript, designed to manage student programmes, departments, and related academic information.

## Overview

This project is a comprehensive student management system that allows educational institutions to efficiently manage their academic programmes, departments, and student data. The system is built primarily with PHP for server-side logic and uses minimal JavaScript for enhanced user interactions.

## Features

**Programme Management**
- View all academic programmes
- Add new programmes with detailed information
- Track programme details including:
  - Programme title and code
  - Number of semesters
  - Graduation level (Diploma, Bachelor, Master, PhD)
  - Technical level (Beginner, Intermediate, Advanced)
  - Department associations

**Department Management**
- Organize programmes by departments
- Track department-specific information

**User Interface**
- Clean, modern, and responsive design
- Intuitive navigation system
- Professional table layouts with hover effects
- Form validation and user feedback

## Technology Stack

- Backend: PHP 8.1+
- Database: MySQL
- Frontend: HTML5, CSS3
- JavaScript: Minimal usage (primarily for navigation and basic interactions)
- Design: Custom CSS with modern styling

## Project Structure

```
sms/
├── database/
│   ├── Database.php           # Database connection handler
│   ├── ProgrammeDetails.php   # Programme data operations
│   └── DepartmentDetails.php  # Department data operations
├── views/
│   ├── base.php              # Base layout template
│   ├── programmeDetails/
│   │   ├── index.php         # Programme listing page
│   │   ├── create.php        # Add new programme form
│   │   └── getProgrammeDetails.php
├── global/
│   ├── URL.php               # URL helper utilities
│   └── jquery.js             # jQuery library
├── css/
│   └── getProgrammingDetails.css
└── README.md
```

## Key Design Decisions

### PHP-First Architecture
This project is mostly written in PHP with minimal reliance on JavaScript. This approach provides:
- Better server-side data validation
- Enhanced security through server-side processing
- Improved SEO and accessibility
- Reduced client-side dependencies

### Minimal JavaScript Usage
JavaScript is used sparingly for:
- Basic navigation interactions
- Form button handlers
- Simple UI enhancements

The system functions fully without heavy JavaScript frameworks, making it lightweight and easy to maintain.

## Database Schema

### Programme Details Table
| Column            | Type         | Description                        |
|-------------------|--------------|-------------------------------------|
| id                | int          | Primary key (auto-increment)       |
| title             | varchar(255) | Programme title                    |
| code              | varchar(50)  | Programme code                     |
| no_of_sem         | int          | Number of semesters                |
| graduation_level  | varchar(50)  | Academic level                     |
| technical_level   | varchar(50)  | Technical proficiency level        |
| department_id     | int          | Foreign key to departments         |

## Getting Started

### Prerequisites
- PHP 8.1 or higher
- MySQL 5.7 or higher
- Apache/Nginx web server
- Basic knowledge of PHP and MySQL

### Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/PrabathForYou/student-management-system.git
   cd student-management-system
   ```

2. Import the database:
   ```bash
   mysql -u your_username -p your_database < studentmanagementsystem.sql
   ```

3. Configure database connection in database/Database.php

4. Start your web server and navigate to the project URL

## Usage

1. View Programmes: Navigate to the "View Programmes" section to see all academic programmes
2. Add Programme: Click "Add New Programme" to create a new programme entry
3. Manage Data: Use the intuitive forms to input and manage programme details

## Design Philosophy

- Simplicity: Clean, straightforward code without unnecessary complexity
- Performance: Fast loading times with server-side rendering
- Maintainability: Easy-to-read code structure with clear separation of concerns
- Accessibility: Semantic HTML and keyboard-friendly navigation

## Contributing

Contributions are welcome. Please feel free to submit issues or pull requests.

## License

This project is open-source and available for educational purposes.

## Author

PrabathForYou
- GitHub: https://github.com/PrabathForYou

Note: This system prioritizes PHP for core functionality and uses JavaScript minimally, ensuring a robust, server-side-first architecture.
