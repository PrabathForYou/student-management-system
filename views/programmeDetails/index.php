<?php
require_once("../../database/Database.php");
require_once("../../database/ProgrammeDetails.php");

$database = new Database();
$programmingDetails = new ProgrammeDetails();
ob_start();
?>
    <div>
        <h2>Programming Details<h2>
    </div>
    <div id="content" class="programming-details-table">
        <div>
            <button onclick="addNewProgramme()">
                Add New Programme 
            </button>
        </div>
        <table class="details-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Code</th>
                    <th>No. of Semesters</th>
                    <th>Graduation Level</th>
                    <th>Technical Level</th>
                    <th>Department ID</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $tableContent = $programmingDetails->getAllProgrammeDetails($database);
                    if (!empty($tableContent)) {
                        foreach ($tableContent as $row) {
                            echo '<tr>';
                            echo '<td>' . htmlspecialchars($row['id']) . '</td>';
                            echo '<td>' . htmlspecialchars($row['title']) . '</td>';
                            echo '<td>' . htmlspecialchars($row['code']) . '</td>';
                            echo '<td>' . htmlspecialchars($row['no_of_sem']) . '</td>';
                            echo '<td>' . htmlspecialchars($row['graduation_level']) . '</td>';
                            echo '<td>' . htmlspecialchars($row['technical_level']) . '</td>';
                            echo '<td>' . htmlspecialchars($row['department_id'] || $row['department_id']) . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo '<tr><td colspan="7" style="text-align: center; padding: 20px;">No data available</td></tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>

    <style>
        .programming-details-table
        {
            width: 100%;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .details-table
        {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }

        .details-table thead
        {
            background-color: #2c3e50;
            color: white;
        }

        .details-table thead th
        {
            padding: 15px;
            text-align: left;
            font-weight: 600;
            border-bottom: 2px solid #34495e;
        }

        .details-table tbody tr
        {
            border-bottom: 1px solid #ecf0f1;
            transition: background-color 0.3s ease;
        }

        .details-table tbody tr:hover
        {
            background-color: #ecf0f1;
        }

        .details-table tbody tr:nth-child(even)
        {
            background-color: #f9f9f9;
        }

        .details-table tbody tr:nth-child(even):hover
        {
            background-color: #ecf0f1;
        }

        .details-table tbody td
        {
            padding: 12px 15px;
            color: #555;
        }
    </style>

    <script>
        function addNewProgramme() {
            window.location.href = 'create.php';
        }
    </script>
<?php

$content = ob_get_clean();
include '../base.php';