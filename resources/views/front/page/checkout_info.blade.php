@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Заказ #{{ $order->id }}</h1>

            </div>
        </div>
    </div>
@endsection
