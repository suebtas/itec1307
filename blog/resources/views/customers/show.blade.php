<!DOCTYPE html>
<html>
  <head>
    <title>Customer {{ $customer->email_address }}</title>
  </head>
  <body>
    <h1>Car {{ $customer->email_address }}</h1>
    <ul>
      <li>Make: {{ $customer->city }}</li>
      <li>Model: {{ $customer->state }}</li>
      <li>Produced on: {{ $customer->country }}</li>
    </ul>
  </body>
</html>