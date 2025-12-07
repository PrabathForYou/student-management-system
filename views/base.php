<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Management System</title>
        <!-- <link href="/css/style.css" rel="stylesheet"> -->
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background-color: #f5f5f5;
                color: #333;
                line-height: 1.6;
            }

            .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 20px;
            }

            header {
                background-color: #2c3e50;
                color: white;
                padding: 20px 0;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }

            nav {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .logo h1 {
                font-size: 28px;
                font-weight: bold;
            }

            .nav-menu {
                display: flex;
                list-style: none;
                gap: 30px;
            }

            .nav-menu a {
                color: white;
                text-decoration: none;
                transition: color 0.3s ease;
            }

            .nav-menu a:hover {
                color: #3498db;
            }

            main {
                padding: 40px 20px;
                min-height: calc(100vh - 200px);
            }

            footer {
                background-color: #2c3e50;
                color: white;
                text-align: center;
                padding: 20px 0;
                margin-top: 40px;
            }
        </style>
    </head>
    <body>
        <header>
            <nav class="navbar">
                <div class="container" style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                    <div class="logo">
                        <h1>SMS</h1>
                    </div>
                        <?php
                            if (!isset($content)) {
                                $content = isset($_POST['content']) ? $_POST['content'] : '';
                            }
                        ?>
                    <ul class="nav-menu">
                        <li><a href="#home">Home</a></li>
                        <li><a href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/views/programmeDetails/index.php'; ?>">View Programmes</a></li>
                        <li><a href="#departments">Departments</a></li>
                        <li><a href="#students">Students</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <main>
        <?php
            echo $content;
        ?>
        </main>

        <footer>
            <div class="container">
                <p>&copy; 2024 Student Management System. All rights reserved.</p>
            </div>
        </footer>

        <script src="/global/jquery.js"></script>
        <!-- <script src="/js/main.js"></script> -->
    </body>
</html>
