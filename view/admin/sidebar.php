<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<aside class="w-64 bg-slate-800 text-white flex-col hidden md:flex">
    <div class="p-6 text-center border-b border-slate-700">
        <a href="admin_dashboard.php">
            <img src="../../include/assets/img/logo.png" alt="ACADEMYIUM Logo" class="h-12 w-auto mx-auto">
        </a>
    </div>
    <nav class="flex-1 px-4 py-4 space-y-2">
        <a href="dashboard.php" class="sidebar-link <?php echo ($current_page == 'dashboard.php') ? 'active' : ''; ?>">
            <i class="ph-bold ph-gauge"></i>
            <span>Dashboard</span>
        </a>
        <a href="course.php" class="sidebar-link <?php echo ($current_page == 'course.php' || $current_page == 'manage-course.php') ? 'active' : ''; ?>">
            <i class="ph-bold ph-chalkboard"></i>
            <span>Courses</span>
        </a>
        <a href="faculty.php" class="sidebar-link <?php echo ($current_page == 'faculty.php' || $current_page == 'manage-faculty.php') ? 'active' : ''; ?>">
            <i class="ph-bold ph-users-three"></i>
            <span>Faculty</span>
        </a>
    </nav>
    <div class="p-4">
              <form action="../../controller/adminController/logout.php" method="POST">
                <button type="submit" name="logout" value="1" class="sidebar-link logout">
                    <i class="ph-bold ph-sign-out"></i>
                    <span>Logout</span>
                </button>
               </form>

            </div>
</aside>
