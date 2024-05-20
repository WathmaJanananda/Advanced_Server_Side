<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinosaurs Period Information</title>
    <style>
        body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #232323;
            color: #ffffff;
            /* background: linear-gradient(135deg, #007bff, #560bad); */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        /* body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #007bff, #560bad);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        } */
        .container {
            max-width: 800px;
            padding: 40px;
            background-color: rgba(0, 0, 0, 0.8);
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.3);
            text-align: center;
            animation: slideIn 1s ease forwards;
        }
        /* .container {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            padding: 40px;
            text-align: center;
            max-width: 800px;
            width: 100%;
            animation: pulse 2s infinite alternate;
        } */

        @keyframes pulse {
            0% { transform: scale(1); }
            100% { transform: scale(1.03); }
        }

        h1 {
            color: #560bad;
            margin-bottom: 20px;
            font-weight: 700;
            font-size: 3rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #560bad;
            color: #fff;
            text-transform: uppercase;
        }

        td {
            background-color: #fff;
            color: #333;
        }

        .back-button {
            margin-top: 20px;
        }

        .back-button a {
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .back-button a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Period Information</h1>
        <table>
            <tr>
                <th>Category</th>
                <th>Information</th>
            </tr>
            <?php foreach ($period_info as $category => $info): ?>
                <tr>
                    <td><?php echo $category; ?></td>
                    <td><?php echo $info; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <div class="back-button">
            <a href="<?php echo site_url('Dinosaurs/periods'); ?>">Back to Periods</a>
        </div>
    </div>
</body>
</html>

