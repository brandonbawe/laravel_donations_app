@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    @foreach ($donations as $donation)
        <div class="card my-4 col-12 shadow-lg">
          <div class="card-header">
              <h3>{{ $donation->donation_name }}</h3>
          </div>
          <div class="card-body">
              <p class="card-text">
                  {{ $donation->donation_purpose }}
              </p>

              <p class="card-text"><b>2000XAF of {{ $donation->goal_amount }}XAF Donated</b></p>
          </div>
          <div class="card-footer d-flex align-items-center justify-content-between">
            <p class="pt-3"><b>Goal Amount:</b> {{ $donation->goal_amount }}FCFA</p>
            <a href="donations/{{ $donation->id }}/edit" class="badge badge-dark badge-pill px-4 py-3">Donate</a>
          </div>
        </div>
    @endforeach
  </div>
</div>

@endsection