@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    @foreach ($campaigns as $campaign)
        <div class="card my-4 col-12 shadow-lg">
          <div class="card-header">
              <h3>{{ $campaign->campaign_name }}</h3>
          </div>
          <div class="card-body">
              <p class="card-text">
                  {{ $campaign->campaign_purpose }}
              </p>

              <p class="card-text"><b>2000XAF raised of {{ $campaign->goal_amount }}XAF</b></p>
          </div>
          <div class="card-footer d-flex align-items-center justify-content-between">
            <p class="pt-3"><b>Goal Amount:</b> {{ $campaign->goal_amount }}FCFA</p>
            <a href="campaigns/{{ $campaign->id }}/edit" class="badge badge-dark badge-pill px-4 py-3">Donate</a>
          </div>
        </div>
    @endforeach
  </div>
</div>

@endsection