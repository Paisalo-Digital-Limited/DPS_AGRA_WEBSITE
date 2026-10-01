<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Upload Transfer Certificate</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: #f5f7fa;
            text-align: center;
            padding: 50px;
        }
        .box {
            background: white;
            padding: 30px;
            border-radius: 12px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            animation: slideIn 1s ease;
        }
        input[type="text"], input[type="file"] {
            width: 100%;
            padding: 12px;
            margin: 15px 0;
            border-radius: 6px;
            border: 1px solid #ddd;
        }
        input[type="submit"], .logout-btn {
            background-color: #007bff;
            color: white;
            padding: 12px;
            border: none;
            cursor: pointer;
            border-radius: 6px;
            font-size: 16px;
            margin-top: 10px;
            transition: background 0.3s ease;
        }
        input[type="submit"]:hover, .logout-btn:hover {
            background-color: #0056b3;
        }
        @keyframes slideIn {
            from { opacity: 0; transform: translateY(-20px);}
            to { opacity: 1; transform: translateY(0);}
        }
    </style>
</head>
<body>
    <div class="box">
				<img src="1.gif" height=100 width=110>
		        <h2>Data Uploading Service Panel</h2>
        <h4>Upload Transfer Certificate</h4>
        <form method="POST" action="upload_tc.php" enctype="multipart/form-data">
            <input type="text" name="enrollment_no" placeholder="Enrollment Number" required><br>
            <input type="file" name="tc_file" accept=".pdf" required><br>
            <input type="submit" name="upload" value="Upload TC">
        </form>
        <form method="POST" action="logout.php">
            <button class="logout-btn">Logout</button>
        </form>

      <?php
        if (isset($_POST['upload'])) {
            $enrollment_no = htmlspecialchars($_POST['enrollment_no']);
            $file = $_FILES['tc_file'];

            $upload_dir = 'tc_files/';
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }

            $file_ext = pathinfo($file['name'], PATHINFO_EXTENSION);
            $new_file_name = $enrollment_no . '.' . $file_ext;
            $target_file = $upload_dir . $new_file_name;

            if (move_uploaded_file($file['tmp_name'], $target_file)) {
                echo "<p style='color:green;'>Transfer Certificate Uploaded Successfully!</p>";
            } else {
                echo "<p style='color:red;'>Failed to upload file.</p>";
            }
        }
        ?>

    </div>
</body>
</html>
