<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h5>{{ $instruction['instruction_id']}}</h5>
        <h5>{{ $instruction['type']}}</h5>
        <h5>{{ $instruction['assigned_vendor']}}</h5>
        <h5>{{ $instruction['attention_of']}}</h5>
        <h5>{{ $instruction['quotation']}}</h5>
        <h5>{{ $instruction['vendor_address']}}</h5>
        <h5>{{ $instruction['customer_po']}}</h5>
        <h5>{{ $instruction['customer_contract']}}</h5>
        @if ($instruction['status'] == '2')
            <h5>Complete</h5>
        @elseif ($instruction['status'] == '1')
            <h5>Terminated</h5>
        @else
        <h5>Progress</h5>
        @endif
        <h5>{{ $instruction['invoice_to']}}</h5>
        <h5>{{ $instruction['desc_notes']}}</h5>
        <h5>{{ $instruction['link_to']}}</h5>
    
    
</body>
</html>