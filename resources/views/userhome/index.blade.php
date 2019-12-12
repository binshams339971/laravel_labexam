<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
</head>
<body>
	<h1>Welcome! {{ session('username') }}</h1>

	<br>
	<a href="{{ route('userhome.processor')}}">Processor</a> |
	<a href="{{ route('userhome.ram')}}">Ram</a> |
	<a href="{{ route('userhome.storage')}}">Storage</a> |
	<a href="{{ route('userhome.casing')}}">Casing</a> |
	<a href="{{ route('userhome.gcard')}}">Graphics Card</a> |
	<a href="{{ route('logout.index')}}">logout</a>
	<br><br>
		<h1>All Avilable Products</h1>
	<br>

	<table border="1">
		<tr>
			<td>Name</td>
			<td>Category</td>
			<td>Price</td>
			<td>Action</td>
		</tr>


	@foreach($users as $std)
		<tr>
			<td>{{ $std->name }}</td>
			<td>{{ $std->category }}</td>
			<td>{{ $std->price }}</td>
			<td>
				<a href="{{ route('adminhome.editproduct', $std->id) }}"> Add to Cart </a> | 
				<a href="{{ route('adminhome.deleteproduct', $std->id) }}"> Buy Now </a> 
			</td>
		</tr>
	@endforeach

	</table>


</body>
</html>