<div class="modal fade" id="update_modal<?php echo $row['id'] ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" action="update_query.php">
        <div class="modal-header">
          <h3 class="modal-title">Update Appointment</h3>
        </div>
        <div class="modal-body">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="form-group">
              <label>Name</label>
              <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
              <input type="text" name="name" value="<?php echo $row['name']?>" class="form-control" required="required"/>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" value="<?php echo $row['email']?>" class="form-control" required="required" />
            </div>
            <div class="form-group">
              <label>Phone</label>
              <input type="tel" name="phone_num" value="<?php echo $row['phone_num']?>" class="form-control" required="required"/>
            </div>
            <div class="form-group">
              <label>Appointment Date</label>
              <input type="text" name="appointment_date" value="<?php echo $row['appointment_date']?>" class="form-control" required="required"/>
            </div>
            <div class="form-group">
              <label>Messages</label>
              <input type="text" name="messages" value="<?php echo $row['messages']?>" class="form-control" required="required"/>
            </div>
            <div class="form-group">
              <label>User Case</label>
              <select name="user_case" class="form-select form-control" aria-label="Default select example" required="required">
                                    <option selected value="<?php echo $row['user_case']?>">...</option>
                                    <option value="1">Family Case</option>
                                    <option value="2">Consumer Case</option>
                                    <option value="3">Criminal Case</option>
                                    <option value="4">Business Case</option>
                                    </select>                
            </div>
          </div>
        </div>
        <div style="clear:both;"></div>
        <div class="modal-footer">
          <button name="update" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Update</button>
          <button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
        </div>
        </div>
      </form>
    </div>
  </div>
</div>