
<p><b>You may search for the zip code by either city or state name</b></p>
<form action="{{action('SearchController@getFind')}}" method="get" accept-charset="utf-8">
    City<br>
    <input type="text" name="text"><br>
    State<br>
    <input type="text" name="text"><br>
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
