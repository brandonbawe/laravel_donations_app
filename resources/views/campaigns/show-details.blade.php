@extends('layouts.app')

@section('content')
 <div class="campaign-details my-5">
     <div class="campaign-details-inner">
                <h1 class="pb-3">{{ $campaign->campaign_name }}</h1>
            <div class="campaign-img">

            </div>
            <p class="pt-3">{{ Str::limit($campaign->campaign_purpose, 500, '...') }}  <a href="" class="orange-text">Read more</a></p>
            <h3>Organizer</h3>
            <hr>
            <div class="organizer">
                <p class="">{{ Auth::user()->name }}</p>
            </div>
     </div>
     
     <div class="feature-card shadow-lg position-sticky">
         <p class="pt-2">20,000XAF raised of {{ $campaign->goal_amount }}XAF goal.</p>
         <a href="/campaigns/{{ $campaign->id }}/edit" class="btn dark-btn">Donate Now <i class="fas fa-donate"></i></a>
         <a href="" class="btn blue-btn">Share</a>
     </div>
 </div>

 @include('layouts.footer')
 
@endsection