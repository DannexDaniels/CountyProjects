<div class="content">
    <div class="container-fluid">
        <?php foreach ($project as $proj):
            $amount = $this->projectModel->getProjectCost($proj['project_id']);

            ?>
            <div class="card">
                <div class="header">
                    <h4 class="title"><?php echo $proj['title'];?></h4>
                    <p class="category"><?php echo $proj['description'];?></p>
                    <div class="row">
                        <div class="col-sm-4">
                            <h5>Started Date: <?php echo $proj['start_date'];?></h5>
                        </div>
                        <div class="col-sm-4">
                            <h5>Finish Date: <?php echo $proj['end_date'];?></h5>
                        </div>
                        <div class="col-sm-4">
                            <h5>Cost: <?php echo 'sh '.$amount['amount'];?></h5>
                        </div>
                    </div>
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
                                <td><h5 class="title">Time</h5></td>
                                <td><h5 class="title">Cost</h5></td>
                                <td><h5 class="title">Status</h5></td>
                                <td><h5 class="title">Percentage</h5></td>
                            </thead>
                            <tbody>
                                <?php
                                    $num = 1;
                                    foreach ($data as $milestone):?>
                                    <tr>
                                        <td><?php echo $num; ?></td>
                                        <td>
                                            <?php echo form_open('editMilestone')?>
                                            <input type="text" name="title" value="<?php echo $milestone['title'];?>" required hidden/>
                                            <input type="submit" name="submit_title" value="<?php echo $milestone['title'];?>" style="background-color: white; border: white;"/>
                                            <?php echo form_close()?>
                                        </td>
                                        <td><?php
                                            $diff_real = abs(strtotime($proj['end_date']) - strtotime($proj['start_date']));
                                            $diff = $milestone['proportion']/100 * $diff_real;
                                            $years = floor($diff / (365*60*60*24));
                                            $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                                            $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
                                            printf ("%d years, %d months, %d days\n", $years, $months, $days);
                                            ?></td>
                                        <td><?php echo 'sh '.($milestone['proportion']/100 * $amount['amount']);?></td>
                                        <td><?php echo $milestone['status'];?></td>
                                        <td><?php echo $milestone['proportion'].'%';?></td>
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