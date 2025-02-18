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
                    <!-- Search Form -->
                    <div class="tile-body">
                        <form method="GET" action="">
                            <div class="form-group">
                                <label for="searchSid">Search by Storage:</label>
                                <select id="searchSid" name="sid" class="form-control" required>
                                    <option value="">Select Storage</option>
                                    <?php
                                    include('../dbconnect/dbconnect.php');

                                    // Retrieve storage details for the dropdown
                                    $sql = "SELECT Storage_details_id, Storage_name FROM storage_details";
                                    $res = mysqli_query($conn, $sql);

                                    // Check for query success
                                    if (!$res) {
                                        die('Error: ' . mysqli_error($conn));
                                    }

                                    while ($row = mysqli_fetch_assoc($res)) {
                                        echo '<option value="' . htmlspecialchars($row['Storage_details_id']) . '">' . htmlspecialchars($row['Storage_name']) . '</option>';
                                    }

                                    mysqli_close($conn);
                                    ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                    </div>
                    
                    <div class="tile-body">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th>Sl no</th>
                                    <th>Storage Name</th>
                                    <th>Freezer No</th>
                                    <th>Capacity</th>
                                    <th>Available Storage</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include('../dbconnect/dbconnect.php');

                                // Retrieve sid safely
                                $sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;

                                if ($sid > 0) {
                                    // Prepared statement to prevent SQL injection
                                    $stmt = $conn->prepare("SELECT fd.Freezer_id, fd.Freezer_no, fd.Capacity, sd.Storage_name
                                                             FROM freezer_details fd
                                                             JOIN storage_details sd ON fd.Storage_details_id = sd.Storage_details_id
                                                             WHERE sd.Storage_details_id = ?");
                                    $stmt->bind_param("i", $sid);
                                    $stmt->execute();
                                    $result = $stmt->get_result();

                                    if ($result->num_rows > 0) {
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
                                                
                                            </tr>
                                            <?php
                                        }

                                        // Close the quantity statement
                                        $quantity_stmt->close();
                                    } else {
                                        echo "<tr><td colspan='6'>No records found</td></tr>";
                                    }

                                    // Close the main statement
                                    $stmt->close();
                                } else {
                                    echo "<tr><td colspan='6'>Please select a valid Storage ID</td></tr>";
                                }

                                // Close the connection
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
