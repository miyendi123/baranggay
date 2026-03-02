<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resident Management</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <div class="container">
        <header class="header">
            <div class="title-group">
                <h1>Residents</h1>
                <p>Manage resident records and information</p>
            </div>
            <button class="btn-add"><i class="fa-solid fa-user-plus"></i> Add Resident</button>
        </header>

        <section class="filters-card">
            <h3><i class="fa-solid fa-filter"></i> Filters</h3>
            <div class="filter-controls">
                <div class="input-group">
                    <label>Age Category</label>
                    <select>
                        <option>All</option>
                    </select>
                </div>
                <div class="input-group">
                    <label>Age Range</label>
                    <select>
                        <option>All</option>
                    </select>
                </div>
            </div>
        </section>

        <section class="resident-grid">
            <div class="resident-card">
                <div class="card-header">
                    <div>
                        <h2 class="resident-name">Juan Dela Cruz</h2>
                        <span class="resident-id">BR001</span>
                    </div>
                    <div class="card-actions">
                        <button class="btn-icon edit"><i class="fa-regular fa-pen-to-square"></i></button>
                        <button class="btn-icon delete"><i class="fa-solid fa-trash-can"></i></button>
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
        </section>
    </div>

</body>
</html>