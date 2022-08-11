@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">
            SUPPLIERS <a name="" id="" class="btn btn-primary" href="{{ route('supplier.create') }}" role="button">NEW</a>
        </div>
        <div class="card-body">
          <div class="list-group">
            @foreach ($suppliers as $supplier)
            <a href="#" class="list-group-item list-group-item-action ">{{ $supplier->name }}</a>
            @endforeach

          </div>
        </div>
        <div class="card-footer text-muted">
            Footer
        </div>
    </div>
@endsection
