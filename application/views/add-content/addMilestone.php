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
                        <?php echo form_open('addMilestone')?>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" placeholder="e.g. Engineer/Doctor/Administrator" required/>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control" placeholder="Description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Project Status</label>
                            <?php
                            //create an array that will contain the options in the select dropdown
                            $status = array('not started'=>'Not Started','running'=>'Running','finished'=>'Finished');
                            echo form_dropdown('status',$status,'not started','class="form-control"');
                            ?>
                        </div>
                        <div class="form-group">
                            <label>Proportion of the milestone in the project(%)</label>
                            <input type="text" name="proportion" class="form-control" placeholder="example: 20" required/>
                        </div>
                        <input type="submit" name="submit" value="Submit" class="btn btn-info btn-fill pull-right"/>
                        <input type="submit" name="add_more" value="Add" class="btn btn-info btn-fill pull-left"/>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>