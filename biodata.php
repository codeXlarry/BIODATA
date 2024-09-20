<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $positionDesired = htmlspecialchars($_POST['positionDesired']);
    $date = htmlspecialchars($_POST['date']);
    $name = htmlspecialchars($_POST['name']);
    $nickname = htmlspecialchars($_POST['nickname']);
    $presentAddress = htmlspecialchars($_POST['presentAddress']);
    $permanentAddress = htmlspecialchars($_POST['permanentAddress']);
    $placeOfBirth = htmlspecialchars($_POST['placeOfBirth']);
    $contactNo = htmlspecialchars($_POST['contactNo']);
    $email = htmlspecialchars($_POST['email']);
    $gender = htmlspecialchars($_POST['gender']);
    $age = htmlspecialchars($_POST['age']);
    $civilStatus = htmlspecialchars($_POST['civilStatus']);
    $religion = htmlspecialchars($_POST['religion']);
    $citizenship = htmlspecialchars($_POST['citizenship']);
    $language = htmlspecialchars($_POST['language']);
    $height = htmlspecialchars($_POST['height']);
    $weight = htmlspecialchars($_POST['weight']);
    $spouseName = htmlspecialchars($_POST['spouseName']);
    $spouseOccupation = htmlspecialchars($_POST['spouseOccupation']);
    $children = htmlspecialchars($_POST['children']);
    $fathersName = htmlspecialchars($_POST['fathersName']);
    $fathersOccupation = htmlspecialchars($_POST['fathersOccupation']);
    $mothersName = htmlspecialchars($_POST['mothersName']);
    $mothersOccupation = htmlspecialchars($_POST['mothersOccupation']);
    $emergencyContactName = htmlspecialchars($_POST['emergencyContactName']);
    $emergencyContactRelationship = htmlspecialchars($_POST['emergencyContactRelationship']);
    $emergencyContactAddress = htmlspecialchars($_POST['emergencyContactAddress']);
    $emergencyContactNo = htmlspecialchars($_POST['contactNo']);
    $primarySchool = htmlspecialchars($_POST['primarySchool']);
    $primarySchoolYear = htmlspecialchars($_POST['primarySchoolYear']);
    $highSchool = htmlspecialchars($_POST['highSchool']);
    $highSchoolYear = htmlspecialchars($_POST['highSchoolYear']);
    $college = htmlspecialchars($_POST['college']);
    $collegeYear = htmlspecialchars($_POST['collegeYear']);
    $degree = htmlspecialchars($_POST['degree']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Bio-Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="biodataPHP.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Bio-Data Submitted</h1>
        <div class="mt-4">
            
            <h2>Personal Information</h2>
            <p><strong>Position Desired:</strong> <?php echo $positionDesired; ?></p>
            <p><strong>Date:</strong> <?php echo $date; ?></p>
            <p><strong>Name:</strong> <?php echo $name; ?></p>
            <p><strong>Nickname:</strong> <?php echo $nickname; ?></p>
            <p><strong>Present Address:</strong> <?php echo $presentAddress; ?></p>
            <p><strong>Permanent Address:</strong> <?php echo $permanentAddress; ?></p>
            <p><strong>Place of Birth:</strong> <?php echo $placeOfBirth; ?></p>
            <p><strong>Contact No:</strong> <?php echo $contactNo; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Gender:</strong> <?php echo $gender; ?></p>
            <p><strong>Age:</strong> <?php echo $age; ?></p>
            <p><strong>Civil Status:</strong> <?php echo $civilStatus; ?></p>
            <p><strong>Religion:</strong> <?php echo $religion; ?></p>
            <p><strong>Citizenship:</strong> <?php echo $citizenship; ?></p>
            <p><strong>Language Spoken:</strong> <?php echo $language; ?></p>
            <p><strong>Height:</strong> <?php echo $height; ?> cm</p>
            <p><strong>Weight:</strong> <?php echo $weight; ?> kg</p>

            <?php if (!empty($spouseName)) { ?>
            <h2>Spouse Information</h2>
            <p><strong>Spouse's Name:</strong> <?php echo $spouseName; ?></p>
            <p><strong>Spouse's Occupation:</strong> <?php echo $spouseOccupation; ?></p>
            <?php } ?>
            
            <p><strong>Children's Names and Date of Birth:</strong> <?php echo nl2br($children); ?></p>

            <h2>Family Information</h2>
            <p><strong>Father's Name:</strong> <?php echo $fathersName; ?></p>
            <p><strong>Father's Occupation:</strong> <?php echo $fathersOccupation; ?></p>
            <p><strong>Mother's Name:</strong> <?php echo $mothersName; ?></p>
            <p><strong>Mother's Occupation:</strong> <?php echo $mothersOccupation; ?></p>

            <h2>Emergency Contact Information</h2>
            <p><strong>Contact Person:</strong> <?php echo $emergencyContactName; ?></p>
            <p><strong>Relationship:</strong> <?php echo $emergencyContactRelationship; ?></p>
            <p><strong>Emergency Contact Address:</strong> <?php echo $emergencyContactAddress; ?></p>
            <p><strong>Contact No:</strong> <?php echo $emergencyContactNo; ?></p>

            <h2>Educational Background</h2>
            <p><strong>Primary School:</strong> <?php echo $primarySchool; ?></p>
            <p><strong>Year Graduated (Primary):</strong> <?php echo $primarySchoolYear; ?></p>
            <p><strong>High School:</strong> <?php echo $highSchool; ?></p>
            <p><strong>Year Graduated (High School):</strong> <?php echo $highSchoolYear; ?></p>
            <?php if (!empty($college)) { ?>
            <p><strong>College:</strong> <?php echo $college; ?></p>
            <p><strong>Year Graduated (College):</strong> <?php echo $collegeYear; ?></p>
            <p><strong>Degree:</strong> <?php echo $degree; ?></p>
            <?php } ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
}
?>
