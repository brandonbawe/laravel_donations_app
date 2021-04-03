@extends('layouts.app')

@section('content')
 <div class="container">
        <h3 class="text-center">Thanks For Donating 🙏🏾</h3>
         <h4 class="display-3 text-center">
             Transaction Status: <b class="text-success">{{ app('request')->input('transaction_status') }}</b> 
         </h4>

         <h4 class="display-3 text-center">
           Transaction Amount: <b class="text-success">{{ app('request')->input('transaction_amount') }}</b>  XAF
         </h4>
 </div>

@endsection