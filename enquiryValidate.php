<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $errors;
  # Cleaning & checking field
  function cleanInput($input, $field)
  {
    # Checking if field is empty
    if (empty($input) || $input == 'default') {
      array_push($errors, "Please enter the " . $field);
    }

    # Cleaning input
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
  }

  $name = cleanInput($_POST['name'], "Name");
  $dob = cleanInput($_POST['dob'], "Date of Birth"); // NTV (Not to validate)
  $gender = cleanInput($_POST['gender'], "Gender"); // NTV
  $enrollGrade = cleanInput($_POST['enroll-grade'], "Enroll Grade"); // NTV
  $year = cleanInput($_POST['year'], "Academic Year"); // NTV
  $currentSchool = cleanInput($_POST['current-school'], "School currently studying in");
  $motherName = cleanInput($_POST['mother-name'], "Mother's Name");
  $fatherName = cleanInput($_POST['father-name'], "Father's Name");
  $contactNumber = cleanInput($_POST['contact-number'], "Contact no.");
  $email = cleanInput($_POST['email'], "Email address");
  $address = cleanInput($_POST['address'], "Address");

  // =====================
  # ==== Validation ==== #
  // =====================

  $patternName = "/^[a-zA-Z- ']*$/i";

  if (!preg_match($patternName, $name))
    array_push($errors, "Only letters and whitespaces are allowed in name");

  if (!preg_match($patternName, $motherName))
    array_push($errors, "Only letters and whitespaces are allowed in mother's name");

  if (!preg_match($patternName, $fatherName))
    array_push($errors, "Only letters and whitespaces are allowed in father's name");

  if (!preg_match($patternName, $currentSchool))
    array_push($errors, "Only letters and whitespaces are allowed in school's name");

  if (!preg_match("/^[0-9]*$/i", $contactNumber))
    array_push($errors, "Please enter a valid contact number");

  if (strlen($contactNumber) != 10)
    array_push($errors, "Please enter a valid contact number");

  if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    array_push($errors, "Please enter a valid email address");

  # Check for Errors
  if ($errors != "") {
    foreach ($errors as $error) {
      echo $error . "<br>";
    }
?>
    <script>
      alert("There was an error");
    </script>
  <?php
    exit("Error");
  }

  // ====================
  # ==== Send Mail ==== #
  // ====================

  $to = "office@dps.ac.in"; # Reciever email address

  $subject = "New Admission Enquiry"; # Subject

  // Message
  $message = "Name: "  . $name . "\r\n";
  $message .= "DOB: "  . $dob . "\r\n";
  $message .= "Gender: "  . $gender . "\r\n";
  $message .= "Enrolling Grade: "  . $enrollGrade . "\r\n";
  $message .= "Academic Year: "  . $year . "\r\n";
  $message .= "School currently studying in : "  . $currentSchool . "\r\n";
  $message .= "Mother's : "  . $motherName . "\r\n";
  $message .= "Father's Name : "  . $fatherName . "\r\n";
  $message .= "Contact Number: "  . $contactNumber . "\r\n";
  $message .= "Email : "  . $email . "\r\n";
  $message .= "Address: "  . $address . "\r\n";

  // Headers
  $headers = "";
  $headers .= "<From:ea@dps.ac.in";
  $headers .= "MIME-Version: 1.0";

  // Sending mail
  if (mail($to, $subject, $message, $headers)) {
  ?>
    <script>
      alert("Admission enquiry successful");
    </script>
<?php
  }
}
?>
<script>
  window.location.href = "enquiry.html";
</script>