

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
            Movies Data
        </div>
        <div class="card-body">
            <form enctype="multipart/form-data" method="POST" action="/movies">
                <?php echo csrf_field(); ?>
                <div>
                    <label for="judul">Title:</label>
                    <input type="text" id="judul" name="judul">
                </div>
                <div>
                    <label for="poster">Poster:</label>
                    <input type="file" id="poster" name="poster">
                </div>
                <div>
                    <label for="genre">Genre:</label>
                    <select id="genre" name="genre_id">
                        <?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($genre->id); ?>"><?php echo e($genre->nama); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div>
                    <label for="negara">Country:</label>
                    <input type="text" id="negara" name="negara">
                </div>
                <div>
                    <label for="tahun">Year:</label>
                    <input type="text" id="tahun" name="tahun">
                </div>
                <div>
                    <label for="rating">Rating:</label>
                    <input type="text" id="rating" name="rating">
                </div>
                <button type="submit">Add</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pw2-ti12\movie-app\resources\views/movies/create.blade.php ENDPATH**/ ?>