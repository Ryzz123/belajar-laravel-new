@extends('layouts.main')

@section('container')
    <div class="row">
        @foreach ($datas as $data)
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ $data['image'] }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $data['title'] }}</h5>
                  <p class="card-text">{{ $data['description'] }}</p>
                  <a href="/products/{{ $data['id'] }}" class="btn btn-primary">{{ $data['price'] }}</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
@endsection