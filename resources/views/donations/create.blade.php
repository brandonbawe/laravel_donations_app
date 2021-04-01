@extends('layouts.app')

@section('content')
 <form action="/donations" method="POST" class="container">
    @csrf
    <div class="form-group">
        <label for="name">
            Donation Name
        </label>
       <input type="text" class="form-control" name="name" id="" placeholder="Enter A name for the Donation">
    </div>
    <div class="form-group">
        <label for="purpose">
            Purpose Of Donation
        </label>
    <textarea name="purpose" class="form-control" id="" cols="30" rows="10" placeholder="Enter the Purpose of This Donation">

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
        class="btn btn-dark"
        name="goal-amount" 
        id=""
        value="Create Donation">

    </textarea>
    </div>
 </form>
@endsection