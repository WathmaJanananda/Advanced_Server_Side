<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies based on the genres</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1f1f1f;
            color: #ffffff;
            margin: 20px;
            line-height: 1.6;
        }

        h1 {
            color: #ffffff;
            text-align: center;
            margin-bottom: 30px;
            font-size: 28px;
            text-transform: uppercase;
        }

        ul {
            list-style-type: none;
            padding: 0;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        li {
            background-color: #ffffff;
            border: 2px solid #2933F8;
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 8px;
            transition: transform 0.3s ease-in-out;
            box-sizing: border-box;
        }

        li:hover {
            transform: scale(1.03);
            background-color: #99C9F9;
            color: #fff;
        }

        li strong {
            color: #2933F8;
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            font-size: 16px;
        }

        p {
            text-align: center;
            color: #ffffff;
            font-size: 18px;
        }

        span {
            color: #cccccc;
        }
    </style>
</head>
<body>
<h1>Movies based on the genre: <?php echo $genre; ?></h1> <!-- Display the genre -->
    <?php if ($movies !== false): ?>
        <ul>
            <?php foreach ($movies as $movie): ?>
                <li>
                    <strong>Title:</strong> <span style="color: #333;"><?php echo $movie['title']; ?></span> <br>
                    <strong>Genre:</strong> <span style="color: #333;"><?php echo $movie['genre']; ?></span> <br>
                    <strong>Director:</strong> <span style="color: #333;"><?php echo $movie['director']; ?></span> <br>
                    <strong>Release Date:</strong> <span style="color: #333;"><?php echo $movie['release_year']; ?></span> <br>
                    <strong>IMDB Rating:</strong> <span style="color: #333;"><?php echo $movie['imdb_rating']; ?></span> <br>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No movies found.</p>
    <?php endif; ?>
</body>
</html>
