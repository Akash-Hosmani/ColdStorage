<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('meta_tag.php'); ?>
</head>
<body class="app sidebar-mini rtl">
    <!-- Navbar -->
    <?php include('header.php'); ?>
    
    <!-- Sidebar menu -->
    <?php include('sidebar.php'); ?>
    
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-th-list"></i> Freezer Details</h1>
            </div>
        </div>
      
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th>Sl no</th>
                                    <th>Storage Name</th>
                                    <th>Freezer No</th>
                                    <th>Capacity</th>
                                    <th>Available Storage</th>
                                    <th>Request Now</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include('../dbconnect/dbconnect.php');

                                // Retrieve sid safely
                                $sid = isset($_REQUEST['sid']) ? $_REQUEST['sid'] : 0;

                                // Prepared statement to prevent SQL injection
                                $stmt = $conn->prepare("SELECT fd.Freezer_id, fd.Freezer_no, fd.Capacity, sd.Storage_name
                                                         FROM freezer_details fd
                                                         JOIN storage_details sd ON fd.Storage_details_id = sd.Storage_details_id
                                                         WHERE sd.Storage_details_id = ?");
                                $stmt->bind_param("i", $sid);
                                $stmt->execute();
                                $result = $stmt->get_result();

                                $sl = 1;
                                while ($row = $result->fetch_assoc()) {
                                    $Freezer_id = $row['Freezer_id'];
                                    
                                    // Prepare and execute a query to get quantity from allout_freezer
                                    $quantity_stmt = $conn->prepare("SELECT SUM(Quantity) AS TotalQuantity FROM allout_freezer WHERE Freezer_id = ?");
                                    $quantity_stmt->bind_param("i", $Freezer_id);
                                    $quantity_stmt->execute();
                                    $quantity_result = $quantity_stmt->get_result();
                                    $quantity_row = $quantity_result->fetch_assoc();
                                    $total_quantity = $quantity_row['TotalQuantity'] ? $quantity_row['TotalQuantity'] : 0;
                                    
                                    // Calculate available storage
                                    $available_storage = $row['Capacity'] - $total_quantity;
                                    
                                    ?>
                                    <tr>
                                        <td><?php echo $sl++; ?></td>
                                        <td><?php echo htmlspecialchars($row['Storage_name']); ?></td>
                                        <td><?php echo htmlspecialchars($row['Freezer_no']); ?></td>
                                        <td><?php echo htmlspecialchars($row['Capacity']); ?></td>
                                        <td><?php echo $available_storage > 0 ? $available_storage : 'N/A'; ?></td>
                                        <td><a href='former_request_form.php?Freezer_id=<?php echo $row['Freezer_id']; ?>'><i class='fa fa-plus'></i> Request Now</a></td>
                                    </tr>
                                    <?php
                                }

                                // Close statements and connection
                                $stmt->close();
                                $quantity_stmt->close();
                                $conn->close();
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <!-- Essential javascripts for application to work -->
    <?php include('script.php'); ?>
    <?php include('footer.php'); ?>
</body>
</html>
