<!-- Task 1
	Rapihkan dan buatlah form agar bisa mengirim data
	Gunakan form request POST
-->
<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
	<!-- Load Bootstrap CSS from CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            background: #1E90FF;
        
        }

        form {
            background: #00FFFF;
        }

        h2 { 
            text-align: center;
        }
		.form-horizontal{
			max-width:650px;
		}

    </style>
</head>
<body>

	<div>
		
		<form method='POST' action='hasil_daftar.php' class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm">
            <h2>Form Pendaftaran</h2>
			<div class="form-group">
				<label for="nama_lengkap">Nama Lengkap</label>
				<input name='nama_lengkap' type="text" class="form-control" id="nama_lengkap">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input name='email' type="email" class="form-control" id="email">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<textarea name='almt' class="form-control" id="alamat"></textarea>
			</div>
			<div class="form-group">
				<label for="telepon">Telepon</label>
				<input name='telpon' type="tel" class="form-control" id="telepon">
			</div>
			<button name='submit' class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
</html> 