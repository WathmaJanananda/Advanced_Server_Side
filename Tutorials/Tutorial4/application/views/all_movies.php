<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Movies</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            color: #ffffff;
            margin: 20px;
            line-height: 1.6;
        }

        h1 {
            color: #ffffff;
            text-align: center;
            margin-bottom: 30px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        li {
            background-color: #ffffff;
            border: 2px solid #2933F8;
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            flex: 0 0 calc(33.33% - 20px);
            box-sizing: border-box;
            margin-right: 20px;
        }

        li:hover {
            transform: scale(1.03);
            background-color: #99C9F9;
            border-color: #ffffff;
        }

        li strong {
            color: #2933F8;
            display: inline-block;
            margin-bottom: 10px;
            font-weight: bold;
            font-size: 16px;
        }

        p {
            text-align: center;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <h1>All Movies</h1>
    <?php if ($movies !== false): ?>
        <ul>
            <?php foreach ($movies as $movie): ?>
                <li>
                    <strong>Title:</strong> <span style="color: #333;"> <?php echo $movie['title']; ?> </span><br>
                    <strong>Genre:</strong> <span style="color: #333;"> <?php echo $movie['genre']; ?></span> <br>
                    <strong>Director:</strong> <span style="color: #333;"> <?php echo $movie['director']; ?> </span><br>
                    <strong>Release Date:</strong>  <span style="color: #333;"><?php echo $movie['release_year']; ?> </span><br>
                    <strong>IMDB Rating:</strong>  <span style="color: #333;"><?php echo $movie['imdb_rating']; ?> </span><br>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No movies found.</p>
    <?php endif; ?>
</body>
</html>
