<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<?php
$name = "Rabiatul Adawiyah";
$matric_number = "AI220098";
$course = "Software Engineering";
$year_of_study = "Year 3";
$address = "12, Jalan Universiti, Batu Pahat.";
?>

<table>
    <tr>
        <th>Field</th>
        <th>Details</th>
    </tr>
    <tr>
        <td>Name</td>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <td>Matric Number</td>
        <td><?php echo $matric_number; ?></td>
    </tr>
    <tr>
        <td>Course</td>
        <td><?php echo $course; ?></td>
    </tr>
    <tr>
        <td>Year of Study</td>
        <td><?php echo $year_of_study; ?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo $address; ?></td>
    </tr>
</table>

</body>
</html>
