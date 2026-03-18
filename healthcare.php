<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Management - Residents</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="navbar.css?v=2">
</head>
<body>
      <!-- Navbar group -->
 <div class= "info">
    <header class="header">
        
        <div class="flex">
            <a class="logo">
                <i class="fas fa-home"></i> 
                <span>Barangay Management</span>
            </a>

            <nav class="navbar">
                <a href="dashboard.php"><i class="fas fa-chart-line"></i> Dashboard</a>
                <a href="residents.php" class="active"><i class="fas fa-users"></i> Residents</a>
                <a href="aid.php"><i class="fas fa-box"></i> Aid</a>
                <a href="healthcare.php"><i class="fas fa-heart"></i> Healthcare</a>
                <a href="blotter.php"><i class="fas fa-exclamation-triangle"></i> Blotter</a>
                <a href="logout.php" class="logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </nav>

            <div class="icons">
                <div id="menu-btn" class="fas fa-bars"></div>
                <div id="user-btn" class="fas fa-user"></div>
            </div>
        </div>
    </header>

    <main class="main-container">
        
        <div class= "info">
        <div class="page-header">
            <div class="title-group">
                <h1>Healthcare Records</h1>
                <p>Track medical services and community health programs</p>
            </div>
        </div>

        <!-- filter group -->

      
        <section class="filters-card">
            <h3><i class="fas fa-filter"></i> Filters</h3>
            <div class="filter-controls">
                <div class="input-group">
                    <label>Service Type</label>
                    <select><option>All</option></select>
                </div>
                <div class="input-group">
                    <label>Status</label>
                    <select><option>All</option></select>
                </div>
                  <div class="input-group">
                    <label>Start Date</label>
                    <input type="date" id="join-date" name="join_date">
                </div>
                 <div class="input-group">
                    <label>End Date</label>
                    <input type="date" id="join-date" name="join_date">
                </div>
            </div>
         </section>

          </section>
          <div class="user-cards">
    <section class="user-class">
        
        <div class="u-class header">
            <span class="col-email">Resident</span>
            <span>Service Type</span>
            <span>Date</span>
            <span>Provider</span>
            <span>Status</span>
            <span>Created by</span>
        </div>
    </section> </div>



</div>
    </main>

</body>
</html>