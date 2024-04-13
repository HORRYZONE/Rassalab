<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .header {
            height: 10%;
        }

        .sidebar {
            height: 90%;
            width: 20%;
            float: left;
        }

        .content {
            height: 90%;
            margin-left: 20%;
        }
        
        .projects {
            border-radius: 15px;
            background-color: #FFFFFF;
            padding: 20px;
            margin-right: 50px;
            align-items: center;
        }

        .projects-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .projects-text {
            font-family: "Roboto", sans-serif;
            font-size: 18px;
            font-weight: bold;
            color: #323138;
        }

        .add-client-button {
            border-radius: 8px;
            background-color: #F8F9FA;
            padding: 5px;
            border: none;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .button-container {
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #008DD4;
            border-radius: 5px; /* Add border radius */
            background-color: #FFFFFF;
            padding: 5px;
            height: 28px;
            width: 28px;
        }

        .button-text {
            font-family: "Roboto", sans-serif;
            font-size: 14px;
            font-weight: bold;
            color: #323138;
            padding: 5px 10px;
        }

        .projects-table {
            margin-top: 20px;
        }

        .projects-table table {
            width: 100%;
            border-collapse: collapse;
        }

        .projects-table th,
        .projects-table td {
            padding: 8px;
            text-align: left;
            border: none;  /* Remove cell borders */
        }

        .projects-table th {
            font-weight: bold;
            font-family: "Roboto", sans-serif;
            font-size: 10px;
            color: #A0AEC0;
            border-bottom: 1px solid #E2E8F0;
        }

        .projects-table td {
            font-family: "Roboto", sans-serif;
            font-size: 14px;
            font-weight: bold;
            color: #2D3748;
            border-bottom: 1px solid #E2E8F0;
        }

        .projects-table td:last-child {
            text-align: center;
        }

        .progress-bar {
            width: 100%;
            height: 10px;
            background-color: #f2f2f2;
            border-radius: 5px;
            overflow: hidden;
        }

        .progress-bar-fill {
            height: 100%;
            /* Ongoing color */
            background-color: #EFD80B;
        }

        .progress-bar-fill.completed {
            /* Completed color */
            background-color: #0BEF22;
        }

        .progress-bar-text {
            font-family: "Roboto", sans-serif;
            font-size: 12px;
            color: #2D3748;
            margin-top: 5px;
            text-align: right;
        }

        .edit-button {
            border-radius: 8px;
            background-color: #F8F9FA;
            padding: 5px 10px;
            font-family: "Roboto", sans-serif;
            font-size: 12px;
            font-weight: bold;
            border: none;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <div class="header">
        @include('header')
    </div>
    <div class="sidebar">
        @include('sidebar')
    </div>
    <div class="content">
        <div class="projects">
            <div class="projects-container">
                <div class="projects-text">
                    Projects
                </div>
                <div>
                    <button class="add-client-button">
                        <div class="button-container">
                        <img src="images/add-icon.svg" alt="add icon">
                        </div>
                        <span class="button-text">Add New Client</span>
                    </button>
                </div>
            </div>
           <div class="projects-table">
                <table>
                    <tr>
                        <th>Companies</th>
                        <th>Budget</th>
                        <th>Status</th>
                        <th>Completion</th>
                        <th>Edit</th>
                    </tr>
                    <tr>
                        <td>Company A</td>
                        <td>$10,000</td>
                        <td>In Progress</td>
                        <td>
                            <div class="progress-bar">
                                <div class="progress-bar-fill" style="width: 75%;"></div>
                            </div>
                            <div class="progress-bar-text">75%</div>
                        </td>
                        <td><button class="edit-button">Edit</button></td>
                    </tr>
                    <tr>
                        <td>Company B</td>
                        <td>$15,000</td>
                        <td>Completed</td>
                        <td>
                            <div class="progress-bar">
                                <div class="progress-bar-fill completed" style="width: 100%;"></div>
                            </div>
                            <div class="progress-bar-text">100%</div>
                        </td>
                        <td><button class="edit-button">Edit</button></td>
                    </tr>
                </table>
                </div>
        </div>
    </div>
</body>
</html>