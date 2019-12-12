<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
	<h1>Edit Student</h1>

	<a href="{{route('adminhome.productlist')}}">Back</a> |
	<a href="{{route('logout.index')}}">logout</a>

<br><br>

<form method="post">
	{{csrf_field()}}
	<table border="0">
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="{{$user['name']}}"></td>
		</tr>
		<tr>
			<td>Category</td>
			<td>
				<select name="category">
					<option value="Ram">Ram</option>
					<option value="Harddisk">Hard Disk</option>
					<option value="Processor">Processor</option>
					<option value="Casing">Casing</option>
					<option value="Graphics Card">Graphics Card</option>
				</sselct>
			</td>
		</tr>
		<tr>
			<td>Price</td>
			<td><input type="text" name="price" value="{{$user['price']}}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Save"></td>
		</tr>
	</table>
</form>
</body>
</html>