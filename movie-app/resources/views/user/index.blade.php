@extends('layouts/main')

@section('content')
    
<h1 class="mt-4">Movies Data</h1>
<div class="d-flex justify-content-between mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Movies</li>
    </ol>
    <a href="#">
        <button class="btn btn-success" type="submit">Create Data</button>
    </a>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Movies Data
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Usernam</th>
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
                    <th>Usernam</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Usman</td>
                    <td>Man</td>
                    <td>U1933sman</td>
                    <td>usman@gmail.com</td>
                    <td>Admin</td>
                    <td>
                        <a href="" class="btn btn-sm btn-warning"> Edit</a>
                        <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Adam</td>
                    <td>Dam</td>
                    <td>D1933am</td>
                    <td>adam@gmail.com</td>
                    <td>User</td>
                    <td>
                        <a href="" class="btn btn-sm btn-warning"> Edit</a>
                        <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Bayu</td>
                    <td>Bay</td>
                    <td>B1933YU</td>
                    <td>bayu@gmail.com</td>
                    <td>User</td>
                    <td>
                        <a href="" class="btn btn-sm btn-warning"> Edit</a>
                        <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Reynaldi</td>
                    <td>Rey</td>
                    <td>R1933EY</td>
                    <td>rey@gmail.com</td>
                    <td>User</td>
                    <td>
                        <a href="" class="btn btn-sm btn-warning"> Edit</a>
                        <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Wildan</td>
                    <td>Dan</td>
                    <td>D1933AN</td>
                    <td>wildan@gmail.com</td>
                    <td>User</td>
                    <td>
                        <a href="" class="btn btn-sm btn-warning"> Edit</a>
                        <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection