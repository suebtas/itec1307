<!DOCTYPE html>
<html>
  <head>
    <title>Customers</title>
  </head>
  <body>
    <table>
    <thead>
        <td>Name</td>
        <td>Description</td>
        <td>Count</td>
        <td>Price</td>
    </thead>
    <tbody>
        @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer->email_address }}</td>
                <td class="inner-table">{{ $customer->email_address }}</td>
                <td class="inner-table">{{ $customer->state }}</td>
                <td class="inner-table">{{ $customer->country }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
  </body>
</html>