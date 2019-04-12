@extends('layouts.app')
@section('content')
<table>
	<thead>
		<tr>
			<th>itemName</th>
			<th>color</th>
			<th>price</th>
			<th>category</th>
			<th>gender</th>
		</tr>
	</thead>
	<tbody>
		@foreach($items as $item)
		<tr>
			<td>{{ $item->item_name }}</td>
			<td>{{ $item->color }}</td>
			<td>{{ $item->price }}</td>
			<td>{{ $item->category->category_name }}</td>
			<td>{{ $item->genre->gender }}</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection