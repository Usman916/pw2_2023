

<?php $__env->startSection('content'); ?>
    <h1 class="mt-4">Movies Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Movies</li>
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
            Edit Data
        </div>
        <div class="card-body">
            <form enctype="multipart/form-data" method="POST" action="/movies/<?php echo e($movie->id); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <label for="judul">Title:</label><br>
                <input type="text" id="judul" name="judul" value="<?php echo e($movie->judul); ?>"><br><br>

                <label for="poster">Poster:</label><br>
                <img style= "width: 200px" src="/assets/img/<?php echo e($movie->poster); ?>" alt="">
                <input type="file" id="poster" name="poster" value="<?php echo e($movie->poster); ?>"><br><br>

                <label for="genre_id">Genre:</label><br>
                <select id="genre_id" name="genre_id">
                    <?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($genre->id); ?>" <?php echo e($genre->id == $movie->genre_id ? 'selected' : ''); ?>><?php echo e($genre->nama); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select><br><br>

                <label for="negara">Country:</label><br>
                <input type="text" id="negara" name="negara" value="<?php echo e($movie->negara); ?>"><br><br>

                <label for="tahun">Year:</label><br>
                <input type="text" id="tahun" name="tahun" value="<?php echo e($movie->tahun); ?>"><br><br>

                <label for="rating">Rating:</label><br>
                <input type="text" id="rating" name="rating" value="<?php echo e($movie->rating); ?>"><br><br>

                <input type="submit" value="Update Movie">
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pw2-ti12\movie-app\resources\views/movies/edit.blade.php ENDPATH**/ ?>