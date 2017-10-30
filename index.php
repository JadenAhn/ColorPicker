<!-- index.php
     Practicing Bootstrap

     Revision History
        Jaden Ahn, 2017.07.08: Created
-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Color Picker</title>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function(){
                $(".palette").click(function(){
                    var color = $(this).css('backgroundColor');
                    var hexColor = rgb2hex(color).toUpperCase();
                    var $temp = $("<input>");
                    $("body").append($temp);
                    $temp.val(hexColor).select();
                    document.execCommand("copy");
                    $temp.remove();
                    alert("Copied " + hexColor + " to Clipboard");
                })
            })

            var hexDigits = new Array
            ("0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f");

            //Function to convert rgb color to hex format
            function rgb2hex(rgb)
            {
                rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
                return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
            }

            function hex(x)
            {
                return isNaN(x) ? "00" : hexDigits[(x - x % 16) / 16] + hexDigits[x % 16];
            }
        </script>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/site.css" rel="stylesheet">
    </head>

    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-example" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Conestoga</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-example">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="https://conestoga.desire2learn.com/d2l/home" target="blank">eConestoga <span class="sr-only">(current)</span></a></li>
                        <li><a href="https://studentportal.conestogac.on.ca/StudentPortal/Default.aspx" target="blank">Student Portal</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="https://vpn.conestogac.on.ca/dana/home/index.cgi" target="blank">Off-Campus Access(VPN)</a></li>
                                <li><a href="https://library.conestogac.on.ca/" target="blank">Library Resource Center</a></li>
                                <li><a href="https://vlc.conestogac.on.ca/" target="blank">Learning Commons</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="http://www.conestogac.on.ca/" target="blank">Conestoga College</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="http://www.cic.gc.ca/" target="blank">Government of Canada</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Search</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="https://myconestoga.ca/group/mycampus/home" target="blank">myConestoga</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="https://vpn.conestogac.on.ca/dana/home/index.cgi" target="blank">Off-Campus Access(VPN)</a></li>
                                <li><a href="https://library.conestogac.on.ca/" target="blank">Library Resource Center</a></li>
                                <li><a href="https://vlc.conestogac.on.ca/" target="blank">Learning Commons</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="http://www.conestogac.on.ca/" target="blank">Conestoga College</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div style="padding-bottom:2em;">
            <h1 style="padding-top:1.5em; color:#e57373">Material Design <span style="color:#ffd54f">Palette</span></h1>
            <h2 style="color:#FFF; font-size:150%"><span style="color:#E91E63">CLICK</span> the <span style="color:#2196F3">COLOR</span> below to <span style="color:#FFEB3B">COPY</span> the HEX Color Code!</h2>
            <div class="container">
                <div class="col-xs-3 palette" style="background-color: #F34336;">Red</div>
                <div class="col-xs-3 palette" style="background-color: #E91E63;">Pink</div>
                <div class="col-xs-3 palette" style="background-color: #9C27B0;">Purple</div>
                <div class="col-xs-3 palette" style="background-color: #673AB7;">Deep Purple</div>
                <div class="col-xs-3 palette" style="background-color: #3F51B5;">Indigo</div>
                <div class="col-xs-3 palette" style="background-color: #2196F3;">Blue</div>
                <div class="col-xs-3 palette" style="background-color: #03A9F4;">Light Blue</div>
                <div class="col-xs-3 palette" style="background-color: #00BCD4;">Cyan</div>
                <div class="col-xs-3 palette" style="background-color: #009688;">Teal</div>
                <div class="col-xs-3 palette" style="background-color: #4CAF50;">Green</div>
                <div class="col-xs-3 palette" style="background-color: #8BC34A;">Light Green</div>
                <div class="col-xs-3 palette" style="background-color: #CDDC39;">Lime</div>
                <div class="col-xs-3 palette" style="background-color: #FFEB3b;">Yellow</div>
                <div class="col-xs-3 palette" style="background-color: #FFC107;">Amber</div>
                <div class="col-xs-3 palette" style="background-color: #FF9800;">Orange</div>
                <div class="col-xs-3 palette" style="background-color: #FF5722;">Deep Orange</div>
                <!--<div class="col-xs-3 palette" style="background-color: #795548;">Brown</div>
                <div class="col-xs-3 palette" style="background-color: #9e9e9e;">Grey</div>-->
            </div> <!-- /container (grid)-->
        </div>
        <footer>
            INFO2070-17S-Sec1-Systems Development: Analysis | Designed &amp; Coded by Jaden
        </footer>
    </body>
</html>
