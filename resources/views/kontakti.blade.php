<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kontakti</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/kontakticss.css') }}" >

    <script>
      function myMap() {
      var mapOptions = {
          center: new google.maps.LatLng(56.946285, 24.105078),
          zoom: 10,
          mapTypeId: google.maps.MapTypeId.HYBRID
      }
      var map = new google.maps.Map(document.getElementById("map"), mapOptions);
      }
      </script>

    

</head>
<body background="https://images6.alphacoders.com/907/907625.jpg">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/"><img src="\images\mazais.png" height="60" width="80"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/galvenalappa">Galvenā Lappa <span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="/galerija">Galerija</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/galvenalappa#Leciens">Par Grumpy Cat</a>
                
              </li>
          
          </ul>
        </div>
      </nav>

      <div class="container">

        <h3 class="text-center">Sazinieties ar Mums</h3><br />
        
        <div class="row">
          <div class="col">
              <form action="/post" method="post">
                <input class="form-control" name="name" placeholder="Vārds..." /><br />
                <input class="form-control" name="phone" placeholder="Telefons..." /><br />
                <input class="form-control" name="email" placeholder="E-Pasts..." /><br />
                <textarea class="form-control" name="text" placeholder="Ko tu gribi?.." style="height:150px;"></textarea><br />
                <input class="btn btn-primary" type="submit" value="Sūtīt" /><br /><br />
              </form>
          </div>

          <div class="col">
            

            <div id="map" style="width:400px;height:400px;background:yellow"></div>
            
           
            <script src="https://maps.googleapis.com/maps/api/js?AIzaSyAWEG-hlaP_V_J67G-2u7UtjK-AugAk9Bk&callback=myMap"></script>
          
          </div>
          
          <div class="col">
            <b>Kaķu Māja:</b> <br />
            Phone: +1 129 209 291<br />
            E-mail: <a href="MEOW@MEOW.com">MEOW@MEOW.com</a><br />

            

            <br /><br />
            <b>Kaķu Tante:</b><br />
            Company Inc, <br />
            Las vegas street 201<br />
            55001 Nevada, USA<br />
            Phone: +1 145 000 101<br />
            <a href="mailto:Marchello2m@gmail.com">marchello2m@gmail.com</a><br />
        
        
            <br /><br />
            <b>Zivju Paviljons:</b><br />
            Company HK Litd, <br />
            25/F.168 Queen<br />
            Wan Chai District, Hong Kong<br />
            Phone: +852 129 209 291<br />
            <a href="mailtoMEOW@MEOW.com">MEOW@MEOW.com</a><br />
        
        
          </div>
        </div>
        
        </div>
        
        <footer>
        @Marchello2m 2018    
</footer>
       
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>