<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Network Testing Tools</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            padding: 50px;
        }
        .box {
            background-color: #fff;
            padding: 20px;
            margin: 10px auto;
            border-radius: 8px;
            max-width: 400px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        button {
            padding: 10px 20px;
            margin-top: 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Network Testing Tools</h1>

    <div class="box">
        <h3>Your IP Address</h3>
        <?php
        $ip = $_SERVER['REMOTE_ADDR'];
        echo "<p>IP: " . $ip . "</p>";
        ?>
    </div>

    <div class="box">
        <h3>Ping Test</h3>
        <a href="ping.php"><button>Run Ping Test</button></a>
    </div>

    <div class="box">
        <h3>Upload Speed Test</h3>
        <a href="upload.php"><button>Run Upload Speed Test</button></a>
    </div>

    <div class="box">
        <h3>DNS Information</h3>
        <a href="dns.php"><button>Check DNS</button></a>
    </div>

    <div class="box">
        <h3>HTTP Request Test</h3>
        <a href="http_test.php"><button>Run HTTP Test</button></a>
    </div>
</body>
</html>
