



<!DOCTYPE html>
<html>
<head>
   <title>Kategori</title>
</head>
<body>
<h1>Tabel Kategori Film</h1>
<table border="1">
    <tr>
        <td>@foreach($kategories as $kategori)
		{{$kategori->name }}
		@endforeach
</td>
        
    </tr>
   
    </tr>
</table>
</body>
</html>