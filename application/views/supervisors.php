<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="header">
                <h4 class="title">Supervisors</h4>
                <!--<p class="category">that have been developed, still being developed and that are yet to be developed</p>-->
            </div>
            <div class="content">
                <div class="table-full-width">
                    <table class="table">
                        <thead>
                        <td><h5 class="title">Number</h5></td>
                        <td><h5 class="title">Full Name</h5></td>
                        <td><h5 class="title">Title</h5></td>
                        <td><h5 class="title">Organization</h5></td>
                        <td><h5 class="title">Phone</h5></td>
                        <td><h5 class="title">Email</h5></td>
                        </thead>
                        <tbody>
                        <?php
                        $num = 1;
                        foreach ($supervisor as $sup):?>
                            <tr>
                                <td><?php echo $num; ?></td>
                                <td><?php echo $sup['fname']." ".$sup['mname']." ".$sup['lname'];?></td>
                                <td><?php echo $sup['title'];?></td>
                                <td><?php echo $sup['organization'];?></td>
                                <td><?php echo $sup['phone'];?></td>
                                <td><?php echo $sup['email'];?></td>
                            </tr>
                            <?php
                            $num++;
                        endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>