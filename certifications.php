<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Certifications</title>
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
        <h1>Certifications</h1>
    </header>
    <main>
        <?php
            $certifications = [
                [
                    'name' => 'AWS Certified Solutions Architect',
                    'issuer' => 'Amazon Web Services',
                    'date' => 'June 2022'
                ],
                [
                    'name' => 'Certified ScrumMaster (CSM)',
                    'issuer' => 'Scrum Alliance',
                    'date' => 'January 2023'
                ],
                [
                    'name' => 'Oracle Certified Java Programmer',
                    'issuer' => 'Oracle',
                    'date' => 'March 2021'
                ],
                [
                    'name' => 'Google Analytics Individual Qualification',
                    'issuer' => 'Google',
                    'date' => 'September 2022'
                ],
                [
                    'name' => 'Certified Ethical Hacker (CEH)',
                    'issuer' => 'EC-Council',
                    'date' => 'November 2021'
                ]
            ];
        ?>
    
        <!-- Displaying certifications data in table format -->
        <table>
            <thead>
                <tr>
                    <th>Certification</th>
                    <th>Issuer</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Iterate over the hardcoded certifications array and display each record in a table row
                foreach ($certifications as $certification) {
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($certification['name']) . '</td>';
                    echo '<td>' . htmlspecialchars($certification['issuer']) . '</td>';
                    echo '<td>' . htmlspecialchars($certification['date']) . '</td>';
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
