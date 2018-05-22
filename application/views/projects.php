<div class="content">
    <div class="container-fluid">
        <?php foreach ($project as $proj):?>
            <div class="card">
                <div class="header">
                    <h4 class="title"><?php echo $proj['title'];?></h4>
                    <p class="category"><?php echo $proj['description'];?></p>
                </div>
                <div class="content">
                    <div class="table-full-width">
                        <table class="table">
                            <?php
                                $data = $this->projectModel->getMilestones($proj['project_id']);
                                ?>
                            <thead>
                                <td><h5 class="title">Number</h5></td>
                                <td><h5 class="title">Title</h5></td>
                                <td><h5 class="title">Start Date</h5></td>
                                <td><h5 class="title">End Date</h5></td>
                                <td><h5 class="title">Status</h5></td>
                                <td><h5 class="title">Percentage</h5></td>
                            </thead>
                            <tbody>
                                <?php
                                    $num = 1;
                                    foreach ($data as $milestone):?>
                                    <tr>
                                        <td><?php echo $num; ?></td>
                                        <td><?php echo $milestone['title'];?></td>
                                        <td><?php echo $milestone['start_date'];?></td>
                                        <td><?php echo $milestone['end_date'];?></td>
                                        <td><?php echo $milestone['status'];?></td>
                                        <td><?php echo $milestone['percentage'];?></td>
                                    </tr>

                                <?php
                                    $num++;
                                    endforeach;?>
                        </table>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>