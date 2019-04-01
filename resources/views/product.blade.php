@extends('adminlte::page')

@section('title', 'Facturen')

@section('content_header')
    <h1>Product overzicht</h1>
@stop

@section('content')


    <section class="content">
        {{-- <div class="container"> --}}
            <div class="row justify-content-center">
                <div class="col-md-8" style="background-color: #fff; color: black;">
                    <div class="card" style="">
                        <div class="card-header">
                            <h3 class="card-title"></h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>#</th>
                                    <th>Naam</th>
                                    <th>Omschrijving</th>
                                </tr>
                                @foreach($producten as $product)
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->description}}</td>
                                    </tr>
                                @endforeach
                            </table>
                         </div>
                    </div>
                </div>
                <div class="col-md-3" style="background-color: #fff; color: black; margin-left: 10px;">
                    <div class="card" style="">
                        <div class="card-header">
                            <h3 class="card-title">Product toevoegen</h3>
                        </div>
                        <div class="card-body">
                             <form method="post" action="{{route('product.create')}}">
                             @csrf
                                <div class="form-group row">
                                    <div class="col-md-8">
                                       <div class="form-group row">
                                            <div class="col-md-12">
                                                Naam:
                                                <input id="product_name" type="textarea" class="form-control"   name="product_name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                Omschrijving:
                                                <input id="product_description" type="textarea" class="form-control"   name="product_description">
                                            </div>
                                        </div>
                                        {{-- @if ($errors->has('customer_id'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('customer_id') }}</strong>
                                            </span>
                                        @endif --}}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-8">
                                        <button type="submit" class="btn btn-success">Product toevoegen</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                {{-- </div> --}}
            </div>  
       </div>
    </section>
@stop
