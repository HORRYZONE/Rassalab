<!DOCTYPE html>
<html>
<head>
    <title>Simple Sidebar</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #F8F9FA;
        }

        .sidebar {
            height: 100%;
            width: 200px;
            position: fixed;
        }

        .sidebar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .sidebar ul li {
            padding: 10px;
        }

        .sidebar ul li a {
            display: block;
            text-decoration: none;
            color: #000;
        }

        .sidebar ul li a:hover {
            background-color: #ddd;
        }

        .dashboard-container {
            border-radius: 15px;
            padding: 10px;
            height: 54px;
            width: 220px;
            background-color: #FFFFFF;
            color: #000;
            font-family: "Roboto", sans-serif;
            font-weight: bold;
            font-size: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .dashboard-container a {
            margin-left: 45px;
        }

        .blue-container {
            width: 50px;
            height: 50px;
            background-color: #008DD4;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .blue-container img {
            width: 30px;
            height: 30px;
        }
    </style>
</head>
<body>
    <?php
        // PHP code can be added here if necessary
    ?>
    <div class="sidebar">
        <ul>
            <li>
                <div class="dashboard-container">
                    <div class="blue-container">
                        <img src="images/home-icon.svg" alt="home icon">
                    </div>
                    <a href="/dashboard">Dashboard</a>  
                </div>
            </li>
        </ul>
    </div>
    
</body>
</html>