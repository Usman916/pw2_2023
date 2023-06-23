

<?php $__env->startSection('content'); ?>
    <h1 class="mt-4">Reviews Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Reviews</li>
        </ol>
    </div>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Reviews Data
        </div>
        <div class="card-body">
            <form method="POST" action="/reviews">
                <?php echo csrf_field(); ?>
                <div>
                    <label for="film">Film:</label>
                    <input type="text" id="film" name="film">
                </div>
                <div>
                    <label for="user">User:</label>
                    <input type="text" id="user" name="user">
                </div>
                <div>
                    <label for="rating">Rating:</label>
                    <input type="text" id="rating" name="rating">
                </div>
                <div>
                    <label for="review">Review:</label>
                    <input type="text" id="review" name="review">
                </div>
                <div>
                    <label for="tahun">Tahun:</label>
                    <input type="text" id="tahun" name="tahun">
                </div>
                <button type="submit">Add</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pw2-ti12\movie-app\resources\views/reviews/create.blade.php ENDPATH**/ ?>