<div class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-2">
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Add Milestone</h4>
                    </div>
                    <div class="content">
                        <?php echo form_open('editMilestone')?>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="<?php echo $milestone['title'];?>" required readonly/>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control" required readonly><?php echo $milestone['description'];?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Project Status</label>
                            <?php
                            //create an array that will contain the options in the select dropdown
                            $status = array('not started'=>'Not Started','running'=>'Running','finished'=>'Finished');
                            echo form_dropdown('status',$status,$milestone['status'],'class="form-control"');
                            ?>
                        </div>
                        <div class="form-group">
                            <label>Proportion of the milestone in the project(%)</label>
                            <input type="text" name="proportion" class="form-control" value="<?php echo $milestone['proportion'];?>" required/>
                        </div>
                        <input type="submit" name="submit" value="Submit" class="btn btn-info btn-fill pull-right"/>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>