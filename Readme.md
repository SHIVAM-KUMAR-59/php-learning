# PHP Learning Journey 🐘

A comprehensive collection of PHP code examples and exercises created while learning PHP fundamentals. This repository documents my progression from basic syntax to object-oriented programming concepts, serving as a reference for future development.

## 📑 Contents

- [Folder Structure](#folder-structure)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
  - [Running the Code](#running-the-code)
- [Acknowledgements](#acknowledgements)

## 📁 Folder Structure
```
PHP-LEARNING/
│
├── 01 variables and data types/
│   ├── 1.1 basics/
│   ├── 1.2 working with strings/
│   └── 1.3 working with numbers/
│
├── 02 Input and basic operations/
│   ├── 2.1 basic calculator/
│   └── 2.2 basic mad lib game/
│
├── 03 arrays/
│   ├── 3.1 introduction to arrays/
│   ├── 3.2 using checkboxes/
│   └── 3.3 associative array/
│
├── 04 functions/
│   └── index.php
│
├── 05 if statements/
│   ├── 5.1 basics/
│   └── 5.2 calculator/
│
├── 06 switch statements/
│   ├── 6.1 basics/
│   └── index.php
│
├── 07 loops/
│   ├── 7.1 while loop/
│   └── 7.2 for loop/
│
├── 08 include statement/
│   ├── 8.1 including HTML/
│   └── 8.2 including PHP/
│
├── 09 class and objects/
│   ├── 9.1 constructors and class functions/
│   └── 9.2 getters and setters/
│
└── README.md
```

## 🚀 Getting Started

### Prerequisites

Before running the code in this repository, ensure you have the following installed:

- **PHP 8.0 or higher** - [Download PHP](https://www.php.net/downloads)
- **Web Server** (Apache/Nginx) or PHP's built-in server
- **Text Editor/IDE** (VS Code, PhpStorm, Sublime Text)

### Installation

#### Step 1: Install PHP

**Windows:**
- Download XAMPP from [https://www.apachefriends.org](https://www.apachefriends.org)
- Install XAMPP and start Apache from the XAMPP Control Panel

**macOS:**
```bash
brew install php
```

**Linux (Ubuntu/Debian):**
```bash
sudo apt update
sudo apt install php php-cli
```

#### Step 2: Verify PHP Installation
```bash
php -v
```
You should see output showing PHP version 8.0 or higher.

#### Step 3: Clone this Repository
```bash
git clone https://github.com/yourusername/php-learning.git
cd php-learning
```

### Running the Code

**Method 1: Using PHP's Built-in Server (Recommended for Learning)**

Navigate to the project directory and start the server:
```bash
php -S localhost:8000
```
Then open your browser and navigate to `http://localhost:8000`

To run a specific folder:
```bash
cd "01 variables and data types/1.1 basics"
php -S localhost:8000
```

**Method 2: Using XAMPP**
1. Move the project folder to:
   - Windows: `C:\xampp\htdocs\`
   - macOS: `/Applications/XAMPP/htdocs/`
   - Linux: `/opt/lampp/htdocs/`
2. Start Apache from XAMPP Control Panel
3. Access via `http://localhost/php-learning/`

**Method 3: Running Individual PHP Files**

For command-line execution:
```bash
php "01 variables and data types/1.1 basics/index.php"
```

### Navigation Tips

- Each folder contains self-contained examples
- Most folders have an `index.php` file as the entry point
- Start from `01 variables and data types` and progress sequentially
- Code is commented for better understanding

## 🙏 Acknowledgements

- [FreeCodeCamp](https://www.freecodecamp.org/) - For the comprehensive PHP Programming Language Tutorial
- [PHP.net](https://www.php.net/) - Official PHP documentation and reference
- [W3Schools](https://www.w3schools.com/php/) - For quick syntax references and examples
- [Stack Overflow](https://stackoverflow.com/) - For community support and problem-solving
- The PHP community for creating excellent learning resources

---

**Note:** This repository is for educational purposes and documents my learning journey with PHP. Feel free to explore, learn, and provide feedback!