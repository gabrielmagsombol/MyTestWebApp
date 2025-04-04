<?php
$members = [
    [
        'name' => 'John Gabriel B. Magsombol',
        'role' => 'System Analyst / Documentator',
        'role_description' => 'Analyze designing solutions and ensures the project meets with technical feasibility and project objectives. ',
        'bio' => 'Gab is responsible for documenting all materials produced during each phase of the project and recording progress.',
        'address' => 'Dinalupihan, Bataan',
        'image' => 'gab.jpg' 
    ],
    [
        'name' => 'Ezekiel Nuguid',
        'role' => 'Project Manager',
        'role_description' => 'Overseas planning, execution, and completion of the project.',
        'bio' => 'Kiel is in charge of the overseas planning, execution, and completion of the project.',
        'address' => 'Dinalupihan, Bataan',
        'image' => 'kiel.jpg' 
    ],
    [
        'name' => 'Juan Carlo Esteban',
        'role' => 'UI Designer, Documentation',
        'role_description' => 'Focuses on the design and usability of the application, ensuring a seamless user experience.',
        'bio' => 'Charlie specializes in user interface and user experience design, ensuring that the application is user-friendly and visually appealing.',
        'address' => 'Dinalupihan, Bataan',
        'image' => 'juan.jpg' 
    ],
    [
        'name' => 'Aldrin Red Calma',
        'role' => 'Developer',
        'role_description' => 'Oversees the development team and is responsible for the technical architecture of the application.',
        'bio' => 'Aldrin is responsible for the architecture of the application.',
        'address' => 'Dinalupihan, Bataan',
        'image' => 'aldrin.jpg' 
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members</title>
    <link rel="stylesheet" href="member-style.css">
</head>
<body>
    <div class="admin-box">
        <h2>Members Description</h2>
        <ul>
            <?php foreach ($members as $member): ?>
                    <img src="<?php echo htmlspecialchars($member['image']); ?>" alt="<?php echo htmlspecialchars($member['name']); ?>" style="width: 300px; height: 300px; border-radius: 5%;">
                    <p><strong>Name:</strong> <?php echo htmlspecialchars($member['name']); ?></p>
                    <p><strong>Role:</strong> <?php echo htmlspecialchars($member['role']); ?></p>
                    <p><strong>Role Description:</strong> <?php echo htmlspecialchars($member['role_description']); ?></p>
                    <p><strong>Bio:</strong> <?php echo htmlspecialchars($member['bio']); ?></p>
                    <p><strong>Address:</strong> <?php echo htmlspecialchars($member['address']); ?></p>
                <hr>
            <?php endforeach; ?>
        </ul>
        <nav>
            <ul>
                <li><a href="admin.html">Admin</a></li>
                <li><a href="project-description.html">Project Description</a></li>
                <li><a href="members.php">Group Members</a></li>
                <li><button id="logout">Logout</button></li>
            </ul>
        </nav>
    </div>

    <script src="auth.js"></script>
</body>
</html>