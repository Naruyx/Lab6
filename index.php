<?php
    require_once('database.php');

    // Get orders
    $customerID = 1;

    $query = "SELECT orderID, orderDate FROM orders WHERE $customerID =1";
    $stmt = $db ->prepare($query);
    $stmt ->execute();
    $stmt ->store_result();
    
    $stmt ->bind_result($orderID, $orderDate);
    
?>

<head>
    <title> Orders </title>
    <link rel="stylesheet" type="text/css" href="lab7.css" />
</head>

<body>
    <div id ="page">
        
        <div id="header">
            <h1>Orders</h1>
        </div>
        
        <div id="main">
            
            <h1>Order List</h1>
            
            <div id="content">
                <!-- display a list of orders -->
                
                <table>
                    <tr>
                        <th>Order ID</th>
                        <th>Order Date</th>
                    </tr>
                    <?php while ($stmt ->fetch()) { ?>
                    <tr>
                        <td><?php echo $orderID; ?></td>
                        <td><?php echo $orderDate; ?></td>
                    </tr>
                    <!-- result set is available -->
                    
                    <?php }
                    
        $stmt ->free_result();
        $db ->close();?>
                </table>
                <br>
            </div>
        </div>
        
        <div id="footer">
            <p>&copy; <?php echo date("Y"); ?> Columbus State University</p>
        </div>
    </div>    
</body>        