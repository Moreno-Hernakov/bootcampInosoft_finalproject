<table>
    <thead>
    <tr>
        <th>No</th>
        <th>instruction ID</th>
        <th>Link To</th>
        <th>instruction Type</th>
        <th>Assigned Vendor</th>
        <th>Attention Of</th>
        <th>Quatation No.</th>
        <th>Customer PO</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    @foreach($instructions as $i => $instruction)
        <tr>
            <td>{{++$i}}</td>
            <td>{{ $instruction->instruction_id }}</td>
            <td>{{ $instruction->link_to }}</td>
            <td>{{ $instruction->type }}</td>
            <td>{{ $instruction->assigned_vendor }}</td>
            <td>{{ $instruction->attention_of }}</td>
            <td>{{ $instruction->quotation }}</td>
            <td>{{ $instruction->customer_po }}</td>
            <td>{{ $instruction->status }}</td>
        </tr>
    @endforeach
    </tbody>
</table>