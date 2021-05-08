<!-- The Insert Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">ADD NEW PRODUCT</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
        <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" name="" id="name" placeholder="Enter Name">
        </div>
        
        <div class="form-group">
             <label>Description:</label>
             <textarea class="form-control" rows="5" id="description"></textarea>		
        </div>
        <div class="form-group">
             <label>Price</label>
             <input type="number" class="form-control" id="price"  placeholder="Enter Price">							
        </div>
        <div class="form-group">
             <label>Quantity</label>
            <input type="number" class="form-control" id="quantity"  placeholder="Enter Quantity">							
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="add()">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>



<!-- The Update Modal -->
 <div class="modal" id="UpdateModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">UPDATE FORM</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
        <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" name="" id="update_name" placeholder="Enter  Name">
        </div>
        
        <div class="form-group">
            <label>Description:</label>
            <textarea class="form-control" rows="5" id="update_description"></textarea>		
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="number" class="form-control" id="update_price"  placeholder="Enter Price">
        </div>

        <div class="form-group">
             <label>Quantity</label>
            <input type="number" class="form-control" id="update_quantity"  placeholder="Enter Quantity">							
        </div>
        
        
        
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="UpdateUser()">Update</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <input type="hidden" name="" id="hidden_id">
      </div>

    </div>
  </div>
</div>
