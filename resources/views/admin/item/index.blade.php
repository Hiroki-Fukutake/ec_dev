@extends('layouts.admin')
@push('css')
	<link rel="stylesheet" href="{{ asset('css/Admin/itemIndex.css') }}">
@endpush
@section('content')
<div class="container">
	<div class="search_wrapper ">
		<h2>search</h2>
		{{ Form::open(['route' => 'admin.item.index', 'method' => 'GET']) }}
			<div class="search_field clearfix ">
				<div class="item_name_field ">
					{{ Form::label('商品名など・・・') }}
					{{ Form::input('text', 'item_name', null, array('class' => 'form-control', 'placeholder' => 'search')) }}
				</div>
				<div class="select_field ">
					{{ Form::label('color', 'カラー') }}
					{{ Form::select('color', [ null => 'All' ,'black' => 'black', 'white' => 'white', 'green' => 'green', 'pink' => 'pink'], array(['class' => 'form-control'])) }}
				</div>
				<div class="select_field ">
				{{ Form::label('category_id', 'カテゴリー') }}
					{{ Form::select('category_id', [null => 'All'] + array_pluck($categories, 'category_name', 'id'), array('class' => 'form-control')) }}
				</div>

				<div class="select_field ">
					{{ Form::label('status_id', 'status') }}
					{{ Form::select('status_id', [null => 'All'] + array_pluck($status, 'sale_status', 'id' ), null, ['class' => 'form-control', 'id' => 'status_id']) }}
				</div>

				<div class="price_field">
					<div class="range_form">
						{{ Form::label('price_min') }}
						{{ Form::input('number', 'price_min', 0, array('class' => 'form-control' ,'min' => 0)) }}
					</div>
					<div class="range_form">
						{{ Form::label('price_max') }}
						{{ Form::input('number', 'price_max', 0, array('class' => 'form-control' ,'min' => 0)) }}
					</div>
			</div>
				<div class="date_field clearfix">
					<div class="range_form ">
						{{ Form::label('created_at-start') }}
						{{ Form::date('created_at-start', null, array('class' => 'form-control')) }}
					</div>
					<div class="range_form">
						{{ Form::label('created_at-end') }}
						{{ Form::date('created_at-end', null, array('class' => 'form-control')) }}
					</div>
				</div>
				<div class="search_btn ">
					{{ Form::submit('search', array('class' => 'btn btn-success')) }}
				</div>
			</div>
		{{ Form::close() }}
	</div>
<h1>item index</h1>
<div class="item_create">
	<a class="create_btn" href="{{route('admin.item.create')}}" >item create</a>
</div>
<table class="item_table">
	<thead>
		<tr>
			<th>ID</th>
			<th>ItemName</th>
			<th>price</th>
			<th>quentity</th>
			<th>color</th>
			<th>gender</th>
			<th>category</th>
			<th>status</th>
			<th>created_at</th>
			<th>updated_at</th>

		</tr>
	</thead>
	<tbody>
		@foreach($items as $item)
		<tr>
			<td>{{ $item->id }}</td>
			<td>{{ $item->item_name }}</td>
			<td>¥{{ $item->price }}</td>
			<td>{{ $item->quantity }}</td>
			<td>{{ $item->color }}</td>
			<td>{{ $item->genre->gender }}</td>
			<td>{{ $item->category->category_name }}</td>
			<td>{{ $item->status->sale_status }}</td>
			<td>{{ $item->created_at }}</td>
			<td>{{ $item->updated_at }}</td>
		</tr>
		@endforeach
	</tbody>
</table>




</div>
@endsection