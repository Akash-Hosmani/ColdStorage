<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('meta_tag.php'); ?>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }
    .app-title {
      margin-bottom: 20px;
    }
    .app-title h1 {
      margin: 0;
    }
    .tile-body {
      padding: 20px;
    }
    .gallery-container {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
      gap: 10px;
      margin: 0 auto;
      max-width: 1200px;
    }
    .gallery-item {
      position: relative;
      overflow: hidden;
      border-radius: 8px;
      cursor: pointer;
      background-color: #fff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .gallery-item img {
      width: 100%;
      height: auto;
      display: block;
      border-radius: 8px;
    }
    .gallery-item:hover .gallery-overlay {
      opacity: 1;
    }
    .gallery-overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.5);
      color: #fff;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      opacity: 0;
      transition: opacity 0.3s ease;
      padding: 10px;
      text-align: center;
    }
    .gallery-overlay p {
      margin: 0;
      font-size: 16px;
    }
    .gallery-overlay strong {
      display: block;
      margin: 5px 0;
    }
    .search-container {
      margin-bottom: 20px;
    }
    .search-container input {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ddd;
      border-radius: 4px;
    }
    /* Modal Styles */
    .modal {
      display: none;
      position: fixed;
      z-index: 1000;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0,0,0,0.8);
      align-items: center;
      justify-content: center;
    }
    .modal-content {
      margin: auto;
      display: block;
      max-width: 80%;
      max-height: 80%;
    }
    .modal-close {
      position: absolute;
      top: 15px;
      right: 35px;
      color: #fff;
      font-size: 40px;
      font-weight: bold;
      cursor: pointer;
    }
  </style>
</head>
<body class="app sidebar-mini rtl">
  <!-- Navbar -->
  <?php include('header.php'); ?>
  
  <!-- Sidebar menu -->
  <?php include('sidebar.php'); ?>
  
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-th-list"></i> Storage Gallery</h1>
      </div>
      <ul class="app-breadcrumb breadcrumb side">
        <!-- <li class="breadcrumb-item">Gallery</li>
        <li class="breadcrumb-item active"><a href="#">Images</a></li>-->
      </ul>
    </div>
    
    <div class="tile">
      <div class="tile-body">
        <!-- Search Bar -->
        <div class="search-container">
          <input type="text" id="searchInput" placeholder="Search by location..." onkeyup="filterGallery()">
        </div>
        
        <div class="gallery-container" id="galleryContainer">
          <?php
          include('../dbconnect/dbconnect.php');
          $sql = "SELECT * FROM storage_details";
          $res = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_array($res)) {
          ?>
		  <a href="freezer_details_view.php?sid=<?php echo $row['Storage_details_id']?>">
          <div class="gallery-item" data-location="<?php echo htmlspecialchars($row['Location']); ?>" >
            <img src="../uploads/<?php echo $row['Images']; ?>" alt="<?php echo htmlspecialchars($row['Storage_name']); ?>">
            <div class="gallery-overlay">
              <p><?php echo htmlspecialchars($row['Storage_name']); ?></p>
              
            </div>
			<strong>Storage Name: <?php echo htmlspecialchars($row['Storage_name']); ?></strong><br>
              <strong>Storage No: <?php echo htmlspecialchars($row['Storage_no']); ?></strong><br>
              <strong>Storage Capacity: <?php echo htmlspecialchars($row['Storage_capacity']); ?></strong><br>
              <strong>Location: <?php echo htmlspecialchars($row['Location']); ?></strong>
          </div>
		  </a>
          <?php
          }
          ?>
        </div>
      </div>
    </div>
    
    <!-- Modal -->
    <div id="myModal" class="modal">
      <span class="modal-close" onclick="closeModal()">&times;</span>
      <img class="modal-content" id="modal-img">
    </div>
  </main>
  
  <!-- Essential javascripts for application to work -->
  <?php include('script.php'); ?>

  <script>
    function openModal(src) {
      document.getElementById('modal-img').src = src;
      document.getElementById('myModal').style.display = 'flex';
    }

    function closeModal() {
      document.getElementById('myModal').style.display = 'none';
    }

    // Close the modal when clicking outside of the modal content
    window.onclick = function(event) {
      if (event.target == document.getElementById('myModal')) {
        closeModal();
      }
    }

    function filterGallery() {
      var input, filter, gallery, items, location, i, txtValue;
      input = document.getElementById('searchInput');
      filter = input.value.toUpperCase();
      gallery = document.getElementById('galleryContainer');
      items = gallery.getElementsByClassName('gallery-item');

      for (i = 0; i < items.length; i++) {
        location = items[i].getAttribute('data-location');
        txtValue = location || "";
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          items[i].style.display = "";
        } else {
          items[i].style.display = "none";
        }
      }
    }
  </script>

  <?php include('footer.php'); ?>
</body>
</html>
