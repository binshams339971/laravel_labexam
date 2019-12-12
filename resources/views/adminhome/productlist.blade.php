<!DOCTYPE html>
<html>
<head>
	<title>list</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

	<script type="application/javascript">
	   
	       function search(){
	       	var search = $('#search').val();
	       
	       	console.log(search);
	       }

    </script>
</head>
<body>
	<h1>Product's List</h1>

	<a href="{{route('adminhome.index')}}">Back</a> |
	<a href="{{route('logout.index')}}">logout</a>

	<br><br>
	<input type="search" onkeyup="search()" id="search" name="search">
	<br>
	<table border="1">
		<tr>
			<td>id</td>
			<td>Name</td>
			<td>Category</td>
			<td>Price</td>
			<td>Action</td>
		</tr>


	@foreach($users as $std)
		<tr>
			<td>{{ $std->id }}</td>
			<td>{{ $std->name }}</td>
			<td>{{ $std->category }}</td>
			<td>{{ $std->price }}</td>
			<td>
				<a href="{{ route('adminhome.editproduct', $std->id) }}"> EDIT </a> | 
				<a href="{{ route('adminhome.deleteproduct', $std->id) }}"> DELETE </a> 
			</td>
		</tr>
	@endforeach

	</table>
</body>
</html>