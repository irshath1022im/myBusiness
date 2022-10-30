@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        PROFITS
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-striped
            table-hover
            table-borderless
            table-primary
            align-middle">
                <thead class="table-light">
                    {{-- <caption>Table Name</caption> --}}
                    <tr>
                        <th>DATE</th>
                        <th>VISA ID</th>
                        <th>COMPANY</th>
                        <th>AMOUNT</th>
                        <th>REMARK</th>
                        <th>DISTRIBUTION</th>
                    </tr>
                    </thead>
                    <tbody class="table-group-divider">

                        @foreach ($profits as $profit)



                            <tr class="table-primary" >
                                <td scope="row">{{ $profit->date }}</td>
                                <td>{{ $profit->visa_id }}</td>
                                <td>{{ $profit->visa->company->company }}</td>
                                <td>{{ $profit->amount }}</td>
                                <td>{{ $profit->remark }}</td>
                                <td><a name="" id="" class="btn btn-primary" href="#" role="button">DISTRIBUTE</a></td>
                            </tr>

                        @endforeach


                    </tbody>
                    <tfoot>

                    </tfoot>
            </table>
        </div>


    </div>
    {{-- <div class="card-footer text-muted">
        Footer
    </div> --}}
</div>


@endsection
