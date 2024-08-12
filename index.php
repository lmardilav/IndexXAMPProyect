<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My XAMPP Projects</title>
    <style>
 	h1 {
	 text-align: center;
            margin-bottom: 20px;
            color: #ff5200;

	}
        body {
            font-family: Arial, sans-serif;
            background-color: #252622;
            color: #333;
            padding: 20px;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .project {
            width: 23%;
            background-color: #fff;
            padding: 10px;
            margin: 10px 0;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .project a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
        .project a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>

<h1>My XAMPP Projects</h1>
<div class="container">
    <?php
    // Path to your XAMPP htdocs directory
    $dir = 'C:/xampp/htdocs';
    $projects = array_diff(scandir($dir), array('..', '.'));

    $i = 0;
    foreach ($projects as $project) {
        if (is_dir($dir . '/' . $project)) {
            echo '<div class="project"><a href="http://localhost/' . $project . '">' . ucfirst($project) . '</a></div>';
            $i++;
            if ($i % 8 == 0) {
                echo '</div><div class="container">';
            }
        }
    }
    ?>
</div>

</body>
</html>
