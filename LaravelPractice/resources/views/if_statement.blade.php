<h1>if, else if, else Statement in views</h1>
@if($country == "INDIA")
    INDIA
    @elseif($country == "AMERICA")
    AMERICA
    @else
    NO COUNTRY IS INPUTED ON ROUTE
@endif
