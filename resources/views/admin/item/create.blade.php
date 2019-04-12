@extends('layouts.admin')
@push('css')
	<link rel="stylesheet" href="{{ asset('css/Admin/itemCreate.css') }}">
@endpush
@section('content')


<div class="container">
	<h1 class="item_create">
		item create form
	</h1>
	{{ Form::open(['route' => 'admin.item.store']) }}
		{{ Form::label('item_name', '商品名') }}
		{{ Form::input('text', 'item_name', null, array('class' => 'form-control', 'placeholder' => 'PARABOOT') ) }}

		{{ Form::label('color', 'カラー') }}
		{{ Form::select('color', ['black','white','green','pink'], array(['class' => 'form-control'])) }}

		{{ Form::label('quentiry', '数量') }}
		{{ Form::selectRange('quentity', 0, 20, ['class' => 'form-control']) }}

		{{ Form::label('price', '価格') }}
		{{ Form::input('number', 'price', 0,array('class' => 'form-control', 'min' => 0)) }}

		{{ Form::label('category_id', 'カテゴリー') }}
		{{ Form::select('category_id', ['トップス','アウター/ジャケット','パンツ','シューズ'], array('class' => 'form-control')) }}

		{{ Form::submit('登録', ['class' => 'btn btn-success']) }}
	{{ Form::close() }}
</div>





@endsection