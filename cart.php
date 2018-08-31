<?php include_once 'includes/header.php'?>

<div class="container">
   <div class="row">
       <div class="col-md-12">
           <div class="card">
              <div class="table-responsive">
                  <table class="table table-hover shopping-cart-wrap ">
                      <thead class="text-muted">
                      <tr>
                          <th scope="col">Product</th>
                          <th scope="col" width="120">Quantity</th>
                          <th scope="col" width="120">Price</th>
                          <th scope="col" width="200" class="text-right">Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                          <td>
                              <figure class="media">
                                  <div class="img-wrap"><img src="http://bootstrap-ecommerce.com/main/images/items/2.jpg" class="img-thumbnail img-sm"></div>
                                  <figcaption class="media-body">
                                      <h6 class="title text-truncate">Product name goes here </h6>
                                      <dl class="param param-inline small">
                                          <dt>Size: </dt>
                                          <dd>XXL</dd>
                                      </dl>
                                      <dl class="param param-inline small">
                                          <dt>Color: </dt>
                                          <dd>Orange color</dd>
                                      </dl>
                                  </figcaption>
                              </figure>
                          </td>
                          <td>
                              <select class="form-control">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                              </select>
                          </td>
                          <td>
                              <div class="price-wrap">
                                  <var class="price">USD 145</var>
                                  <small class="text-muted">(USD5 each)</small>
                              </div> <!-- price-wrap .// -->
                          </td>
                          <td class="text-right">
                              <a title="" href="" class="btn btn-outline-success" data-toggle="tooltip" data-original-title="Save to Wishlist"> <i class="fa fa-heart"></i></a>
                              <a href="" class="btn btn-outline-danger"> × Remove</a>
                          </td>
                      </tr>

                      </tbody>
                  </table>
              </div>
           </div> <!-- card.// -->
       </div>
       <div class="col-md-12 pt-2">
           <div class="row">
               <div class="col-md-9"></div>
               <div class="col-md-3">
                   <button class="btn btn-warning btn-block float-right">Check out</button>
               </div>
           </div>
       </div>
   </div>
</div>
<!--container end.//-->

<br><br>
<div class="container-fluid bg-warning">
    <div class="row">
        <article class="mb-3">
            <div class="card-body text-center">


            </div>
            <br><br>
        </article>
    </div>
</div>

<?php include_once 'includes/footer.php'?>