
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="../CSS/personal-info.css">
        <link rel="icon" href="../IMG/Logo.jpeg" sizes="16x16" type="image/png">
        <title>
            Resume Builder | Builder
        </title>
    </head>
    <body>

        <div class="header"><b>
            <a class="title" href="index.html">
                <img class="logo" src="../IMG/Logo.jpeg">
                <h1>Resume Builder</h1>
            </a>
            <ol class="links" type="none">
                <li><a href="../HTML/builders.html">Builders</a></li>
                <li><a href="../Resume Builder/index.html">Resume</a></li>
                <li><a href="../HTML/cover.html">Cover Letter</a></li>
                <li><a href="#">Job Description</a></li>
                <li><a href="../HTML/Letters.html">Letters</a></li>
            </ol></b>
        </div>
        <hr width=1300rem color="blue"><br><br>
        <p class="head">COMPLETE YOUR <strong>RESUME HEADING</strong></p>
        <p class="info">Employers will use this information to contact you.</p>
        <br><br>
        <form class="form" method="POST" autocomplete="on" name="google-sheet" id="form">
            <div class="name">
                <div class="fname">
                    <label> First Name </label><br>
                    <input type="text" placeholder="e.g. John" name="First Name"><br>
                </div>
                <div class="sname">
                    <label> Second Name </label><br>
                    <input type="text" placeholder="e.g. Williams" name="Second Name"><br>
                </div>
            </div>
            <div class="add">
                <label> Address </label><br>
                <input type="text" placeholder="e.g. 60, Collins st." name="Address"><br>
            </div>
            <div class="id">
                <div class="city">
                    <label> City </label><br>
                    <input type="text" placeholder="e.g. San Franciso" name="City"><br>
                </div>
                <div class="zip">
                    <label> ZIP </label><br>
                    <input type="text" placeholder="e.g. 60185" name="ZIP"><br>
                </div>
                <div class="country">
                    <label> Country </label><br>
                    <select name="Country">
                        <option value = "India" default > India </option>
                        <option value = "Australia"> Australia </option>
                        <option value = "Russia"> Russia </option>
                    </select>
                </div>
            </div>
            <div class="name">
                <div class="fname">
                    <label> Email Address </label><br>
                    <input type="text" placeholder="e.g. john_williams@example.com" name="Email Address"><br>
                </div>
                <div class="sname">
                    <label> Phone </label><br>
                    <input type="text" placeholder="e.g. 202-555-0145" name="Phone"><br>
                </div>
            </div><br><br>
            <div class="button">
                <a href="builders.html">
                    <div class="back">
                        <button>BACK</button>
                    </div>
                </a>
                <div class="gap"></div>
                <div class="save">
                    <input type="submit" value="SAVE & NEXT" name="sane" class="saveb">
                </div>
            </div>
        </form><br>
        <div class="foot"></div>
        <div class="footer">
            <a class="footer-title" href="index.html">
                <img class="footer-logo" src="../IMG/Logo.jpeg">
                <h1>Resume Builder</h1><br>
            </a><br>
            <ol type="none" class="footer-links">
                <li><a href="../HTML/builders.html">Builders</a></li>
                <li><a href="#">Resume</a></li>
                <li><a href="#">Cover Letter</a></li>
                <li><a href="#">Job Description</a></li>
                <li><a href="../HTML/Letters.html">Letters</a></li>
            </ol>
        </div>
        <script>
        jQuery('#form').on('submit',function(e){
            e.preventDefault();
            jQuery.ajax({
                url:'https://script.google.com/macros/s/AKfycbxNaORJ36ZOoUlzQ3gK20hVkLMNzvE8nnb9dcVKLTTFPPlYKhdsFtKibVEneKaQp54OIA/exec',
                type:'post',
                data:jQuery('#form').serialize(),
                success:function(result){
                    consol.log(result)
                }
            });
        });

          </script>
    </body>
</html>

