<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
<h1>Halaman Course</h1>

<h2>List Course</h2>

@foreach (range(1,5) as $item)
	<dl>
	<dt>Judul</dt>
	<dd>author</dd>
	<dd>rating</dd>
	<dd>harga</dd>
</dl>    
@endforeach


</body>
</html>