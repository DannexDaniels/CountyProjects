<div class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-2">

            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Add Supervisor</h4>
                    </div>
                    <div class="content">
                        <?php echo form_open('addSupervisor')?>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="fname" class="form-control" placeholder="first name" required/>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Middle Name</label>
                                        <input type="text" name="mname" class="form-control" placeholder="middle name"/>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="lname" class="form-control" placeholder="last name" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" placeholder="e.g. Engineer/Doctor/Administrator" required/>
                            </div>
                            <div class="form-group">
                                <label>Organization</label>
                                <input type="text" name="organization" class="form-control" placeholder="organization" required/>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="text" name="phone" class="form-control" placeholder="e.g. +254712341234" required>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="text" name="email" class="form-control" placeholder="Email" required>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" name="submit" class="btn btn-info btn-fill pull-right">Submit</button>
                            <div class="clearfix"></div>
                        <?php form_close()?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>