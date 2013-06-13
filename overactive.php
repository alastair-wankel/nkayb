
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
    
    #div1, #div2, #div3
    {float:left; width:100px; height:35px; margin:1px;padding:10px;border:1px solid #aaaaaa;}
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">





    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
   
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Project name</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="warframes">Warframes</a></li>
                  <li><a href="weapons">Weapons</a></li>
                  <li><a href="sentinels">Sentinels</a></li>
                </ul>
              </li>
            </ul>
            <form class="navbar-form pull-right">
              <input class="span2" type="text" placeholder="Email">
              <input class="span2" type="password" placeholder="Password">
              <button type="submit" class="btn">Sign in</button>
            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit" ondrop="drop(event)" ondragover="allowDrop(event)">
        <img draggable="true" ondragstart="drag(event)"  src="images/img_w3slogo.gif" id="drag3" width="88" height="31">
        <img draggable="true" ondragstart="drag(event)"  src="images/img_w3slogo.gif" id="drag1" width="88" height="31">
        <img draggable="true" ondragstart="drag(event)"  src="images/img_w3slogo.gif" id="drag2" width="88" height="31">
      </div>

    </div>
      <!-- Example row of columns -->
<div class="container">
  <div class="row">
  <div class="carousel slide span8" id="myCarousel">
  <div class="carousel-inner">
  <div class="item active" >
        <ul class="thumbnails">
            <li class="span2">
                            <div id="div1"  ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                        </li>
                        <li class="span2">
                            <div id="div2"  ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                        </li>
                        <li class="span2">
                            <div id="div3"  ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                        </li>
            
        </ul>
  </div>
  <div class="item">
  <ul class="thumbnails">
            <li class="span2">
                            <div id="div1"  ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                        </li>
                        <li class="span2">
                            <div id="div2"  ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                        </li>
                        <li class="span2">
                            <div id="div3"  ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                        </li>
            
        </ul>
  </div>
  
</div>
<a data-slide="prev" href="#myCarousel" class="left carousel-control">‹</a>
<a data-slide="next" href="#myCarousel" class="right carousel-control">›</a>
</div>
</div>
</div>

      <hr>

      

    </div> 
      
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script>
function allowDrop(ev)
{
ev.preventDefault();
}

function drag(ev)
{
ev.dataTransfer.setData("Text",ev.target.id);
}

function drop(ev)
{
ev.preventDefault();
var data=ev.dataTransfer.getData("Text");
ev.target.appendChild(document.getElementById(data));
}
</script>

    



    
</body>
</html>

