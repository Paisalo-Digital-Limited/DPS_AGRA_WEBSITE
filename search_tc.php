<!DOCTYPE html>
<html>
<head>
    <title>Search Transfer Certificate</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #89f7fe, #66a6ff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }
        .search-box {
            background: white;
            padding: 40px;
            border-radius: 12px;
            max-width: 600px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            animation: fadeUp 1s ease;
        }
        input[type="text"] {
            width: 85%;
            padding: 12px;
            margin: 15px 0;
            border-radius: 6px;
            border: 1px solid #ddd;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
            border-radius: 6px;
            font-size: 16px;
            transition: background 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
		input[type="button"] {
            background-color: #FFA500;
            color: white;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
            border-radius: 6px;
            font-size: 16px;
            transition: background 0.3s ease;
        }
        input[type="button"]:hover {
            background-color: #FF8C00;
        }
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(20px);}
            to { opacity: 1; transform: translateY(0);}
        }
    </style>
</head>
<body>
    <div class="search-box">
		<img src="1.gif" height=100 width=110>
		        <h3>File Service Pannel</h3>
        <h5>Search Your Transfer Certificate</h5>
        <form method="POST" action="search_tc.php">
            <input type="text" name="enrollment_no" placeholder="Enter Enrollment Number" required><br>
            <input type="submit" name="search" value="Search"><br><br><br>
			<a href="https://www.dps.ac.in"><input type="button" name="search" value="Back to Home Page"></a>
        </form>

        <?php
        if (isset($_POST['search'])) {
            $enrollment_no = htmlspecialchars($_POST['enrollment_no']);
            $file_path = 'tc_files/' . $enrollment_no . '.pdf';

            if (file_exists($file_path)) {
                echo "<p><a href='$file_path' target='_blank' style='color: #007bff; text-decoration: underline;'>View Transfer Certificate</a></p>";
            } else {
                echo "<p style='color:red;'>No Transfer Certificate found for Enrollment Number : $enrollment_no</p>";
            }
        }
        ?>
    </div>
</body>
</html>
