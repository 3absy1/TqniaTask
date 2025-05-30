@extends('main.app')
@section('title')
    Home | Tqnia
@endsection

@section('css')
@endsection

@section('content')
<section class="table-sec pt-3">
    <div class="row">
        <div class="col-md-6">
            <div class="card text-center shadow rounded">
                <div class="card-body">
                    <h5 class="card-title">Top-up Requests</h5>
                    <h2>{{ $topupCount }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card text-center shadow rounded">
                <div class="card-body">
                    <h5 class="card-title">Withdrawal Requests</h5>
                    <h2>{{ $withdrawalCount }}</h2>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
