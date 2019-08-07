<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Invoice</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->
        <link rel="stylesheet" href="{{ URL::asset('css/invoice.css') }}" rel="stylesheet">
        {{-- <link type="text/css" rel="stylesheet" href="css/invoice.css"> --}}
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/favicon.ico">
    </head>
    <body>
        <div class="invoice-box">
            <table  >
                <tr class="top">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td class="title">
                                    {{-- <img src="images/logo2.png" style="width:150px; height:auto" alt=""> --}}
                                </td>
                                <td>
                                    No Invoice: {{$order->invoice}}<br>
                                    Created: {{$order->created_at}}<br>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="information">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td>
                                    {{$order->billing_name}}<br>
                                    {{$order->address}}<br>
                                    {{$order->city->name}} - {{$order->province->name}}<br>
                                    <a href="#"  style="color:#666; text-decoration:none">{{$order->billing_email}}</a>
                                    <br>
                                    <a href="#" style="color:#666; text-decoration:none">{{$order->billing_phone}}</a>                                
                                </td>
                                <td>
                                    Yunet Shop<br>
                                    <a href="#"  style="color:#666; text-decoration:none">admin@yunetshop.com</a>
                                    <br>
                                    <a href="#"  style="color:#666; text-decoration:none">(+62)897856289</a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="heading">
                    <td>
                        Metode Pembayaran
                    </td>
                    <td>
                        Check #
                    </td>
                </tr>
                <tr class="details">
                    <td>
                        Visa ending **** 4242
                    </td>
                    <td>
                        Check
                    </td>
                </tr>
                <tr class="heading">
                    <td>
                        Produk
                    </td>
                    <td>
                        Sub Total
                    </td>
                </tr>
                @foreach($order->products as $product)
                <tr class="item">
                    <td>
                        {{$product->name}} x {{$product->pivot->quantity}}
                    </td>
                    <td>
                        {{$order->formatPrice($product->price*$product->pivot->quantity)}}
                    </td>
                </tr>
                @endforeach
                <tr class="item last">
                    <td>
                        Ongkir
                    </td>
                    <td>
                        {{$order->formatPrice($order->ongkir)}}
                    </td>
                </tr>
                <tr class="total">
                    <td></td>
                    <td style="padding-top:50px;"> 
                        {{$order->formatPrice($order->total_order)}}
                    </td>
                </tr>
            </table>
        </div>
        <a href="javascript:window.print()" class="print-button">Print this invoice</a> 
    </body>
</html>