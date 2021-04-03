@extends('layouts.app')

@section('content')

<div class="container">
  <div class="campaign-grid">
    @foreach ($campaigns as $campaign)
      <a href="/campaigns/{{ $campaign->id }}" class="text-decoration-none text-dark">
        <div class="campaign-card my-2 shadow">
            <div class="">
                <h3>{{ $campaign->campaign_name }}</h3>
            </div>
            <div>
                <p>
                    {{Str::limit($campaign->campaign_purpose, 100)}}
                </p>
                <h4 class="curly-text"><b>2000XAF raised of {{ $campaign->goal_amount }}XAF</b></h4>
            </div>
            {{-- <div class="d-flex align-items-center justify-content-between">
              <p class="pt-3"><b>Goal Amount:</b> {{ $campaign->goal_amount }}FCFA</p>
              <a href="/campaigns/{{ $campaign->id }}" class="btn dark-btn">Read More</a>
            </div> --}}
          </div>
      </a>
    @endforeach
  </div>
</div>


@include('layouts.footer')
@endsection