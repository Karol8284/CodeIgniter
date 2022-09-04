
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Shop</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="from-group">
            <label>Name</label>
            <span id="error_name" class="text-danger ms-3"></span>
            <input type="text" name="name" id="" class="form-control name" placeholder="">
        </div>
        <div class="from-group">
            <label>Price</label>
            <span id="error_price" class="text-danger ms-3"></span>
            <input type="text" name="price" id="" class="form-control price" placeholder="">
        </div>
        <div class="from-group">
            <label>Quantity</label>
            <span id="error_quantity" class="text-danger ms-3"></span>
            <input type="text" name="quantity" id="" class="form-control quantity" placeholder="">
        </div>
        <div class="from-group">
            <label">Seller Name</label>
            <span id="error_seller" class="text-danger ms-3"></span>
            <input type="text" name="seller" id="" class="form-control seller" placeholder="">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="addProduct" class="btn btn-primary ajaxproduct-save">Save</button>
      </div>
    </div>
  </div>
</div>
<?php 
    $conn = \Config\Database::connect('shop');
    $query = $conn->query('select name, price, quantity, seller from product');
    $dataFromDatabase = $query->getResultObject();
?>

<div class="container">
    <div class="row">
        <div class="col-md-12 my-4">
            <p class="h1 text-container">Product</p>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <p class="h4">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn vtn-primary float-end">Add</a>
                    </p>
                </div>
                <div class="card-body">
                    <table class="table table-dark table-striped-columns">
                        <thead id="product">
                            <tr>
                                <th>name</th>
                                <th>price</th>
                                <th>quatity</th>
                                <th>seller</th>
                            </tr>
                        
                        </thead>
                        <tbody class="" id="tbodyProduct">
                        <?php foreach ($dataFromDatabase as $data): ?> 
                            <tr>
                                <td><p><?= $data->name ?></p></td>
                                <td><p><?= $data->price ?></p></td>
                                <td><p><?= $data->quantity ?></p></td>
                                <td><p><?= $data->seller ?></p></td>
                            </tr>    
                        <?php endforeach?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="div2"></div>
<script defer>
    $(document).ready(function () {
        $(document).on('click','.ajaxproduct-save', function () {
            if($.trim($('.name').val()).length == 0){
                error_name = 'Plaease enter full name'
                $('#error_name').text(error_name)
            }else{
                error_name = ''
                $('#error_name').text(error_name)
            }
        })
        $(document).on('click','.ajaxproduct-save', function () {
            if($.trim($('.price').val()).length == 0){
                error_price = 'Plaease enter full name'
                $('#error_price').text(error_price)
            }else{
                error_price = ''
                $('#error_price').text(error_price)
            }
        })
        $(document).on('click','.ajaxproduct-save', function () {
            if($.trim($('.quantity').val()).length == 0){
                error_quantity = 'Plaease enter full name'
                $('#error_quantity').text(error_quantity)
            }else{
                error_quantity = ''
                $('#error_quantity').text(error_quantity)
            }
        })
        $(document).on('click','.ajaxproduct-save', function () {
            if($.trim($('.seller').val()).length == 0){
                error_seller = 'Plaease enter full name'
                $('#error_seller').text(error_seller)
            }else{
                error_seller = ''
                $('#error_seller').text(error_seller)
            }
        })

        
    });
</script>
<script defer>
    idProductLocal = 0 
    function addProduct() {
        if(error_name != '' || error_price != '' || error_quantity != '' || error_seller != ''){
            console.log('null');
        }else{
        var data = {
            'name' : $('.name').val(),
            'price' : $('.price').val(),
            'quantity' : $('.quantity').val(),
            'seller' : $('.seller').val(),
        }
        
        $.ajax({
            type: "POST",
            url: "shop/ajaxProductValue",
            data: data,
            beforeSend: ()=>{
                addProductLock = '<tr><td>'+'</td><td>'+data.name+'</td><td>'+data.price+'</td><td>'+data.quantity+'</td><td>'+data.seller+'</td></tr>'

                $('#tbodyProduct').append(addProductLock)
            },
            success: function (data) {
                $('.from-group input').val('')

            },
            // name: 12,
            });
        }

    }
    $('.ajaxproduct-save').click(function () { 
        addProduct()        
    });
    // $.getJSON({
    //         type: "POST",
    //         url: 'ajaxV' ,
    //         data: {
    //             name: 'Karol',
    //             age: 19,
    //         },
    //         dataType: "JSON",
    //         beforeSend:function(){
    //             $('#text1').val('before')
    //             console.log('before');
    //         },
    //         success: function (data,status, xhr) {
    //             console.log(data);
    //             $('#div1').append("name: "+data.data.name+"data: "+data+"\n - ");
    //         },
    //     });
    // $(document).ready(function () {
        // $('#addProduct').validate({
        //     rules:{
        //         name: "required",
        //         price: "required",
        //         quantity: "required",
        //         seller: "required",
        //     },xa
            
        // })
    // });

</script>