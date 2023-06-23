

<?php $__env->startSection('content'); ?>
<h1 class="mt-4">Users Data</h1>
<div class="d-flex justify-content-between mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Users</li>
    </ol>
    <a href="#">
        <button class="btn btn-success" type="submit">Create Data</button>
    </a>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Users Data
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>1</td>
                    <th>Usman</th>
                    <th>Maans</th>
                    <th>maman123</th>
                    <th>usmanswan@gmail.com</th>
                    <th>user</th>
                    <td>
                        <a href="" class="btn btn-sm btn-primary"> Edit</a>
                        <a href="" class="btn btn-sm btn-dark" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <th>Adam</th>
                    <th>adaams</th>
                    <th>adam008</th>
                    <th>adamskuy@gmail.com</th>
                    <th>user</th>
                    <td>
                        <a href="" class="btn btn-sm btn-primary"> Edit</a>
                        <a href="" class="btn btn-sm btn-dark" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <th>Mawa</th>
                    <th>Maw</th>
                    <th>mawawa</th>
                    <th>popokpok@gmail.com</th>
                    <th>user</th>
                    <td>
                        <a href="" class="btn btn-sm btn-primary"> Edit</a>
                        <a href="" class="btn btn-sm btn-dark" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <th>Gatra</th>
                    <th>bayu</th>
                    <th>tataraa</th>
                    <th>BayuGatra@gmail.com</th>
                    <th>user</th>
                    <td>
                        <a href="" class="btn btn-sm btn-primary"> Edit</a>
                        <a href="" class="btn btn-sm btn-dark" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <th>Dilla</th>
                    <th>Diilllaaa111</th>
                    <th>dilalove</th>
                    <th>dilll@gmail.com</th>
                    <th>user</th>
                    <td>
                        <a href="" class="btn btn-sm btn-primary"> Edit</a>
                        <a href="" class="btn btn-sm btn-dark" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pw2-ti12\movie-app\resources\views/users/index.blade.php ENDPATH**/ ?>