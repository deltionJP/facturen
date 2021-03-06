@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Factuur overzicht</div>

                <div class="card-body">
                     <table class="table table-striped">
                            <thead>
                            <th>Instellingen</th>
                            <th>Factuurnummer</th>
                            <th>Naam</th>
                            <th>Klant</th>
                            <th>Betaald</th>
                            <th></th>
                            </thead>
                            <tbody>
                            @foreach($facturen->sortByDesc('factuurdatum') as $factuur)
                                <tr>
                                     <td><a href="{{ route('facturen.edit', $factuur->factuurnummer) }}">Instellingen</a></td>

                                    {{-- <td><a href="{{ route('zfacturen.edit', $factuur->factuurnummer) }}">{{$factuur->factuurnummer}}</td> --}}
                                    <td>{{$factuur->factuurdatum}}</td>
                                    <td>{{$factuur->hasCustomer->voorletter}}. {{$factuur->hasCustomer->achternaam}}</td>
                                    @if($factuur->betaald == 0)
                                         <td>Nee</td>
                                    @else
                                         <td>Ja</td>
                                    @endif
                                    <td><a href="{{action('InvoiceController@downloadPDF', $factuur->factuurnummer)}}">PDF</a></td>
                                    {{-- <td><a href="{{route('facturen.pdf')}}">PDF</a></td> --}}
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">

             <div class="card">
                 <div class="card-header">Nieuw factuur aanmaken</div>

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
</div>
@endsection
