@extends('layouts.app')

@section('content')
<h1>Add New Product</h1>
{!! Form::open(array('url' => '/product','files'=>'true')) !!}

<div class="form-group">

{!! Form::label('product_name','Product:') !!}
{!! Form::text('product_name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('quantity','Quantity:') !!}
{!! Form::text('quantity',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('price','Price per item') !!}
{!! Form::text('price',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::button('Add Button',['class'=>'btn btn-primary form-control product-add']) !!}
</div>
{!! Form::close() !!}

<div class="product-data"></div>

@if($errors->any())
<ul class="alert alert-danger">
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>

@endif
@stop
