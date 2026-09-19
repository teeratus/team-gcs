
<?php
    include '../config/db-connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All service orders</h1>


    <table border="1">
        <thead>
            <tr>
                <th>Service Orders ID</th>
                <th>SVO Code</th>
                <th>Customer ID</th>
                <th>Product Rent ID</th>
                <th>Counter Read ID</th>
                <th>Note 1</th>
                <th>Note 2</th>
                <th>Note 2 Staff ID</th>
                <th>Created At</th>
                <th>Staff ID</th>
                <th>Note 3</th>
                <th>Note 3 Staff ID</th>
                <th>Processing Date</th>
                <th>Note 4</th>
                <th>Note 4 Staff ID</th>
                <th>ECACC Invoice No</th>
                <th>Final Date</th>
                <th>SVO Status</th>
                <th>Discontinued</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // SELECT `service_orders_id`, `svo_code`, `customer_id`, `productRentID`, `counterReadID`, `note1`, `note2`, `note2_staff_id`, `created_at`, `staff_id`, `note3`, `note3_staff_id`, `processing_date`, `note4`, `note4_staff_id`, `ecacc_invoice_no`, `final_date`, `svo_status`, `Discontinued` FROM `09_service_orders` WHERE 1
                $stmt = $conn->query(
                    "SELECT `service_orders_id`, `svo_code`, 
                    `customer_id`, `productRentID`, 
                    `counterReadID`, `note1`, `note2`, `note2_staff_id`, 
                    `created_at`, `staff_id`, `note3`, `note3_staff_id`, 
                     `processing_date`, `note4`, `note4_staff_id`,
                    `ecacc_invoice_no`, `final_date`, `svo_status`, `Discontinued` 
                    FROM `09_service_orders`");
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>" . $row['service_orders_id'] . "</td>";
                    echo "<td>" . $row['svo_code'] . "</td>";
                    echo "<td>" . $row['customer_id'] . "</td>";
                    echo "<td>" . $row['productRentID'] . "</td>";
                    echo "<td>" . $row['counterReadID'] . "</td>";
                    echo "<td>" . $row['note1'] . "</td>";
                    echo "<td>" . $row['note2'] . "</td>";
                    echo "<td>" . $row['note2_staff_id'] . "</td>";
                    echo "<td>" . $row['created_at'] . "</td>";
                    echo "<td>" . $row['staff_id'] . "</td>";
                    echo "<td>" . $row['note3'] . "</td>";
                    echo "<td>" . $row['note3_staff_id'] . "</td>";
                    echo "<td>" . $row['processing_date'] . "</td>";
                    echo "<td>" . $row['note4'] . "</td>";
                    echo "<td>" . $row['note4_staff_id'] . "</td>";
                    echo "<td>" . $row['ecacc_invoice_no'] . "</td>";
                    echo "<td>" . $row['final_date'] . "</td>";
                    echo "<td>" . $row['svo_status'] . "</td>";
                    echo "<td>" . $row['Discontinued'] . "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>