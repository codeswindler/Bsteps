<?php include 'inc/header.php'; ?>
        <title>USER INPUT</title>   
    </head>
    <body>
        <h1>Send Single Message</h1>
        <hr/>

        <?php
        if (isset($_POST['submit'])) {
            // $name= $_POST["name"];
            $number= $_POST["phone_number"];
            $message = $_POST["message"];

        }
        ?>


<div class="page-content page-container" id="page-content">
            <div class="padding">
                <form action="smsapi.php" method="post">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Send Single SMS</h5>
                                    <div class="form-group">
                                        <!-- <label for="nameField">Enter you Name</label> -->
                                        <input type="txt" name="name" id="name" class="form-control " placeholder="enter your name" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="phoneNumber">Phone Number</label>
                                        <input type="tel" name="phone_number" id="phoneNumber" class="form-control " placeholder="e.g 0719133270" value="">
                                                                            </div>



                                                                            <div class="form-group">
                                        <label for="messageField">Compose Message <span class="text-warning text-sm">[15 characters are automatically added for opt out]</span></label>
                                        <textarea name="message" id="messageField" rows="5" class="form-control "></textarea>
                                                                                <div id="sms-counter" class="d-flex mt-2 text-sm">
                                            <span><span class="length">15</span>/<span class="remaining">145</span> characters</span>
                                            <span class="d-none d-md-block">&nbsp;&nbsp; Encoding:<span class="encoding">GSM_7BIT</span></span>
                                            <span class="flex"></span>
                                            <span>Per MSg:<span class="per_message">160</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                            <span><span class="messages">1</span>/6 sms</span>
                                        </div>
                                    </div>

                                    <input type="submit"  value="submit" name="submit">
         </form>

        </center>
        <?php include 'inc/footer.php'; ?>