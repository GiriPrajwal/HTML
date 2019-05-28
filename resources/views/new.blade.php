@extends('layouts.app')
@section('content')

<div class="container-fluid test bg-light">
    @csrf
    <div class="container">
    <h3 class="text-center text-white pt-4">CITYLIGHTS</h3>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="row">
    <div class="d-flex justify-content-center col lg-12">
        <table>
                <caption>Design and Front-End Development Books</caption>
                <thead>
                  <tr>
                    <th scope="col" colspan="2">Item</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                        <strong class="book-title">Don&#8217;t Make </strong>
                        <span class="text-offset">Me Think by Steve Krug</span>
                    </td>
                    <td class="item-stock">In Stock</td>
                    <td class="item-qty">1</td>
                    <td class="item-price">$30.02</td>
                  </tr>
                    <tr>
                        <td>
                            <strong class="book-title">A Project Guide </strong>
                            <span class="text-offset"> to UX Design by Russ Unger &#38; Carolyn Chandler </span>
                        </td>
                        <td class="item-stock">In Stock</td>
                        <td class="item-qty">2</td>
                        <td class="item-price">$52.94 ($26.47 &#215; 2)</td>
                      </tr>
                      <tr>
                        <td>
                            <strong class="book-title">Introducing HTML5 </strong>
                            <span class="text-offset">by Bruce Lawson &#38; Remy Sharp </span>
                        </td>
                        <td class="item-stock">Out of Stock</td>
                        <td class="item-qty">1</td>
                        <td class="item-price">$22.23</td>
                      </tr>
                      <tr>
                        <td>
                            <strong class="book-title">Bulletproof Web Design </strong>
                            <span class="text-offset">by Dan Cederholm </span>
                        </td>
                        <td class="item-stock">In Stock</td>
                        <td class="item-qty">1</td>
                        <td class="item-price">$30.17</td>
                </tbody>
                <tfoot>
                  <tr class="text-offset">
                    <td colspan="3">Subtotal</td>
                    <td>$135.36</td>
                  </tr>
                  <tr class="text-offset">
                    <td colspan="3">Tax</td>
                    <td>$13.54</td>
                  </tr>
                  <tr>
                    <td colspan="3">Total</td>
                    <td>$148.90</td>
                  </tr>
                </tfoot>
              </table>
    </div>
        </div>
</div>
</div>
<div>
        <select name="day">
                <option value="Friday" selected>Friday</option>
                <option value="Saturday">Saturday</option>
                <option value="Sunday">Sunday</option>
              </select>

</div>
@endsection
