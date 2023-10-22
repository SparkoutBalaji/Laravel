@switch($status)
    @case("approved")
        <p>Your Order is Approved</p>
        @break
    @case("pending")
        <p>Your order is Pending</p>
        @break
    @case("reject")
        <p>Your order is Rejected</p>
        @break
    @default
        <p>Your Order is un - trackable.!</p>
@endswitch

