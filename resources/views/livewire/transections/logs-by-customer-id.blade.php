<div>
       @foreach ($transections as $item)

    <tr>
        <td scope="row">{{ $item->id }}</td>
        <td>{{ $item->customer->customer }}</td>
        <td>{{ $item->amount }}</td>
        <td>{{ $item->remark }}</td>
    </tr>
@endforeach


</div>
