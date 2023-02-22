<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/style.css">
	<title>Login</title>
</head>

<body>
	<form class="form">
		@if (session('message'))
			<p>
				{{ session('message') }}
			</p>
		@else
			<p>
				Silahkan Login Atau Register Menggunakan Akun Google
			</p>
		@endif
		<a href="/auth/redirect">
			<img
				src="http://www.androidpolice.com/wp-content/themes/ap2/ap_resize/ap_resize.php?src=http%3A%2F%2Fwww.androidpolice.com%2Fwp-content%2Fuploads%2F2015%2F10%2Fnexus2cee_Search-Thumb-150x150.png&w=150&h=150&zc=3">
		</a>
	</form>
</body>

</html>