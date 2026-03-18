<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Management</title>
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
                <h1>Admin Dashboard</h1>
                <p>Welcome back @adminbarangay.gov.ph</p>
            </div>
        </div>

        <!-- total residents, total users, activity -->
<div class="total-container">
    <section class="total">
        <div class="total-icons">
         <i class="fas fa-users"></i> </div>
          <p class="total-resident">Total Resident</p>
        <span class="number">1</span>
        <div class="filter-total"></div>
    </section>
    <section class="total">
        <div class="total-icons">
            <i class="fa-solid fa-user-plus"></i> </div>
        <p class="total-resident">Total Users</p>
        <span class="number">42</span>
        <div class="filter-total"></div>
    </section>
     <section class="total">
        <p class="total-resident">Recent activities</p>
        <span class="number">2</span>
        <div class="filter-total"></div>
    </section>
</div>

      <!-- User management -->
    <div class="user-cards">
    <section class="user-class">
        <h2 class="users-heading">User Management</h2>
        
        <div class="u-class header">
            <span class="col-email">Email</span>
            <span>Role</span>
            <span>Created</span>
            <span>Action</span>
        </div>

        <div class="u-class">
            <span class="col-email">zeref@gmail.com</span> 
            <span class="col-role">
            <span class="col-role">admin</span> </span> 
            <span>March 7, 2026</span>
            <span>Edit</span>
        </div>
    </section> </div>

       <!-- Activity Logs -->
        <section class="filters-card">
             <h3> Activity  Logs</h3>
               <div class="filter-controls">
                <div class="input-group">
                    <label>Filter by page</label>
                    <select><option>e.g.. Residents Aid Disctribution</option></select>
                </div>
                <div class="input-group">
                    <label for="join-date">Start Date:</label>
                    <input type="date" id="join-date" name="join_date">
                </div>
                 <div class="input-group">
                    <label for="join-date">End Date:</label>
                    <input type="date" id="join-date" name="join_date">
                </div>
            </div>
        </section>
          <div class="user-cards">
    <section class="user-class">
        <p class="users-heading">User Management</p>
        
        <div class="u-class header">
            <span class="col-email">Email</span>
            <span>Action</span>
            <span>Page</span>
            <span>Details</span>
            <span>Timestamp</span>
        </div>

        <div class="u-class">
            <span class="col-email">zeref@gmail.com</span> 
            <span class="col-role">
            <span class="col-role">update</span> </span> 
            <span>residents</span>
            <span>update....</span>
            <span>3/14/2026</span>
        </div>
    </section> </div>

  
        </section>
        </div>
    </section> </div>



    
  </section>
</div>
        
    </main>

</body>
</html>