<!DOCTYPE html>
<html>
<head>
    <title>Admin Login - TC Portal</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }
        .container {
            background: rgba(0,0,0,0.8);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }
        input[type="text"], input[type="password"] {
            width: 80%;
            padding: 12px;
            margin: 15px 0;
            border-radius: 6px;
            border: none;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            padding: 12px;
            border: none;
            cursor: pointer;
            width: 50%;
            border-radius: 6px;
            font-size: 18px;
            transition: background 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
		input[type="button"] {
            background-color: #FFA500;
            color: white;
            padding: 12px;
            border: none;
            cursor: pointer;
            width: 50%;
            border-radius: 6px;
            font-size: 18px;
            transition: background 0.3s ease;
        }
        input[type="button"]:hover {
            background-color: #FF8C00;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px);}
            to { opacity: 1; transform: translateY(0);}
        }
    </style>
</head>
<body>
    <div class="container">
		<img src="1.gif" height=100 width=110>
        <h1>Admin Login Panel</h1>
		        <h5>Transfer Certificate Upload Data Service System</h5>
        <form method="POST" action="admin_login.php">
            <input type="text" name="admin_id" placeholder="Admin ID" required>
            <input type="password" name="password" placeholder="Password" required><br><br>
            <input type="submit" name="login" value="Login"><br><br>
			<a href="https://www.dps.ac.in"><input type="button" name="website" value="Redirect to Main Website"></a>
        </form>

        <?php
        session_start();
        if (isset($_POST['login'])) {
            $admin_id = $_POST['admin_id'];
            $password = $_POST['password'];

            if ($admin_id === 'ea@dps.ac.in' && $password === 'reeti@123') {
                $_SESSION['admin_logged_in'] = true;
                header("Location: upload_tc.php");
                exit;
            } else {
                echo "<p style='color: #ff6b6b;'>Invalid ID or Password</p>";
            }
        }
        ?>
    </div>
</body>
</html>
