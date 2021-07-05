@component('mail::message')
# New Order Alert
<br>
Dear Admin

<b>{{ $customerName }}</b> has just made an order for <b>{{ $productName }}</b>,<br>
on <b>{{ $dateOrdered }}</b>


@component('mail::panel')
<h4 style="margin: 5px 0;">Total Amount: {{ $totalPrice }}</h4>
@endcomponent

@component('mail::button', ['url' => $url, 'color' => 'green'])
Button Text
@endcomponent

## Table component:
@component('mail::table')
| Description            | Price         | Quantity   |
| :--------------------- |:------------- | :----------|
| {{ $productName }}     | {{ $price }}  | {{ $qty }} |

## Total: <b>{{ $totalPrice }}</b>
@endcomponent


@component('mail::subcopy')
This email was sent from {{ config('app.name') }}
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
