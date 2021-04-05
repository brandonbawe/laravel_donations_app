@extends('layouts.app')

@section('content')
  <div class="container">
    
      <a href="{{ url('campaigns/create') }}" class="btn orange-btn">Create A Campaign</a>
     <table class="table table-bordered table-striped my-5">
    <thead>
      <tr>
        <th>ID</th>
        <th>Campaign Name</th>
        <th>Goal Amount</th>
        <th>Date Created</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($campaigns  as  $campaign)
         <tr>
            <td>{{ $campaign->id }}</td>
            <td>{{ $campaign->campaign_name }}</td>
            <td>{{ $campaign->goal_amount }}</td>
            <td>{{ $campaign->created_at }}</td>
            <td class="d-flex justify-content-around">
                <a href="/campaigns/{{ $campaign->id }}" class="btn btn-success px-4">Preview</a>
                <a href="/dashboard/{{ $campaign->id }}/edit" class="btn btn-dark px-4">Edit</a>
                <form action="/dashboard/{{ $campaign->id }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger px-4">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
     
    </tbody>
  </table>
  </div>

@endsection
