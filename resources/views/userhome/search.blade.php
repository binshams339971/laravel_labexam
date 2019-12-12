<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
</head>
<body>
	<br>
	<a href="{{ route('userhome.index')}}">Home</a> |
	<a href="{{ route('logout.index')}}">logout</a>
	<br><br>
		<h1>Search results</h1>
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
				<a href="{{ route('cart', $std->id)}}"> Add to Cart </a> | 
				<a href="{{ route('userhome.buy', $std->id) }}"> Buy Now </a>
			</td>
		</tr>
	@endforeach

	</table>


</body>
</html>