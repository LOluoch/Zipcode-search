
<p><b>You may search for the zip code by either city or state name</b></p>
<form action="{{action('SearchController@getFind')}}" method="post" accept-charset="utf-8">

    <input type="text" name="text"><br>
    <input type="hidden" value="{{csrf_token()}}" name="_token">
    <input type="submit" value="Search">


</form>

<table border="1" cellspacing ="5" cellpadding = "5">
    <tr>
        <th>City</th>
        <th>State</th>
        <th>Zip-Code</th>
    </tr>
    @foreach($zipcodes as $zipcode)
    <tr>
        <td>{{$zipcode->City}}</td>
        <td>{{$zipcode->State}}</td>
        <td>{{$zipcode->Zipcode}}</td>
    </tr>
    @endforeach
</table>

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
