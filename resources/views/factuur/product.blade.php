@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">Product toeveogen aan factuur: {{$invoice->factuurnummer}}</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <th>Factuurnummer</th>
                                <th>Productnummer</th>
                                <th>Aantal</th>
                                <th>Prijs</th>
                                <th>Totaal</th>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    <td>{{$order->factuurnummer}}</td>
                                    <td>{{$order->product_id}}</td>
                                    <td>{{$order->product_aantal}}</td>
                                    <td>{{$order->prijs_per_stuk}}</td>
                                    <td>{{$order->product_aantal}}</td>
                                    <td></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
