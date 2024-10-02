<?php require_once 'core/dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
    

    <?php 
    
    $stmt = $pdo->prepare("SELECT * FROM customer");

    if ($stmt->execute()) {
        echo "<pre>";
     	print_r($stmt->fetchAll());
        echo "</pre>";
        }

    $stmt = $pdo->prepare("SELECT * FROM customer WHERE customer_id = 1");

    if ($stmt->execute()) {
        echo "<pre>";
        print_r($stmt->fetch());
        echo "</pre>";
        }


    // $query = "INSERT INTO servers  (server_id, username, first_name, last_name, time_in, time_out) VALUES (?,?,?,?,?,?)";

	// $stmt = $pdo->prepare($query);

	// $executeQuery = $stmt->execute(
	// 	[6,"IKA","aei","ouu",'Breakfast', 'Lunch']
	// );

	// if ($executeQuery) {
	// 	echo "Query successful!";
	// }
	// else {
	// 	echo "Query failed";
	// }

    // $query = "DELETE FROM servers 
    // 		  WHERE server_id = 6 ";
    
    // $stmt = $pdo->prepare($query);
    
    // $executeQuery = $stmt->execute();
    
    // if ($executeQuery) {
    //    echo "Deletion successful!";
    // }
    // else {
    //    echo "Query failed";
    // }

    // $query = "UPDATE servers 
    //         SET first_name = ?, last_name = ?
    // 		  WHERE server_id = 1";
    
    // $stmt = $pdo->prepare($query);
    
    // $executeQuery = $stmt->execute(
    // ["Levyy", "Ackerman"] );
    
    // if ($executeQuery) {
    // echo "Update successful!";
    // }
    // else {
    // echo "Query failed";
    // }
   
   
    $query = "SELECT * FROM customer";

    $stmt = $pdo->prepare($query);
	     $executeQuery = $stmt->execute();

	     if ($executeQuery) {
	 	$customers = $stmt->fetchAll();
	}

	 else {
 	echo "Query failed";
     }
    ?>
    <table>
    <tr>
			<th>Customer ID</th>
			<th>Username</th>
            <th>Order ID </th>
            <th>Server ID</th>
            <th>Tip ID</th>
		</tr>

        <?php foreach ($customers as $row) { ?>
        <tr>
            <td><?php echo $row['customer_id']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['order_id']; ?></td>
            <td><?php echo $row['server_id']; ?></td>
            <td><?php echo $row['tip_id']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>