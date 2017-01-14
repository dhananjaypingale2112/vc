<?php 
  $this->load->view('templates/header')
?>
<div id="main"> 
      <!-- main-content starts here -->
      <div id="main-content">
        <section id="primary" class="content-full-width">
          <div class="dt-sc-hr-invisible-small"></div>
          <div class="dt-sc-hr-invisible-normal"></div>
         
          <!-- Pricintable type3 starts here -->
          <div class="fullwidth-section">
             <div class="container">
             <h3 class="border-title"> <span> Shopping Cart</span> </h3>
                   
                 <form class="shopping-cart" action="#">
                <div>
                     <section>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    foreach ($this->cart->contents() as $items):
                                ?>
                                    <tr>
                                        <td class="product-in-table">
                                            <img class="img-responsive" src="<?php echo base_url();?>public/images/products/product-low-res.png" alt="">
                                            <div class="product-it-in">
                                                <h3><?php echo $items['name'] ?></h3>
                                                <span>Sed aliquam tincidunt tempus</span>
                                            </div>    
                                        </td>
                                        <td>$ 160.00</td>
                                        <td>                                            
                                          <div class="sp-quantity">
                                              <div class="sp-minus fff ddd">-</div>
                                              <div class="sp-input">
                                                  <input type="text" class="quntity-input" value="1" />
                                              </div>
                                              <div class="sp-plus fff ddd">+</div>
                                          </div>
                                        </td>
                                        <td class="shop-red">$ 320.00</td>
                                        <td>
                                            <button type="button" class="close"><span>&times;</span><span class="sr-only">Close</span></button>
                                        </td>
                                    </tr>
                                  <?php endforeach; ?>
                                    <tr>
                                        <td class="product-in-table">
                                            <img class="img-responsive" src="<?php echo base_url();?>public/images/products/product-low-res.png" alt="">
                                            <div class="product-it-in">
                                                <h3>Vivamus ligula</h3>
                                                <span>Sed aliquam tincidunt tempus</span>
                                            </div>    
                                        </td>
                                        <td>$ 160.00</td>
                                        <td>
                                           <div class="sp-quantity">
     <div class="sp-minus fff ddd">-</div>
    <div class="sp-input">
        <input type="text" class="quntity-input" value="1" />
    </div>
    <div class="sp-plus fff ddd">+</div>
</div>
                                        </td>
                                        <td class="shop-red">$ 320.00</td>
                                        <td>
                                            <button type="button" class="close"><span>&times;</span><span class="sr-only">Close</span></button>
                                        </td>
                                    </tr>
                                  </tbody>
                            </table>
                        </div>
                    </section>
                    <div class="container">
     <div class="col-md-12" >
      <h2>Would you like to do next ?</h2>
      <p>Choose id you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
    </div>
 </div>
                    <div class="container">
                      <div class="panel-group category-products" id="accordian"><!--category-productsr-->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                      <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                      Use Cuopen Code
                    </a>
                  </h4>
                </div>
                <div id="mens" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>Enter your coupon code</p>
                                        <div class="col-md-8">
                                <input class="form-control margin-bottom-10" name="code" type="text">
                                </div>
                                 <div class="col-md-4">
                                <button type="button" class="btn-cw">Apply Coupon</button>
                                </div>
                  </div>
                </div>
              </div>
              
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                      <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                      Use Discount Voucher
                    </a>
                  </h4>
                </div>
                <div id="womens" class="panel-collapse collapse">
                  <div class="panel-body">
                                    <p>Enter your Voucher code</p>
                    <div class="col-md-8">
                                <input class="form-control margin-bottom-10" name="code" type="text">
                                </div>
                                 <div class="col-md-4">
                                <button type="button" class="btn-cw">Apply Voucher</button>
                                </div>
                  </div>
                </div>
              </div>
            </div>
                    </div>
                    
                    <div class="coupon-code">
                        <div class="row">
                             <div class="col-sm-3 col-sm-offset-9">
                                <ul class="list-inline total-result">
                                    <li>
                                        <h4>Subtotal:</h4>
                                        <div class="total-result-in">
                                            <span>$ 1280.00</span>
                                        </div>    
                                    </li>    
                                    <li>
                                        <h4>Shipping:</h4>
                                        <div class="total-result-in">
                                            <span class="text-right">- - - -</span>
                                        </div>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="total-price">
                                        <h4>Total:</h4>
                                        <div class="total-result-in">
                                            <span>$ 1280.00</span>
                                        </div>
                                    </li>
                                    <li class="total-price">
                                        
                                        <a href="<?php echo base_url('product/checkOut');?>"><button type="button" class="btn-cw" data-toggle="tooltip" title="Checkout">Checkout</button> </a>
                                        <a href="<?php echo base_url('product/productView');?>"><button type="button" class="btn-cw" data-toggle="tooltip" title="Continue Shopping"> Continue Shopping</button> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>    
                </div>
            </form>      
            </div>
          </div>
          
          <!-- support starts here -->
          <div class="dt-sc-hr-invisible-large"></div>
        </section>
      </div>
      <!-- main-content ends here --> 
    </div>
<?php 
  $this->load->view('templates/footer')
?>