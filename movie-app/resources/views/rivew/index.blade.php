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
                    <th>Film</th>
                    <th>User</th>
                    <th>Rating</th>
                    <th>Review</th>
                    <th>Tanggal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Film</th>
                    <th>User</th>
                    <th>Rating</th>
                    <th>Review</th>
                    <th>Tanggal</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>JonWick</td>
                    <td>JhonSnap</td>
                    <td>9.7</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque blanditiis rem dignissimos, deserunt necessitatibus veritatis architecto asperiores incidunt nulla laboriosam velit delectus ratione quis molestias eos, quibusdam dolorum ducimus ipsa?</td>
                    <td>2023-04-25</td>
                    
                    <td>
                        <a href="" class="btn btn-sm btn-warning"> Edit</a>
                        <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>JonWick</td>
                    <td>JhonSnap</td>
                    <td>9.7</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque blanditiis rem dignissimos, deserunt necessitatibus veritatis architecto asperiores incidunt nulla laboriosam velit delectus ratione quis molestias eos, quibusdam dolorum ducimus ipsa?</td>
                    <td>2023-04-25</td>
                    <td>
                        <a href="" class="btn btn-sm btn-warning"> Edit</a>
                        <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>JonWick</td>
                    <td>JhonSnap</td>
                    <td>9.7</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque blanditiis rem dignissimos, deserunt necessitatibus veritatis architecto asperiores incidunt nulla laboriosam velit delectus ratione quis molestias eos, quibusdam dolorum ducimus ipsa?</td>
                    <td>2023-04-25</td>
                    <td>
                        <a href="" class="btn btn-sm btn-warning"> Edit</a>
                        <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>JonWick</td>
                    <td>JhonSnap</td>
                    <td>9.7</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque blanditiis rem dignissimos, deserunt necessitatibus veritatis architecto asperiores incidunt nulla laboriosam velit delectus ratione quis molestias eos, quibusdam dolorum ducimus ipsa?</td>
                    <td>2023-04-25</td>
                    <td>
                        <a href="" class="btn btn-sm btn-warning"> Edit</a>
                        <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>The Fast</td>
                    <td>Statham</td>
                    <td>9.6</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque blanditiis rem dignissimos, deserunt necessitatibus veritatis architecto asperiores incidunt nulla laboriosam velit delectus ratione quis molestias eos, quibusdam dolorum ducimus ipsa?</td>
                    <td>2023-04-25</td>
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