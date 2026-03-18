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
                <h1>Residents</h1>
                <p>Manage resident records and information</p>
            </div>
            <button class="btn-add"><i class="fas fa-user-plus"></i> Add Resident</button>
        </div>

        <!-- filter group -->

      
        <section class="filters-card">
            <h3><i class="fas fa-filter"></i> Filters</h3>
            <div class="filter-controls">
                <div class="input-group">
                    <label>Age Category</label>
                    <select><option>All</option></select>
                </div>
                <div class="input-group">
                    <label>Age Range</label>
                    <select><option>All</option></select>
                </div>
            </div>

  
        </section>


      <!-- Resident group -->
     
        <div class="resident-grid">
            <div class="resident-card">
                <div class="card-header">
                    <div>
                        <h2 class="resident-name">Juan Dela Cruz</h2>
                        <span class="resident-id">BR001</span>
                    </div>
                    <div class="card-actions">
                        <button class="btn-icon edit"><i class="fas fa-edit"></i></button>
                        <button class="btn-icon delete"><i class="fas fa-trash"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="info-row"><span>Age:</span> <strong>65 years</strong></div>
                    <div class="info-row"><span>Address:</span> <strong>Barangay Hall Street</strong></div>
                    <div class="info-row"><span>Contact:</span> <strong>09123456789</strong></div>
                    <div class="info-row"><span>Civil Status:</span> <strong>Single</strong></div>
                    <div class="info-row"><span>Years Living:</span> <strong>40 years</strong></div>
                </div>
            </div>
        </div>

</div>
    </main>

</body>
</html>