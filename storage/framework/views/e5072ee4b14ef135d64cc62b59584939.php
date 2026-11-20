<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Student Management System'); ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
<style>
    body{
        background: #f4f4f4;
    }
    .navbar-brand{
        font-weight: 800;
        letter-spacing: .2px;
    }
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>">Student Mangement System</a>
        <div class="">
            <?php if(auth()->guard()->check()): ?> 
            <a href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
           
            <form action="<?php echo e(route('logout')); ?>" method="post"><?php echo csrf_field(); ?> <button>Logout</button></form>
            <?php else: ?>
            <div class="navbar-nav me-auto mb-2 mb-lg-0">
            <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
            <a class="nav-link" href="<?php echo e(route('register')); ?>">Register</a>  
            </div>
            <?php endif; ?>  
        </div>
        </div>
    </nav>
    <?php echo $__env->yieldContent('content'); ?>
</body>
</html>
<?php /**PATH C:\Users\cylus\learning\student_management\resources\views/layouts/app.blade.php ENDPATH**/ ?>