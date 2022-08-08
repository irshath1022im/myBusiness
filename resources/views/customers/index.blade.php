@extends('layouts.app')

@section('content')
   
    <div class="list-group">
        @foreach ($customers as $item)
        <a href={{ route('customers.show', ['customer' => $item->id]) }} class="list-group-item list-group-item-action ">{{ $item->customer }}</a>
            
        @endforeach
    </div>

@endsection