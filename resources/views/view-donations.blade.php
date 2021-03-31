@extends('layouts.app')

@section('content')

 @foreach ($donations as $donation)
    <div class="container">
      <div>
        <div class="card my-4">
         <div class="card-header">
             <h3>{{ $donation->donation_name }}</h3>
         </div>
         <div class="card-body">
             <p class="card-text">
                 {{ $donation->donation_purpose }}
             </p>

             <h2 class="card-text">2000XAF of {{ $donation->goal_amount }}XAF Donated</h2>
         </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
           <p class="pt-3"><b>Goal Amount:</b> {{ $donation->goal_amount }}FCFA</p>
           <a href="donations/{{ $donation->id }}/edit" class="badge badge-dark badge-pill px-4 py-3">Donate</a>
        </div>
     </div>
      </div>
   </div>
 @endforeach

@endsection