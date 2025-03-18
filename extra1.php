
          <div class="card-header" style="background-color:#1796DF;">
            <h3 class="card-title" style="color:white; padding-top:15px">Package Card Content Settings</h3>
          </div>
          <form role="form" method="post" action="packagecontentprocess.php" style="padding-bottom:100px;">

                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                    <input type="checkbox" name="day1"  class="custom-control-input" id="customSwitch1"
                          <?php
                            if($user_data['day1']){
                              echo "checked";
                            }
                          ?>
                          >
                          <label class="custom-control-label" for="customSwitch1">Day 1</label>
                          </div>


                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                    <input type="checkbox" name="day2"  class="custom-control-input" id="customSwitch2"
                          <?php
                            if($user_data['day2']){
                              echo "checked";
                            }
                          ?>
                          >
                          <label class="custom-control-label" for="customSwitch2">Day 2</label>
                          </div>

                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                    <input type="checkbox" name="day3"  class="custom-control-input" id="customSwitch3"
                          <?php
                            if($user_data['day3']){
                              echo "checked";
                            }
                          ?>
                          >
                          <label class="custom-control-label" for="customSwitch3">Day 3</label>
                          </div>

                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                    <input type="checkbox" name="day4"  class="custom-control-input" id="customSwitch4"
                          <?php
                            if($user_data['day4']){
                              echo "checked";
                            }
                          ?>
                          >
                          <label class="custom-control-label" for="customSwitch4">Day 4</label>
                          </div>

                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                    <input type="checkbox" name="day5"  class="custom-control-input" id="customSwitch5"
                          <?php
                            if($user_data['day5']){
                              echo "checked";
                            }
                          ?>
                          >
                          <label class="custom-control-label" for="customSwitch5">Day 5</label>
                          </div>

                          <!-- /.card-body -->
                          <table>
                          <tr>
                            <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                            <td><input type="submit" name="update_card" class="btn btn-primary" value="Update"></td>
                          </tr>
                          </table>
          </form>
















































<div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                  <input type="checkbox" name="day1"  class="custom-control-input" id="customSwitch1"
                  <?php
                    if($user_data['day1']){
                      echo "checked";
                    }
                  ?>
                  >
                  <label class="custom-control-label" for="customSwitch1">Day 1</label>
                  </div>


                  <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                  <input type="checkbox" name="day2"class="custom-control-input" id="customSwitch2"
                  <?php
                    if($user_data['day2']){
                      echo "checked";
                    }
                  ?>
                  >
                  <label class="custom-control-label" for="customSwitch2">Day 2</label>
                  </div>



                  <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                  <input type="checkbox" name="day3"class="custom-control-input" id="customSwitch3"
                  <?php
                    if($user_data['day3']){
                      echo "checked";
                    }
                  ?>
                  >
                  <label class="custom-control-label" for="customSwitch3">Day 3</label>
                  </div>



                  <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                  <input type="checkbox" name="day4" class="custom-control-input" id="customSwitch4"
                  <?php
                    if($user_data['day4']){
                      echo "checked";
                    }
                  ?> 
                  >
                  <label class="custom-control-label" for="customSwitch4">Day 4</label>
                  </div>   


                  <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                  <input type="checkbox" name="day5" class="custom-control-input" id="customSwitch5"
                  <?php
                    if($user_data['day5']){
                      echo "checked";
                    }
                  ?>
                  >
                  <label class="custom-control-label" for="customSwitch3">Day 5</label>
</div>