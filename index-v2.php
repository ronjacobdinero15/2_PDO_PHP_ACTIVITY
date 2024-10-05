<?php require_once 'core/dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $query = "INSERT INTO Student (Student_id, Name, Email, Progress, Attendance, Homework_submission) VALUES(?,?,?,?,?,?)";

        $stmt = $pdo->prepare($query);

        $executeQuery = $stmt->execute(
            [11, "Ron Jacob", "ronjacobdinero15@gmail.com", "Completed", TRUE, 5]
        );

        if($executeQuery) {
            echo "Query successful!";
        } else {
            echo "Query failed";
        }
    ?>
</body>
</html>