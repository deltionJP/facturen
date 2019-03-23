@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Factuur opties</div>
                    <div class="card-body">
                         <table class="table table-striped">
                              <thead>
                                   <th>Factuurnummer</th>
                                   <th>factuurdatum</th>
                                   <th>Naam</th>
                                   <th>Betaald</th>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>{{$invoice->factuurnummer}}</td>
                                      <td>{{$invoice->factuurdatum}}</td>
                                      <td>{{$invoice->hasCustomer->voorletter}}. {{$invoice->hasCustomer->achternaam}}</td>
                                           @if($invoice->betaald == 0)
                                              <td>Nee</td>
                                         @else
                                              <td>Ja</td>
                                         @endif
                                   </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
