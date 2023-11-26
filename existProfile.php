<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quezon City Public Library Queue</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./images/qcplLogo.png" type="image/x-icon">
    <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    
</head>
<body>

    <section id="swup" class="transtion-fade">
    <div class="logo">
            <img src="./images/qclogo.jpg" alt="">
            <div class="title">
            <p>Quezon City Public Library</p>
            <p>Quezon City Government</p>
            </div>
            <img src="./images/qcplLogo.png" alt="">
        </div>

        <!-- start of demographic form -->
        <div class="wrapper">
            <div class="inner">
                <div class="image-holder">
                    <img src="./images/demographic-img.png" alt="">
                </div>
                <form action="">
                    <h3>For Existing User</h3>
                    <div class="form-group">
                        <input type="text" name="surname" id="" placeholder="Surname" class="form-control">
                        <input type="text" name="firstname" id="" placeholder="Firstname" class="form-control">
                        <input type="text" name="suffix" id="" placeholder="Suffix" class="form-control">
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="form-wrapper">
                        <h1>Please Select Services</h1>
                        <input type="checkbox" id="nbi" name="nbi" value="nbi">
                        <label for="nbi"> NBI</label><br>
                        <input type="checkbox" id="policeclearance" name="policeclearance" value="nbi">
                        <label for="policeclearance"> POLICE CLEARANCE</label><br>
                        <input type="checkbox" id="checkbox1">Other
                        <input type="text" name="" id="dialog1">
                    </div>
                    <a href="profileForm.php" class="existBtn">Don't have Account?</a>
                    <button class="profileBtn">Submit</button>
                </form>
            </div>
        </div>
        
    </section>


      <script>
         $(function() {

            var dialog1 = $("#dialog1");
            var checkbox1 = $("#checkbox1");

            dialog1.dialog({
               autoOpen: false,
               modal: true,
               buttons: {
                  Save: function() {$(this).dialog("close");}
               },
               title: "Type below...",
               close : function() {checkbox1.prop('checked', false);}

            });

            checkbox1.click(function() {
               if (checkbox1.prop("checked")) {
                   dialog1.dialog("open");
               }
            });

         });
      </script>
   </head>


    
    <script src="https://unpkg.com/swup@4"></script>
    <script src="script.js"></script>
</body>
</html>