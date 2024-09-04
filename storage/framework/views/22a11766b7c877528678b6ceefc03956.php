<?php $__env->startSection('title', 'Login'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <form action="<?php echo e(route('login.post')); ?>" method="POST" class= "ms-auto me-auto mt-auto" style = "width:500px">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name = "email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name = "password">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/anamyan/laravel-projs/auth-app/resources/views/login.blade.php ENDPATH**/ ?>