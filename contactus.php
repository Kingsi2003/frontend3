<?php
include('header.php')
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="bootsrap5/bootstrap-5.0.2/dist/css/bootstrap.min.css">
       <link rel="stylesheet" href="bootsrap5/bootstrap-5.0.2/dist/js/bootstrap.min.js">
       <link rel="stylesheet" href="bootsrap5/css/filess/font-awesome.css">
       <link rel="stylesheet" href="style.css">
        <title>contact-us</title>
    </head>
<body>
    <div class="container-fluid bg-success contactback d-flex justify-content-center align-items-center flex-column text-capitalize" style="height: 60vh;">
      <h1 style="font-size: 1.5cm; font-family:Georgia, 'Times New Roman', Times, serif;">contact us</h1>
      <p class=" text-center" style="max-width: 600px;line-height: 2;">We would love hearing from you and moreover meeting you in person. Below you can find all contact details. See you soon!</p>
    </div>


    <!-- personalised3 -->
    <div class="col-12">
        <div class="row d-flex justify-content-center align-items-center trr ">
            <div class="col-md-3 tr">
                <div class="col-11 trc2">
                    <h4>Contacts</h4>
                    <p>T: 08174921934</p>
                    <p>topazhob@gmail.com</p>
                </div>
               
            </div>
            <div class="col-md-3 tr">
                <div class="col-11 trc2">
                    <h4>Hours</h4>
                    <p>Mon to Fri: 10:00 am — 7:00 pm</p>
                    <p>Sat: 10:00 am — 7:00 pm</p>
                    <p>Sun: 2:00 pm — 7:00 pm</p>
                </div>
               
            </div>
            <div class="col-md-3 tr">
                <div class="col-11 trc2">
                    <h4>Location</h4>
                    <p>9 Arochukwu street Garki II Abuja, Nigeria.</p>
                </div>
               
            </div>
            
        </div>
        <div class="d-flex align-items-center justify-content-center m-3"><button class="p-4 d-flex align-items-center justify-content-center border-3 border-secondary text-capitalize" style="height: 1.2cm;border-style: solid;"> book an appointment</button></div>

    </div>
    <!-- personalised3 e--> 



    <div class="container">
        <div class="row ">
            <div class="col-12 col-md-6  border-2 d-flex justify-content-center align-items-center flex-column" style="height: 70vh;">
                <h1 style="font-size: 1cm; font-family:Georgia, 'Times New Roman', Times, serif; text-transform: capitalize;">drop us a line</h1>
                <p class=" text-center" style="max-width: 600px;line-height: 2;">Leave us a message and we will get back to you as soon as possible. We’d love hearing from you.</p>
            </div>
            <div class="col-12 col-md-6  d-flex justify-content-center align-items-center flex-column" style="height: 70vh;">
            
            <textarea name="message" id="message" cols="30" rows="10" class="form-control m-auto" style="height: 70%; width: 100%; resize: none;background-color: gainsboro;"></textarea>

            <div class="d-flex align-items-center justify-content-center m-3"><button class="p-4 d-flex align-items-center justify-content-center border-3 border-secondary text-capitalize" style="height: 1.2cm;border-style: solid;">send a message</button></div>

            </div>
        </div>
    </div>
</body>
</html>
<?php
include('footer.php')
?>