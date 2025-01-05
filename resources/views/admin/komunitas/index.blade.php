@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Temukan Komunitas Anda</h1>
    <div class="row justify-content-center mt-4">
        @foreach ($komunitas as $item)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $item['image'] }}" class="card-img-top" alt="{{ $item['title'] }}">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $item['title'] }}</h5>
                        <a href="{{ $item['link'] }}" target="_blank" class="btn btn-primary">Gabung</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
