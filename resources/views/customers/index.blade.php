@extends('adminlte::page')

@section('title', 'Facturen')

@section('content_header')
    <h1>Klanten overzicht</h1>
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
                                    <th>voorletter</th>
                                    <th>Voornaam</th>
                                    <th>Achternaam</th>
                                    <th>Email</th>
                                    <th>Adres</th>
                                    <th>Postcode</th>
                                    <th>Plaats</th>
                                </tr>
                                @foreach($customers as $customer)
                                    <tr>
                                        {{-- <td><a href="{{ route('facturen.add_product', $factuur->factuurnummer) }}">Product toevoegen</a></td> --}}
                                        {{-- <td><a href="{{ route('facturen.edit', $factuur->factuurnummer) }}">Instellingen</a></td> --}}
                                        {{-- <td><a href="{{ route('zfacturen.edit', $factuur->factuurnummer) }}">{{$factuur->factuurnummer}}</td> --}}
                                        <td>{{$customer->customer_id}}</td>
                                        <td>{{$customer->voorletter}}</td>
                                        <td>{{$customer->achternaam}}</td>
                                        <td>{{$customer->email}}</td>
                                        <td>{{$customer->email}}</td>
                                        <td>{{$customer->adres}}</td>
                                        <td>{{$customer->postcode}}</td>
                                        <td>{{$customer->plaats}}</td>
                                        {{-- <td>{{$customer->hasCustomer->voorletter}}. {{$factuur->hasCustomer->achternaam}}</td> --}}
                                    </tr>
                                @endforeach
                            </table>
                         </div>
                    </div>
                </div>
                <div class="col-md-3" style="background-color: #fff; color: black; margin-left: 10px;">
                    <div class="card" style="">
                        <div class="card-header">
                            <h3 class="card-title">Factuur toevoegen</h3>
                        </div>
                        <div class="card-body">
                             <form method="post" action="{{route('facturen.create')}}">
                             @csrf
                                <div class="form-group row">
                                    <div class="col-md-8">
                                        <select class="form-control" name="customer_id" id="customer_id">
                                            @if($customers->count() > 0)
                                                @foreach($customers as $customer)
                                                    <option value="{{$customer->customer_id}}">{{$customer->achternaam}}</option>
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
                                    <div class="col-md-8">
                                        <button type="submit" class="btn btn-success">Bestelling toevoegen</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </section>
    @stop
    