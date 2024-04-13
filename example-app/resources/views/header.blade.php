<!DOCTYPE html>
<html>
<head>
    <title>Website Header Example</title>
    <style>
        body {
            background-color: #F8F9FA;
        }
        
        header {
            background-color: #F8F9FA;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .container {
            display: flex;
            align-items: center;
        }
        
        .logo-name-container {
            display: flex;
            align-items: center;
            margin-right: 20px;
        }
        
        .logo {
            margin-right: 10px;
            max-width: 100%;
            height: auto;
        }
        
        .name {
            font-size: 20px;
            font-weight: bold;
        }
        
        .pagination-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-right: 10px;
        }
        
        .pagination-text {
            margin-bottom: 10px;
            font-family: "Roboto", sans-serif;
            font-size: 15px;
            font-weight: normal;
        }
        
        .current-page {
            font-family: "Roboto", sans-serif;
            font-size: 20px;
            font-weight: bold;
        }
        
        .profile-container {
            display: flex;
            align-items: center;
            background-color: blue; /* Set the default background color */
            cursor: default; /* Set the cursor to default */
            color: #718096; /* Set the text color to white */
        }
        
        .profile-container:hover {
            background-color: #FFFFFF; /* Change the background color on hover */
            cursor: pointer; /* Set the cursor to pointer on hover */
        }
        
        .profile-picture {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
            object-fit: cover;
            object-position: center;
        }
        
        .profile-name {
            font-family: "Roboto", sans-serif;
            font-size: 15px;
            font-weight: bold;
        }
        
        .logout-button {
            background-color: transparent;
            border: none;
            cursor: pointer;
        }
        
        .logout-container {
            display: none;
            padding: 10px;
            background-color: #FFFFFF;
            border: 1px solid #DDDDDD;
            border-radius: 4px;
            position: absolute;
            top: 60px;
            right: 20px;
        }
        
        .logout-text {
            font-family: "Roboto", sans-serif;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .logout-button-container {
            text-align: right;
        }
        
        .logout-button {
            padding: 5px 10px;
            background-color: #DDDDDD;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo-name-container">
                <img class="logo" src="images/logo.png" alt="Site Logo">
                <div class="name">
                    <img src="images/name.png" alt="Site Name">
                </div>
            </div>
        
            <div class="pagination-container">
                <div class="pagination-text">
                    Pages /
                </div>
                <div class="current-page">
                    Current Page
                </div>
            </div>
        </div>
        
        <?php
        // Assuming you have the profile information stored in variables
        $profilePicture = "images/Dann-pic.jpg";
        $profileName = "NOR DANISH FITRI BIN NOR SYAMAIZA";
        ?>

        <button class="profile-container logout-button">
            <img class="profile-picture" src="<?php echo $profilePicture; ?>" alt="Profile Picture">
            <div class="profile-name"><?php echo $profileName; ?></div>
        </button>
        
        <div class="logout-container" id="logoutContainer">
            <div class="logout-text">Are you sure you want to logout?</div>
            <div class="logout-button-container">
                <button class="logout-button" onclick="logout()">Logout</button>
            </div>
        </div>
    </header>

    <!-- Rest of your website content goes here -->

    <script>
        function logout() {
           // Perform logout actions here
            alert("Logged out successfully!");
        }

        const profileContainer = document.querySelector(".profile-container");
        const logoutContainer = document.getElementById("logoutContainer");

        profileContainer.addEventListener("mouseenter", function(){
            profileContainer.classList.add("active"); // Add the "active" class on hover
        });

        profileContainer.addEventListener("mouseleave", function() {
            profileContainer.classList.remove("active"); // Remove the "active" class when not hovering
        });

        profileContainer.addEventListener("click", function() {
            logoutContainer.style.display = "block";
        });
    </script>
</body>
</html>