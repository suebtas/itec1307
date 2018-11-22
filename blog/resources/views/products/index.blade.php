<!DOCTYPE html>
<html>
  <head>
    <title>Products</title>
  </head>
  <body>
    @php($x=1)
    <table border=\"0\">
    <tr>
        @foreach ($products as $product)
            @if ($x <= 3)
                @php($x = $x + 1)
                <td style=\"padding-right:15px;\">
                <a href=itemdetails.php?itemcode={{$product->item_code}}>
                <img src=/{{$product->imagename}}  style="max-width:220px;max-height:240px; width:auto;height:auto;"></img><br/>
                {{$product->item_name}} <br/>
                </a>
                {{@$product->price}} <br/>
                 </td>
            @else
                    @php($x=1)
                    </tr><tr>
            @endif
        @endforeach
</table>
  </body>
</html>