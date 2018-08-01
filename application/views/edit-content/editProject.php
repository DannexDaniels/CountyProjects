<div class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-2">
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Add Project</h4>
                    </div>
                    <div class="content">
                        <?php echo form_open('editProject')?>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" value="<?php echo $project['title'];?>" required readonly/>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control" required readonly>
                                    <?php echo trim($project['description']);?>
                                </textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Start Date</label>
                                        <input type="date" name="start" class="form-control" value="<?php echo $project['start_date'];?>" required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>End Date</label>
                                        <input type="date" name="end" class="form-control" value="<?php echo $project['end_date'];?>" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Project Status</label>
                                <?php
                                //create an array that will contain the options in the select dropdown
                                $status = array('not started'=>'Not Started','running'=>'Running','finished'=>'Finished');
                                echo form_dropdown('status',$status,$project['status'],'class="form-control"');
                                ?>
                            </div>
                            <div class="form-group">
                                <label>Total Amount</label>
                                <input type="text" name="amount" class="form-control" value="<?php echo $project['amount'];?>" required/>
                            </div>
                            <input type="submit" name="submit" value="Submit" class="btn btn-info btn-fill pull-right"/>
                            <div class="clearfix"></div>
                        <?php echo form_close()?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>