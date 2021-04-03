@extends('layouts.app')

@section('content')
 <div class="campaign-details my-5">
     <div class="campaign-details-inner">
                <h1 class="pb-3">{{ $campaign->campaign_name }}</h1>
            <div class="campaign-img">
            </div>
            <div class="campaign-info">
                <div class="campaign-progress">
                    <h3 class="curly-text">30,000XAF of {{ $campaign->goal_amount }} raised</h3>
                    <div class="campaign-progress-bar shadow">
                        <div class="progress-bar-inner">

                        </div>
                    </div>
                </div>
                <div class="campaign-buttons">
                    
                        <a href="/campaigns/{{ $campaign->id }}/edit" class="button orange-btn text-center">Donate Now</a>
                
                    <a href="" class="button btn-primary text-center">
                        Share
                    </a>
                </div>
            </div>
            <p class="pt-3">{{ Str::limit($campaign->campaign_purpose, 2000, '...') }}  <a href="" class="orange-text">Read more</a></p>
            <h3>Organizer</h3>
            <hr>
            <div class="organizer">
                {{-- <p class="">{{ Auth::user()->name }}</p> --}}
            </div>
     </div>
     

 </div>

 @include('layouts.footer')
 
@endsection