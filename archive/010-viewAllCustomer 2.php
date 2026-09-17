<?php
include 'config/db-connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>View All Customers</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Customer Code</th>
                <th>Customer ID</th>
                <th>Customer Name 1</th>
                <th>Customer Name 2</th>
                <th>Customer Address 1</th>
                <th>Customer Address 2</th>
                
                <th>Phone 1</th>
                <th>Phone 2</th>
                <th>Phone 3</th>
                <th>Contact Person 1</th>
                <th>Contact Person 2</th>
                <th>Contact Person 3</th>
                <th>Email 1</th>
                <th>Email 2</th>
                <th>Email 3</th>
                <th>Customer Line ID 1</th>
                <th>Customer Line ID 2</th>
                <th>Customer Line ID 3</th>
                <th>AR Type</th>
                <th>Tax No</th>
                <th>Branch</th>
                <th>Payment Date</th>
                <th>Payment Limit</th>
                <th>Sales Staff ID</th>
                <th>Sales Price</th>
                <th>Sales Start Date</th>
                <th>Cust Status</th>
                <th>Note 1</th>
                <th>Note 2</th>
                <th>Discontinued</th>
            </tr>
        </thead>
        <tbody>
            <!-- Customer rows will be populated here -->
             <?php
                // SELECT `customer_code`, `customer_id`, `customer_name1`, `customer_name2`, `customer_address1`, `customer_address2`, `street`, `subdistrict_code`, `district_code`, `province_code`, `zip_code`, `phone1`, `phone2`, `phone3`, `contact_person1`, `contact_person2`, `contact_person3`, `email1`, `email2`, `email3`, `customer_line_id1`, `customer_line_id2`, `customer_line_id3`, `ar_type`, `tax_no`, `branch`, `payment_date`, `payment_limit`, `sales_staff_id`, `sales_price`, `sales_start_date`, `cust_status`, `note1`, `note2`, `Discontinued` FROM `customers2_tbl` WHERE 1
                $stmt = $conn->query("SELECT `customer_code`, `customer_id`, `customer_name1`, `customer_name2`, `customer_address1`, `customer_address2`, `street`, `subdistrict_code`, `district_code`, `province_code`, `zip_code`, `phone1`, `phone2`, `phone3`, `contact_person1`, `contact_person2`, `contact_person3`, `email1`, `email2`, `email3`, `customer_line_id1`, `customer_line_id2`, `customer_line_id3`, `ar_type`, `tax_no`, `branch`, `payment_date`, `payment_limit`, `sales_staff_id`, `sales_price`, `sales_start_date`, `cust_status`, `note1`, `note2`, `Discontinued` FROM `customers2_tbl` WHERE 1");
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>" . $row['customer_code'] . "</td>";
                    echo "<td>" . $row['customer_id'] . "</td>";
                    echo "<td>" . $row['customer_name1'] . "</td>";
                    echo "<td>" . $row['customer_name2'] . "</td>";
                    echo "<td>" . $row['customer_address1'] . "</td>";
                    echo "<td>" . $row['customer_address2'] . "</td>";

                    echo "<td>" . $row['phone1'] . "</td>";
                    echo "<td>" . $row['phone2'] . "</td>";
                    echo "<td>" . $row['phone3'] . "</td>";
                    echo "<td>" . $row['contact_person1'] . "</td>";
                    echo "<td>" . $row['contact_person2'] . "</td>";
                    echo "<td>" . $row['contact_person3'] . "</td>";
                    echo "<td>" . $row['email1'] . "</td>";
                    echo "<td>" . $row['email2'] . "</td>";
                    echo "<td>" . $row['email3'] . "</td>";
                    echo "<td>" . $row['customer_line_id1'] . "</td>";
                    echo "<td>" . $row['customer_line_id2'] . "</td>";
                    echo "<td>" . $row['customer_line_id3'] . "</td>";
                    echo "<td>" . $row['ar_type'] . "</td>";
                    echo "<td>" . $row['tax_no'] . "</td>";
                    echo "<td>" . $row['branch'] . "</td>";
                    echo "<td>" . $row['payment_date'] . "</td>";
                    echo "<td>" . $row['payment_limit'] . "</td>";
                    echo "<td>" . $row['sales_staff_id'] . "</td>";
                    echo "<td>" . $row['sales_price'] . "</td>";
                    echo "<td>" . $row['sales_start_date'] . "</td>";
                    echo "<td>" . $row['cust_status'] . "</td>";
                    echo "<td>" . $row['note1'] . "</td>";
                    echo "<td>" . $row['note2'] . "</td>";
                    echo "<td>" . $row['Discontinued'] . "</td>";
                    echo "</tr>";
                }
             ?>
        </tbody>
    </table>
</body>
</html>