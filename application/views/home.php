<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Not Started Projects</h4>
                    </div>
                    <div class="content">
                        <a href="">
                            <h2><?php echo $counter['notStarted']; ?></h2>
                        </a>
                        <div class="footer">
                            <hr>
                            <div class="stats">
                                <?php
                                    if ($counter['all']!=0){
                                        $percentage = $counter['notStarted']/$counter['all']*100;
                                    }else{
                                        $percentage = 0;
                                    }
                                    echo "<h5>Percentage: ".$percentage."%</h5>";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Running Projects</h4>
                    </div>
                    <div class="content">
                        <a href="">
                            <h2><?php echo $counter['running']; ?></h2>
                        </a>
                        <div class="footer">
                            <hr>
                            <div class="stats">
                                <?php
                                    if ($counter['all']!=0){
                                        $percentage = $counter['running']/$counter['all']*100;
                                    }else{
                                        $percentage = 0;
                                    }
                                    echo "<h5>Percentage: ".$percentage."%</h5>";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Finished Projects</h4>
                    </div>
                    <div class="content">
                        <a href="">
                            <h2><?php echo $counter['finished']; ?></h2>
                        </a>
                        <div class="footer">
                            <hr>
                            <div class="stats">
                                <?php
                                    if ($counter['all']!=0){
                                        $percentage = $counter['finished']/$counter['all'] *100;
                                    }else{
                                        $percentage = 0;
                                    }
                                    echo "<h5>Percentage: ".$percentage."%</h5>";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h4 class="title">Projects</h4>
                <p class="category">that have been developed, still being developed and that are yet to be developed</p>
            </div>
            <div class="content">
                <div class="table-full-width">
                    <table class="table">
                        <thead>
                            <td><h5 class="title">Number</h5></td>
                            <td><h5 class="title">Title</h5></td>
                            <td><h5 class="title">Start Date</h5></td>
                            <td><h5 class="title">End Date</h5></td>
                            <td><h5 class="title">Status</h5></td>
                            <td><h5 class="title">Company</h5></td>
                        </thead>
                        <tbody>
                            <?php
                                $num = 1;
                                foreach ($project as $proj):?>
                                <tr>
                                    <td><?php echo $num; ?></td>
                                    <td>
                                        <?php echo form_open('editProject')?>
                                        <input type="text" name="title" value="<?php echo $proj['title'];?>" required hidden/>
                                        <input type="submit" name="submit_title" value="<?php echo $proj['title'];?>" style="background-color: white; border: white;"/>
                                        <?php echo form_close()?>
                                    </td>
                                    <td><?php echo $proj['start_date'];?></td>
                                    <td><?php echo $proj['end_date'];?></td>
                                    <td><?php
                                        echo $proj['status'];
                                        ?></td>
                                    <td><?php echo $proj['organization'];?></td>
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