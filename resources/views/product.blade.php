@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
         <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bestellingen van facturen</div>

                <div class="card-body">
                     <table class="table table-striped">
                            <thead>
                            <th></th>
                            <th>Naam</th>
                            <th>Omschrijving</th>
                            {{-- <th></th> --}}
                            {{-- <th>Prijs Per stuk</th> --}}
                            </thead>
                            <tbody>
                            @foreach($producten as $product)

                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->description}}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                </div>
            </div>
        </div>

        <div class="col-md-4">
             <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Product toevoegen</h4>
                    <form method="post" action="{{route('product.create')}}">
                        @csrf

                        {{-- <div class="form-group row">
                            <div class="col-md-12">

                                <select class="form-control" name="customer_id" id="customer_id">
                                    @if($facturen->count() > 0)
                                        @foreach($facturen as $factuur)

                                            <option value="{{$factuur->factuurnummer}}">{{$factuur->factuurnummer}}/ {{$factuur->timestamp}}</option>
                                        @endForeach
                                    @else
                                        Geen klanten gevonden
                                    @endif
                                </select>

                                @if ($errors->has('customer_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('customer_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> --}}
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
                        {{-- <div class="form-group row">
                            <div class="col-md-12">
                                Prijs:
                                <input id="prijsperstuk" type="text" class="form-control"   name="prijsperstuk">
                            </div>
                        </div> --}}
                        {{-- <div class="form-group row">
                            <div class="col-md-12">
                                Aantal:
                                <input id="aantal" type="number" class="form-control"   name="aantal">
                            </div>
                        </div> --}}

                        <div class="form-group row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success">Product toevoegen</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
