<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogging</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="mt-4">Dashboard</h1>
        <a href="{{ ('posts.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i> New Post
        </a>
    </div>

    <!-- Stats Cards -->
    <div class="row mb-4">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Total Posts</h5>
                        <h2 class="mb-0">127</h2>
                    </div>
                    <i class="fas fa-newspaper fa-3x opacity-50"></i>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Published</h5>
                        <h2 class="mb-0">104</h2>
                    </div>
                    <i class="fas fa-check-circle fa-3x opacity-50"></i>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Drafts</h5>
                        <h2 class="mb-0">23</h2>
                    </div>
                    <i class="fas fa-edit fa-3x opacity-50"></i>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-info text-white mb-4">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Total Views</h5>
                        <h2 class="mb-0">42.3K</h2>
                    </div>
                    <i class="fas fa-eye fa-3x opacity-50"></i>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Posts and Analytics -->
    <div class="row">
        <!-- Recent Posts Table -->
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="m-0"><i class="fas fa-table me-2"></i> Recent Posts</h5>
                        <a href="{{ ('posts.index') }}" class="btn btn-sm btn-outline-primary">View All</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Views</th>
                                    <th>Last Updated</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10 Tips for Better Web Design</td>
                                    <td><span class="badge bg-success">Published</span></td>
                                    <td>1,245</td>
                                    <td>2 hours ago</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i></a>
                                            <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>React Hooks Explained</td>
                                    <td><span class="badge bg-success">Published</span></td>
                                    <td>3,782</td>
                                    <td>1 day ago</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i></a>
                                            <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>SEO Best Practices for 2023</td>
                                    <td><span class="badge bg-warning">Draft</span></td>
                                    <td>-</td>
                                    <td>3 days ago</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i></a>
                                            <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Building REST APIs with Laravel</td>
                                    <td><span class="badge bg-success">Published</span></td>
                                    <td>2,156</td>
                                    <td>1 week ago</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i></a>
                                            <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Analytics and Quick Actions -->
        <div class="col-lg-4">
            <!-- Traffic Chart -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="m-0"><i class="fas fa-chart-line me-2"></i> Post Views (Last 7 Days)</h5>
                </div>
                <div class="card-body">
                    <canvas id="viewsChart" height="200"></canvas>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="card">
                <div class="card-header">
                    <h5 class="m-0"><i class="fas fa-bolt me-2"></i> Quick Actions</h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a href="{{ ('posts.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus me-2"></i> Create New Post
                        </a>
                        <a href="{{ ('categories.index') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-tags me-2"></i> Manage Categories
                        </a>
                        <a href="{{ ('profile.edit') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-user-cog me-2"></i> Update Profile
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Views Chart
    const ctx = document.getElementById('viewsChart').getContext('2d');
    const viewsChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            datasets: [{
                label: 'Post Views',
                data: [1200, 1900, 1700, 2100, 2300, 2500, 2200],
                backgroundColor: 'rgba(13, 110, 253, 0.2)',
                borderColor: 'rgba(13, 110, 253, 1)',
                borderWidth: 2,
                tension: 0.3,
                fill: true
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
</body>
</html>