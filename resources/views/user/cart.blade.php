@extends('/layout')

@section('content')

<!--shopping cart area start -->
<div class="shopping_cart_area mt-100">
    <div class="container">
        <form action="#">
            <div class="row">
                <div class="col-12">
                    <div class="table_desc">
                        <div class="cart_page table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product_remove">Delete</th>
                                        <th class="product_thumb">Image</th>
                                        <th class="product_name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product_quantity">Quantity</th>
                                        <th class="product_total">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                        <td class="product_thumb"><a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a></td>
                                        <td class="product_name"><a href="#">Handbag fringilla</a></td>
                                        <td class="product-price">£65.00</td>
                                        <td class="product_quantity"><label>Quantity</label> <input min="1" max="100" value="1" type="number"></td>
                                        <td class="product_total">£130.00</td>


                                    </tr>

                                    <tr>
                                        <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                        <td class="product_thumb"><a href="#"><img src="assets/img/s-product/product2.jpg" alt=""></a></td>
                                        <td class="product_name"><a href="#">Handbags justo</a></td>
                                        <td class="product-price">£90.00</td>
                                        <td class="product_quantity"><label>Quantity</label> <input min="1" max="100" value="1" type="number"></td>
                                        <td class="product_total">£180.00</td>


                                    </tr>
                                    <tr>
                                        <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                        <td class="product_thumb"><a href="#"><img src="assets/img/s-product/product3.jpg" alt=""></a></td>
                                        <td class="product_name"><a href="#">Handbag elit</a></td>
                                        <td class="product-price">£80.00</td>
                                        <td class="product_quantity"><label>Quantity</label> <input min="1" max="100" value="1" type="number"></td>
                                        <td class="product_total">£160.00</td>


                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="cart_submit">
                            <button type="submit">update cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--coupon code area start-->
            <div class="coupon_area">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code left">
                            <h3>Coupon</h3>
                            <div class="coupon_inner">
                                <p>Enter your coupon code if you have one.</p>
                                <input placeholder="Coupon code" type="text">
                                <button type="submit">Apply coupon</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code right">
                            <h3>Cart Totals</h3>
                            <div class="coupon_inner">
                                <div class="cart_subtotal">
                                    <p>Subtotal</p>
                                    <p class="cart_amount">£215.00</p>
                                </div>
                                <div class="cart_subtotal ">
                                    <p>Shipping</p>
                                    <p class="cart_amount"><span>Flat Rate:</span> £255.00</p>
                                </div>
                                <a href="#">Calculate shipping</a>

                                <div class="cart_subtotal">
                                    <p>Total</p>
                                    <p class="cart_amount">£215.00</p>
                                </div>
                                <div class="checkout_btn">
                                    <a href="#">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--coupon code area end-->
        </form>
    </div>
</div>
<!--shopping cart area end -->

@endsection