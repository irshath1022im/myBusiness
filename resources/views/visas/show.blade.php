@extends('layouts.app')

@section('content')

@livewire('visas.show', ['visa' =>$visa])
    
@endsection