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
                            <th>Factuurnummer</th>
                            <th>Product</th>
                            <th>Aantal</th>
                            <th>Prijs Per stuk</th>
                            <th></th>
                            </thead>
                            <tbody>
                            @foreach($producten->sortByDesc('factuurnummer') as $product)

                                <tr>
                                    <td>{{$product->factuurnummer}}</td>
                                    <td>{{$product->omschrijving}}</td>
                                    <td>{{$product->aantal}}</td>
                                    <td>{{$product->prijsperstuk}}</td>
                                    <td>{{$product->timestamp}}</td>
                                    {{-- <form action="{{route('product.delete')/$product->id}}" method="post">
                                        {{ method_field('delete') }}
                                        <button class="btn btn-default" type="submit">Delete</button>
                                    </form> --}}
                                    {{-- <td>{{$product->terschelling->voorletter}}. {{$product->terschelling->achternaam}}</td> --}}
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

                        <div class="form-group row">
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
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                Omschrijving:
                                <input id="omschrijving" type="textarea" class="form-control"   name="omschrijving">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                Prijs:
                                <input id="prijsperstuk" type="text" class="form-control"   name="prijsperstuk">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                Aantal:
                                <input id="aantal" type="number" class="form-control"   name="aantal">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success">Bestelling toevoegen</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
