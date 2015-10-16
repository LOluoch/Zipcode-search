<table border="1" cellspacing ="5" cellpadding = "5">
    <tr>
        <th>City</th>
        <th>State</th>
        <th>Zip-Code</th>
    </tr>
    @foreach($results as $result)
    <tr>
        <td>{{$result->City}}</td>
        <td>{{$result->State}}</td>
        <td>{{$result->Zipcode}}</td>
    </tr>
    @endforeach
</table>