<?php require_once 'core/dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, th, td {
            border: 2px solid red;
        }
    </style>
</head>
<body>
    <?php
        $query = "SELECT Name, Email FROM Student";

        $stmt = $pdo->prepare($query);
        $executeQuery = $stmt->execute();

        if ($executeQuery) {
            $students = $stmt->fetchAll();
        }
        else {
            echo "Query failed";
        }
	?>
	
	<table>
		<tr>
			<th>Student names</th>
			<th>Student emails</th>
		</tr>
		<?php foreach ($students as $row) { ?>
		<tr>
			<td><?php echo $row['Name']; ?></td>
			<td><?php echo $row['Email']; ?></td>
		</tr>
		<?php } ?>
	</table> 
    ?>  
</body>
</html>