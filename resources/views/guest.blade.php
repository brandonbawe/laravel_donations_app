@extends('layouts.app')

@section('content')
<div class="container jumbotron">
 <h1 class="display-3">Welcome To GoFundMe.CMR</h1>
 <h1 class="lead font-weight-bolder"><a href="/register">Create an Account</a> To Start Donating and create Your own donations </h1>
 <div class="d-flex align-items-center">
     <p class="lead pt-1">Already A user Click This button to Login</p>
     <a href="/login" class="btn btn-dark ml-3">Login &rarr;</a>
 </div>
</div>
 
@endsection