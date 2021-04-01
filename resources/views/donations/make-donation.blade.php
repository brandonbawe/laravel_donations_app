@extends('layouts.app')

@section('content')
 <form action="/makePayment" method="POST" class="container">
    @csrf
    <div class="form-group">
        <label for="name">
            Campaign ID
        </label>
       <input type="text" class="form-control" name="campaign_id" id="" value="{{ $donation->id }}">
    </div>
    <div class="form-group">
        <label for="name">
            Name Of Campaign
        </label>
       <input type="text" class="form-control" name="campaign_name" id="" value="{{ $donation->donation_name }}">
    </div>
    <div class="form-group">
        <label for="message">
            Message
        </label>
        <input type="text" name="message" id="" class="form-control" placeholder="Got Something to Say?">
    </div>

    <div class="form-group">
        <label for="amount_donated">
            Amount
        </label>
        <input 
        type="number" 
        name="amount_donated" 
        placeholder="How Much Do you want to Donate?"
        class="form-control">

    </textarea>
    </div>

     <div class="form-group">
        <input 
        type="submit" 
        class="btn btn-dark" 
        id=""
        value="Pay">

    </textarea>
    </div>
 </form>
@endsection