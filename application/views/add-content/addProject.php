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
                        <?php echo form_open('addProject')?>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" placeholder="e.g. Engineer/Doctor/Administrator" required/>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control" placeholder="Description" required></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Start Date</label>
                                        <input type="date" name="start" class="form-control" placeholder="Select Start Date" required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>End Date</label>
                                        <input type="date" name="end" class="form-control" placeholder="Select End Date" required/>
                                    </div>
                                </div>
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
                                <label>Person Incharge</label>
                                <input type="text" name="supervisor" class="form-control" placeholder="Supervisor" required/>
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