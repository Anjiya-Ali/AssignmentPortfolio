<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Projects</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="education.php">Education</a></li>
            </ul>
        </nav>
        <h1>Projects</h1>
    </header>
    <main>
        <form method="POST">
            <input type="text" name="tech_filter" placeholder="Filter by technology" value="<?php echo $_POST['tech_filter'] ?? ''; ?>">
            <button type="submit">Filter</button>
        </form>

        <?php
            $projects = [
                [
                    'name' => 'Project Management Tool',
                    'description' => 'A tool for managing projects and tasks.',
                    'technology' => 'Java'
                ],
                [
                    'name' => 'Weather App',
                    'description' => 'A mobile app providing weather forecasts.',
                    'technology' => 'JavaScript'
                ],
                [
                    'name' => 'E-commerce Platform',
                    'description' => 'A web-based e-commerce platform.',
                    'technology' => 'PHP'
                ],
                [
                    'name' => 'Chatbot',
                    'description' => 'A chatbot for providing customer support.',
                    'technology' => 'Python'
                ],
                [
                    'name' => 'Social Media Analysis',
                    'description' => 'Analysis of social media trends.',
                    'technology' => 'R'
                ]
            ];

            $tech_filter = isset($_POST['tech_filter']) ? $_POST['tech_filter'] : '';

            $filtered_projects = array_filter($projects, function($project) use ($tech_filter) {
                return stripos($project['technology'], $tech_filter) !== false;
            });

            if (count($filtered_projects) > 0) {
                echo '<ul>';
                foreach ($filtered_projects as $project) {
                    echo '<li><strong>' . htmlspecialchars($project['name']) . '</strong>: ' . htmlspecialchars($project['description']) . ' (Tech: ' . htmlspecialchars($project['technology']) . ')</li>';
                }
                echo '</ul>';
            } else {
                echo '<p>No projects found for the specified technology.</p>';
            }
        ?>
    </main>
    <footer>
        <p>&copy; 2024 Anjiya</p>
    </footer>
</body>

</html>
