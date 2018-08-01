<div class="main-panel">
    <nav class="navbar navbar-default navbar-fixed">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">County Project Monitoring and Automation System</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <?php
                            if ($_SESSION['page'] == 'others'){
                                ?>
                                <a href="<?php echo base_url('addProject')?>"><input type="button" class="btn btn-primary" value="Add Project"/></a>
                        <?php
                            }else {
                                ?>
                                <a href="<?php echo base_url('addSupervisor')?>"><input type="button" class="btn btn-primary" value="Add Supervisor"/></a>
                        <?php
                            }
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>