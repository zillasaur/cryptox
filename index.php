<!DOCTYPE html>
<html>
    
    <head>
        <title>CryptoX</title>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script src="./js/bootstrap.js"></script>
        <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
        <link href="mystyles.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.firebase.com/js/client/1.1.3/firebase.js"></script>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                        <a class="navbar-brand" href="index.html">
                            <p>CryptoX</p>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                        <li><a href="about.html">About</a></li>
                        <li><a href="#">Planets</a></li>
                          </ul>
                        </li>
                      </ul>
                        <ul class="nav navbar-nav pull-right">
                            <li><a href="signin.html">Sign In</a></li>
                            <li><a href="register.html">Register</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="features" id = "features">
                <div class="container">
                  <div class="row">
                      <br><h1>&nbsp;Join a Planet</h1><br><br><br>
                    <div class="col-md-4">
                        <a href = "#" id = "world" rel="popover" data-html = "true" title-html = "true" title="<a onclick = 'joinworld()'>Join this World</a>" data-content="10% Bitcoin <br \> 70% Government Bonds <br \> 15% Apple (AAPL) <br \> 5% Doge Coin <br \> <b>Size: 32 people<b> <br \> <b>Net Gain: 6.9%<b>"><img src="./images/world.png" height = "250px" id = "worldbit" class = "rotate"></a>
                    </div>
                    <div class="col-md-4">
                        <center id = "info"><br><br><a href = "#" id = "world2" rel="popover" data-html = "true" title-html = "true" title="<a onclick = 'joinworld2()'>Join this World</a>" data-content="30% Dark Coin <br \> 65% 3D Systems Corporation (DDD) <br \> 5% PeerCoin <br \> <b>Size: 12 people<b> <br \> <b>Net Gain: 30%<b>"><img src="./images/world1.png" height = "175px" id = "worldbit2" class = "rotate"></a></center>
                    </div>
                    <div class="col-md-4">
                        <center id = "fad"><br><a href = "#" id = "world3" rel="popover" data-html = "true" title-html = "true" title="<a href = 'joinworld.html'>Join this World</a>" data-content="20% Master Coin <br \> 40% Government Bonds <br />30% Google (GOOG) <br \> 10% PrimeCoin <br \> <b>Size: 26 people<b> <br \> <b>Net Gain: 14%<b>"><img src="./images/medium.png" height = "200px" id = "worldbit3" class = "rotate"></a></center>
                    <script>  
                        var pressedjoinworld = false;
                        var pressedjoinworld2 = false;
                        var information = document.getElementById('fad');
                        var variables = document.getElementById('info');
                        function joinworld() {
                            if (pressedjoinworld == true) {
                                information.innerHTML = '<br><a href = "#" id = "world3" rel="popover" data-html = "true" title-html = "true" title="<a href = "joinworld.html">Join this World</a>" data-content="20% Master Coin <br \> 40% Government Bonds <br />30% Google (GOOG) <br \> 10% PrimeCoin <br \> <b>Size: 26 people<b> <br \> <b>Net Gain: 14%<b>"><img src="./images/medium.png" height = "200px" id = "worldbit3"></a>';
                                variables.innerHTML = '<br><br><a href = "#" id = "world2" rel="popover" data-html = "true" title-html = "true" title="<a onclick = "joinworld2()">Join this World</a>" data-content="30% Dark Coin <br \> 65% 3D Systems Corporation (DDD) <br \> 5% PeerCoin <br \> <b>Size: 12 people<b> <br \> <b>Net Gain: 30%<b>"><img src="./images/world1.png" height = "175px" id = "worldbit2"></a>';
                                $("#worldbit2").fadeIn(1500);
                                $('#worldbit3').fadeIn(1500);
                                $("#world").animate({"padding": "-40px"});
                                $("#worldbit").animate({"width": "250px"}, 1000);
                                $("#worldbit").animate({"height": "220px"}, 1000);
                                pressedjoinworld = false;
                                
                            }
                            else {
                                $("#worldbit2").fadeOut(1500);
                                $('#worldbit3').fadeOut(1500);
                                $("#world").animate({"padding": "40px"});
                                $("#worldbit").animate({"width": "400px"}, 1000);
                                $("#worldbit").animate({"height": "360px"}, 1000);
                                pressedjoinworld = true;
                                var information = document.getElementById('fad');
                                var variables = document.getElementById('info');
                                variables.innerHTML = '<br><Br><br><br><br><h2 align = "right">Bitcoin <br \>Government Bonds <br \>Apple (AAPL) <br \>Doge Coin <br \> <b>Size:<b> <br \> <b>Net Gain: <b><br><br><a type="button" class="btn btn-primary" href = "joinworld.html">Join World</a></h2>';
                                information.innerHTML = '<br><Br><br><br><br><h2 align = "left">10% <br \> 70% <br \> 15%  <br \> 5%  <br \> <b>32 people<b> <br \> <b>6.9%<b></h2>';
                            }
                        }
                        $(document).ready(function(){
                            $("#features").fadeIn(1500);
                            $("#world").popover({
                                placement : 'bottom'
                            });
                            $("#world2").popover({
                                placement : 'bottom'
                            });
                            $("#world3").popover({
                                placement : 'bottom'
                            });
                        }); 
                    </script> 
                        
                    </div>
                  </div>
                </div>
              </div>

    </body>
</html>

<!--    <div class = "col-md-4">
          </div>
          <div class = "col-md-4">
          <a href ="createworld.html" target ="new"><button class="btn btn-lg btn-primary btn-block" type="submit" onclick = "location.href = 'profile.html'">Create a New World</button>
          </a>
          </div> -->