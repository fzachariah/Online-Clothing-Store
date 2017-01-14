  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align:center;color: #1c1c1d;font-size: 30px;font-style: italic;">Donate Clothing</h4>
        </div>
        <div class="modal-body">
            <form method="post" class="" action= "Donate-Items.php">
                 


              
<div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label">Description</label>
  <div class="col-xs-3">
    <input class="form-control" type="text" name="description" required id="example-text-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-xs-2 col-form-label">Type</label>
  <div class="col-xs-3">
    <select name="type" id="type">
                    <option value="Shirt">Shirt</option>
                    <option value="Suits">Suits</option>
                    <option value="Jeans">Jeans</option>
                    <option value="Jackets">Jackets</option>
                    <option value="Sweater">Sweater</option></select>
  </div>
</div>
<div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label">Size</label>
  <div class="col-xs-3">
    <input class="form-control" type="number" name="Size" required id="example-text-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label">Brand</label>
  <div class="col-xs-3">
    <input class="form-control" type="text" name="Brand" required id="example-text-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label">Gender</label>
  <div class="col-xs-3">
   <select name="gender" id="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option></select>

  </div>
</div>
<div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label">Condition</label>
  <div class="col-xs-3">
    <input class="form-control" type="text" name="Condition" required id="example-text-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label">Asking Price</label>
  <div class="col-xs-3">
    <input class="form-control" type="number" name="AskingPrice" required id="example-text-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label">Category</label>
  <div class="col-xs-9">
    <input class="form-control inline-style" type="text" name="Category1" required id="example-text-input">
    <input class="form-control inline-style" type="text" name="Category2" id="example-text-input">
    <input class="form-control inline-style" type="text" name="Category3" id="example-text-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label">Color</label>
  <div class="col-xs-6">
    <input class="form-control inline-style" type="text" name="Colour1" required id="example-text-input">
    <input class="form-control inline-style" type="text" name="Colour2" id="example-text-input">
    
  </div>
</div>
<div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label">Select Image to upload</label>
  <div class="col-xs-4">
    <input class="form-control" type="file" name="fileToUpload" id="fileToUpload">
   
    
  </div>
</div>


                <div><button class="btn btn-success" style="margin-left: 150px" type="submit" name="submit" value="Submit">Donate</button>
            </form>


         
        </div>
       
      </div>
      
    </div>
  </div>