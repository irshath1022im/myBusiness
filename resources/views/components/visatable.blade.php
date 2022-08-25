<table class="table table-sm table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>VP NUMBER</th>
            <th>COMPANY</th>
            <th>COUNTRY</th>
            <th>POSITION</th>
            <th>COST</th>
        </tr>
        </thead>
        <tbody>

            @foreach ($visas as $visa)

            <tr>
                <td scope="row">{{ $visa->id }}</td>
                <td>{{ $visa->company->company }}</td>
                <td>{{ $visa->country }}</td>
                <td>{{ $visa->position }}</td>
                <td>{{ $visa->cost }}</td>
            </tr>
            @endforeach

        </tbody>
</table>

