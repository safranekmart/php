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
if (!($con = mysqli_connect("sql5.webzdarma.cz","martinsafran2968","Phpjede123!","martinsafran2968")))
{
    die("Nelze se připojit k databázovému serveru!</body></html>");
}
mysqli_query($con,"SET NAMES 'utf8'");

if (isset($_POST['quest_text'])){
    mysqli_query($con,
            "INSERT INTO survey_questions(question_text) VALUES('" .
            addslashes($_POST["quest_text"]) . "')");
}
      
    $vysledek=mysqli_query($con,"SELECT question_text, question_id from survey_questions");
    if (mysqli_num_rows($vysledek)>0){
        while ($radek = mysqli_fetch_array($vysledek)){
            ?>
            <p><?php echo "Otázka ".$radek['question_id'].": ". $radek['question_text']." - <a href='theQuestion.php?id=".$radek['question_id']."'";?>>Klikni</a></p>

            <?php
    }
            }
mysqli_close($con); 
?>
    <h2>Anketa</h2>
    <form action="f1.php" method="POST">
        <textarea name="quest_text" cols="60" rows="10"></textarea><br>
    <input type="submit" value="Odeslat">
    </form>
</body>
</html>