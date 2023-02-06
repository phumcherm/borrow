<?php if (isset($_SESSION['success'])) { ?>
    <div class="alert alert-success">
        <center>
            <h4>
                <?php
                echo $_SESSION['success'];
                // unset($_SESSION['success']);
                ?>
            </h4>
        </center>
    </div>
<?php } ?>
<?php if (isset($_SESSION['error'])) { ?>
    <div class="alert alert-danger">
        <center>
            <h4 style="color: black;">
                <?php
                echo $_SESSION['error'];
                unset($_SESSION['error']);
                ?>
            </h4>
        </center>
    </div>
<?php } ?>