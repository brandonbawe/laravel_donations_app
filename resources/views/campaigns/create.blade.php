@extends('layouts.app')

@section('content')
 <form action="/campaigns" method="POST" class="container">
    @csrf
    <div class="form-group">
        <label for="name">
            Campaign Name
        </label>
       <input type="text" class="form-control" name="name" id="" placeholder="Enter A name for the Campaign">
    </div>
    <div class="form-group">
        <label for="purpose">
            Purpose Of Campaign
        </label>
    <textarea name="purpose" class="form-control" id="" cols="30" rows="10" placeholder="Enter the Purpose of This Campaign">

    </textarea>
    </div>

    <div class="form-group">
        <label for="goal-amount">
            Goal Amount
        </label>
        <input 
        type="number" 
        name="goal_amount" 
        placeholder="Enter A Target Amount"
        class="form-control">

    </textarea>
    </div>

     <div class="form-group">
        <input 
        type="submit" 
        class="btn orange-btn"
        name="goal-amount" 
        id=""
        value="Create Campaign">

    </textarea>
    </div>
 </form>

 @include('layouts.footer')
@endsection