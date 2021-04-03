@extends('layouts.app')

@section('content')
<form action="/dashboard/{{ $campaign->id }}" method="POST" class="container">
     @csrf
    @method('PUT')
    <div class="form-group">
        <label for="campaign-name">
            Campaign Name
        </label>
       <input type="text" class="form-control" name="campaign-name" value="{{ $campaign->campaign_name }}" >
    </div>
    <div class="form-group">
        <label for="campaign-purpose">
            Purpose Of Campaign
        </label>
    <textarea name="campaign-purpose" class="form-control" id="" cols="30" rows="10">
      {{ $campaign->campaign_purpose }}
    </textarea>
    </div>

    <div class="form-group">
        <label for="goal-amount">
            Goal Amount
        </label>
        <input 
        type="number" 
        name="goal_amount" 
        value="{{ $campaign->goal_amount }}"
        class="form-control">

    </textarea>
    </div>

     <div class="form-group">
        <input 
        type="submit" 
        class="btn orange-btn"
        id=""
        value="Update">

    </textarea>
    </div>
 </form>

 @include('layouts.footer')
 @endsection