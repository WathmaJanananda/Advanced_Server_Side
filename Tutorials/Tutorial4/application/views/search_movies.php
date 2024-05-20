<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Movies Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000000;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #container{
            width: 400px;
            background-color: #C5DAFF;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #4a90e2;
            margin-bottom: 30px;
        }

        #body {
            margin-top: 20px;
        }

        form {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333333;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4a90e2;
            color: #ffffff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #357ebd;
        }

        p {
            text-align: center;
            margin-top: 20px;
            color: #333333;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            text-align: center;
        }

        ul li {
            display: inline;
            margin-right: 10px;
        }

        ul li a {
            background-color: #4a90e2;
            color: #ffffff;
            padding: 8px 16px;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        ul li a:hover {
            background-color: #357ebd;
        }

    </style>
</head>
<body>

<div id="container">
    <h1>Search for Your Favorite Movies</h1>

    <div id="body">
    <?php echo form_open('movies/search'); ?>
        <label for="genre">Enter the genre of the movies you want:</label>
        <input type="text" id="genre" name="genre">
        <input type="submit" value="Search Movies">
    <?php echo form_close(); ?>

    <?php echo form_open('movies/search'); ?>
        <label for="title">Enter the title or partial title of the movie:</label>
        <input type="text" id="title" name="title">
        <input type="submit" value="Search Movies">
    <?php echo form_close(); ?>
    
    <p>If you want to view all movies, <?php echo anchor('movies/allmovies', 'click here'); ?></p>

    <h2>Browse by Genre:</h2>
    <ul>
        <li><?php echo anchor('movies/genre/Action', 'Action'); ?></li>
        <li><?php echo anchor('movies/genre/Crime', 'Crime'); ?></li>
        <li><?php echo anchor('movies/genre/Drama', 'Drama'); ?></li>
        <li><?php echo anchor('movies/genre/Adventure', 'Adventure'); ?></li>
        <!-- Add more genres as needed -->
    </ul>
    </div>
</div>

</body>
</html>
