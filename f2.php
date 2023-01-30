<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>

<?php
if (!($con = mysqli_connect("localhost","survey_user","password","survey_db")))
{
    die("Nelze se připojit k databázovému serveru!</body></html>");
}
mysqli_query($con,"SET NAMES 'utf8'");

$question=mysqli_query($con, "SELECT * from surwey_questions")

if(mysqli_num_rows($questions)>0){

}
$answers=mysqli_query($con, "SELECT * from survey_answers")


?>
</body>
</html>