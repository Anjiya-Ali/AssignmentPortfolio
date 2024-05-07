<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Education</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="education.php">Education</a></li>
            </ul>
        </nav>
        <h1>Education</h1>
    </header>
    <main>
        <?php
            $education = [
                [
                    'course' => 'Bachelor of Science in Computer Science',
                    'institution' => 'University of Example',
                    'year' => 2022
                ],
                [
                    'course' => 'High School Diploma',
                    'institution' => 'Example High School',
                    'year' => 2018
                ],
                [
                    'course' => 'Advanced Java Programming',
                    'institution' => 'Online Course',
                    'year' => 2023
                ],
                [
                    'course' => 'Data Structures and Algorithms',
                    'institution' => 'University of Example',
                    'year' => 2021
                ],
                [
                    'course' => 'Web Development Bootcamp',
                    'institution' => 'Coding Bootcamp',
                    'year' => 2020
                ]
            ];
        ?>
        <table>
            <thead>
                <tr>
                    <th>Course</th>
                    <th>Institution</th>
                    <th>Year</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Iterate over the hardcoded education array and display each record in a table row
                foreach ($education as $record) {
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($record['course']) . '</td>';
                    echo '<td>' . htmlspecialchars($record['institution']) . '</td>';
                    echo '<td>' . htmlspecialchars($record['year']) . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </main>
    <footer>
        <p>&copy; 2024 Anjiya</p>
    </footer>
</body>

</html>
