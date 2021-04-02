@extends('layouts.app')

@section('content')

<div class="container">
  <div class="campaign-grid">
    @foreach ($campaigns as $campaign)
        <div class="campaign-card my-2 shadow">
          <div class="">
              <h3>{{ $campaign->campaign_name }}</h3>
          </div>
          <div>
              <p>
                  {{Str::limit($campaign->campaign_purpose, 100)}}
              </p>
              <p><b>2000XAF raised of {{ $campaign->goal_amount }}XAF</b></p>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <p class="pt-3"><b>Goal Amount:</b> {{ $campaign->goal_amount }}FCFA</p>
            <a href="/campaigns/{{ $campaign->id }}" class="btn dark-btn">Read More</a>
          </div>
        </div>
    @endforeach
  </div>
</div>


@include('layouts.footer')
@endsection