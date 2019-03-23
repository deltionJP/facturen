@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nieuw factuur aanmaken</div>

                <div class="card-body">
                    <form method="post" action="">
                    {{-- <form method="post" action="/rekening/create"> --}}
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
                                {{--<td><input id="aantalbe" data-product="{{ $product->productnummer }}" type="text" class="form-control-plaintext product " value="{{ $product->productomschrijving }}" name="productomschrijving"></td>--}}

                                @if ($errors->has('customer_id'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('customer_id') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        {{-- <div class="form-group row">
                            <div class="col-md-8">
                                Omschrijving:
                                <input id="omschrijving" type="textarea" class="form-control" name="omschrijving">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8">
                                Prijs:
                                <input id="prijsperstuk" type="text" class="form-control" name="prijsperstuk">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8">
                                Aantal:
                                <input id="aantal" type="number" class="form-control" name="aantal">
                            </div>
                        </div> --}}

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
@endsection
