  <!DOCTYPE html>
    <html>
        <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <title>End After Start</title>
        <script type="text/javascript">
            function datestart(value){
                document.getElementById("date_end").value = value;
            }
            function dateend(value){
                var vdatestart = document.getElementById("date_start").value;
                if (value<vdatestart){
                    document.getElementById("date_end").value < vdatestart; 
                }
            }
        </script>
        <style>
            .col-30 {
                    float: left;
                    width: 30%;
                    margin-top: 6px;
            }
            .col-70 {
                    float: left;
                    width: 70%;
                    margin-top: 6px;
            }
            .container {
                    border-radius: 5px;
                    background-color: #f2f2f2;
                    padding: 20px;
            }
            .row:after {
                    display: table;
                    clear: both;
            }
        </style>
        </head>
        <body>
            <?php
                $datemin = '2020-08-03T00:00';
                $datemax = '2020-12-31T08:00';
                $currentdate = '2020-08-22T08:00';
            ?>
            <div class="container">
                <form name="form1" action="" method = "post">  

                    <div class="row">
                        <div class="col-30">
                            <label>Start Date and Time from Start:</label>
                        </div>
                        <div class="col-70">
                            <input type='datetime-local' name='date_start' id='date_start' min='<?php echo $datemin; ?>' max='<?php echo $datemax; ?>' required value='<?php echo $currentdate; ?>' onchange="datestart(this.value);" onclick="datestart(this.value);" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-30">
                            <label>End Date and Time:</label>
                        </div>
                        <div class="col-70">
                            <input type='datetime-local' name='date_end' id='date_end' min='<?php echo $datemin; ?>' max='<?php echo $datemax; ?>' required value='<?php echo $currentdate; ?>' onchange="dateend(this.value);" onclick="dateend(this.value);" />
                        </div>
                    </div>
                    <div class="row">
                        <input type="submit" name="submit" value="Send">
                    </div>


                </form>
            </div>
        </body>
    </html>
