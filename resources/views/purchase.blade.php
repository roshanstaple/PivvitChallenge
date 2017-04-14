
<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                {!! Form::open(array('action' => 'PurchaseController@store')) !!}

                   {!! Form::label('Customer Name', 'Customer Name') !!}
                   <input type="text" name="customer_name" value="" id="customer_name">

                    {!! Form::label('Offering', 'Select the Offer') !!}

                    <select class="form-control" name="offering_id" id="offering_id">
                       <option value="">Select Offer</option> 
                    @foreach($offers as $offer)
                      <option value="{{$offer->id}}" data-price="{{$offer->price}}">{{$offer->title}} </option>
                    @endforeach
                   </select>

                    <input type="hidden" name="price_custom" value="" id="price_custom">

                    {!! Form::label('Quantity', 'Select the Quantity') !!}
                    {{ Form::selectRange('quantity', 0, 50, null, ['class' => 'quantity']) }}

                     {!! Form::label('Total', 'Total Price') !!}
                      <input type="text" name="total_price" value="0" id="total_price">

                   {!! Form::submit('Save!') !!}
                {!! Form::close() !!}
            </div>
        </div>
    </body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$("#offering_id").change(function() {

    var selected = $(this).find('option:selected');
    var price = selected.data('price'); 
    $("#price_custom").val(price);
});

$(".quantity").change(function() {
    var price =  $("#price_custom").val();
    //var price = selected.data('price'); 
    var quantity = $(".quantity").val();

    var total_price = price*quantity;
    $("#total_price").val(total_price);
    
});

});

</script>