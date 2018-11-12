<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galerija</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/galerijacss.css') }}" >
</head>
<body >
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
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
              <a class="nav-link" href="/galvenalappa#Leciens">Par Grumpy Cat</a>
              
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/kontakti">Kontakti</a>
            </li>
          
          </ul>
        </div>
      </nav>

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" ></i>
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" >
          <div class="carousel-item active">
            <img class="d-block w-100" src="https://www.rd.com/wp-content/uploads/2016/04/01-cat-wants-to-tell-you-laptop.jpg" alt="First slide" >
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://images.alphacoders.com/911/911147.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://99px.ru/sstorage/53/2016/03/mid_159439_3019.jpg" alt="Third slide" >
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      

<div id="full_cont2">
  <div style="overflow:hidden">
  <div id="full_text2">
      
   <div id="our_works"></div>
      <div class="mainTitle main">
   Resno Galerijas
      </div>
  </div>
  <div id="works_cont">
      <div id="switcher"> <span class="item selected" onclick="$('.item').removeClass('selected'); $(this).addClass('selected'); $('.REd, .RGul, .RARD, .ROWN').removeClass('hide');">visi</span> <span class="item" onclick="$('.item').removeClass('selected'); $(this).addClass('selected'); $('.RGul, .RARD, .ROWN').addClass('hide'); $('.REd').removeClass('hide');">Resnie ēd</span>&nbsp; <span class="item" onclick="$('.item').removeClass('selected'); $(this).addClass('selected'); $('.REd, .RARD, .ROWN').addClass('hide'); $('.RGul').removeClass('hide');">Resnie Guļ</span> <span class="item" onclick="$('.item').removeClass('selected'); $(this).addClass('selected'); $('.RGul, .REd, .ROWN').addClass('hide'); $('.RARD').removeClass('hide');">Resnie ārdas</span> <span class="item" onclick="$('.item').removeClass('selected'); $(this).addClass('selected'); $('.RGul, .REd, .RARD').addClass('hide'); $('.ROWN').removeClass('hide');">Resnie Owno</span></div>
      <div id="round"></div>
      <div id="works">
    <a class="project RARD" href=""><img class="first" src="\images\Kakji\ResnaieArdas\ResnieArdas1.jpg" />RIŽIKS<span>Noķēra čusku </span></a>
    <a class="project REd" href=""><img class="first" src="\images\Kakji\Kakied\KakiEd1.jpg" />Mazais pukainais <span>ziri </span></a>
    <a class="project RGul" href=""><img class="first" src="\images\Kakji\ResnieGul\KakiGul1.jpg" />Pukainais <span>Parubijies </span></a>
    <a class="project RGul" href=""><img class="first" src="\images\Kakji\ResnieGul\KakiGul2.jpg" />Riziks <span>Krāc </span></a>
    <a class="project RGul" href=""><img class="first" src="\images\Kakji\ResnieGul\KakiGul3.jpg" />Raibais <span>Atslēdzies </span></a>
    <a class="project RARD" href=""><img class="first" src="\images\Kakji\ResnaieArdas\ResnieArdas2.jpg" />Duets<span>Mācas ģitārspēli </span></a>
    <a class="project RGul" href=""><img class="first" src="\images\Kakji\ResnieGul\KakiGul4.jpg" />Tīgerits<span>
  mmm.. Sārtais Dīvān </span></a>
    <a class="project RGul" href=""><img class="first" src="\images\Kakji\ResnieGul\KakiGul5.jpg" />Riziks<span>Ripulī </span></a>
    <a class="project RARD" href=""><img class="first" src="\images\Kakji\ResnaieArdas\ResnieArdas3.jpg" />Pāris  <span>
   Uzticība </span></a>
    <a class="project RGul" href=""><img class="first" src="\images\Kakji\ResnieGul\KakiGul6.jpg" />Bračkas <span>
   Palī  </span></a>
    <a class="project ROWN" href=""><img class="first" src="\images\Kakji\ResnoBalvas\ResnoBalvas1.jpg" />Īgnais <span>
  Īgnākais kaķis </span></a>
    <a class="project RGul" href=""><img class="first" src="\images\Kakji\ResnieGul\KakiGul7.jpg" />Fish in House <span>
   Дизайн интерьера </span></a>
    <a class="project ROWN" href=""><img class="first" src="\images\Kakji\ResnoBalvas\ResnoBalvas2.jpg" />BOX Kaķis <span>
   1st.place </span></a>
    <a class="project RGul" href=""><img class="first" src="\images\Kakji\ResnieGul\KakiGul8.jpg" />Guļava <span>
   Kad vajag tad jāguļ </span></a>
    <a class="project RGul" href=""><img class="first" src="\images\Kakji\ResnieGul\KakiGul9.jpg" />Pēc Saunas <span>
   Un pārāk daudz Aliem </span></a>
    <a class="project REd" href=""><img class="first" src="\images\Kakji\Kakied\KakiEd2.jpg" />Neapmierinātais <span>
   Ne Ēdis </span></a>
    <a class="project ROWN" href=""><img class="first" src="\images\Kakji\ResnoBalvas\ResnoBalvas3.jpg" />Ānus <span>
   Kakā Visur </span></a>
    <a class="project RGul" href=""><img class="first" src="\images\Kakji\ResnieGul\KakiGul11.jpg" />Bumbiņa <span>
   Tik Pūkains un mazs</span></a>
    <a class="project REd" href=""><img class="first" src="\images\Kakji\Kakied\KakiEd3.jpg" />Rižiks <span>
   Gaida žirijamo </span></a>
    <a class="project REd" href=""><img class="first" src="\images\Kakji\Kakied\KakiEd4.jpg" />Mazais Pelēcis <span>
   Jau Tika Pie žirijamā </span></a>
    <a class="project ROWN" href=""><img class="first" src="\images\Kakji\ResnoBalvas\ResnoBalvas4.jpg" />Guļava <span>
    VisurGuļ </span></a>
    <a class="project RGul" href=""><img class="first" src="\images\Kakji\ResnieGul\KakiGul12.jpg" />Mūlestiba<span>
    Mīslestiba no mazotnes</span></a>
    <a class="project ROWN" href=""><img class="first" src="\images\Kakji\ResnoBalvas\ResnoBalvas5.jpg" />Mīlulis <span>
   Mīlina visi </span></a>
    <a class="project RGul" href=""><img class="first" src="\images\Kakji\ResnieGul\KakiGul12.jpg" />Gļuks Matrixsa <span>
   Ne to tableti apēda  </span></a>
    <a class="project REd" href=""><img class="first" src="\images\Kakji\Kakied\KakiEd5.jpg" />Resnis <span>
  Jau Laizās </span></a>
    <a class="project RARD" href=""><img class="first" src="\images\Kakji\ResnaieArdas\ResnieArdas4.jpg" />Rižais<span>
  Ar Slotiņu</span></a>
    <a class="project RGul" href=""><img class="first" src="\images\Kakji\ResnieGul\KakiGul13.jpg" />Vegāns <span>
   Var ari draudzēties ar putniem </span></a>
    <a class="project RARD" href=""><img class="first" src="\images\Kakji\ResnaieArdas\ResnieArdas5.jpg" />Resnis <span>
   Resnis Kastē </span></a>
    <a class="project RGul" href=""><img class="first" src="\images\Kakji\ResnieGul\KakiGul14.jpg" />Rubaks <span>
   Zem skapja </span></a>
    <a class="project REd" href=""><img class="first" src="C\images\Kakji\Kakied\KakiEd6.jpg" />Mazais Izsalkušais <span>
   Tika pie sviestmaizes </span></a>
    <a class="project ROWN" href=""><img class="first" src="\images\Kakji\ResnoBalvas\ResnoBalvas6.jpg" />Ūsainais<span>
   Misters Ūsa </span></a>
    <a class="project RGul" href=""><img class="first" src="C\images\Kakji\ResnieGul\KakiGul15.jpg" />Jaunais Kaķis. RELAX <span>
   Vnk Guļ </span></a>
    <a class="project RGul" href=""><img class="first" src="\images\Kakji\ResnieGul\KakiGul16.jpg" />Guļam vel <span>
   Uz dvielīša ertāk </span></a>
    <a class="project RGul" href=""><img class="first" src="\images\Kakji\ResnieGul\KakiGul17.jpg" />Draudzības skaistums <span>
   Var gulēt arī tā </span></a>
    <a class="project RGul" href=""><img class="first" src="\images\Kakji\ResnieGul\KakiGul18.jpg" />If i fit i sleep <span>
   Vienalga kur </span></a>
    <a class="project REd" href=""><img class="first" src="\images\Kakji\Kakied\KakiEd7.jpg" />Mazais Mellais <span>
   Ko Luppī?
   </span></a>
    <a class="project RGul" href=""><img class="first" src="\images\Kakji\ResnieGul\KakiGul19.jpg" />Pūkainais  <span>
   Var arī iepozēt </span></a>
    <a class="project RGul" href=""><img class="first" src="\images\Kakji\ResnieGul\KakiGul23.jpg" />Kaķu bļoda <span>
   Jo vaiāk jo labāk </span></a>
    <a class="project REd" href=""><img class="first" src="\images\Kakji\Kakied\KakiEd8.jpg" />Bračkas <span>
   Tika pie risiem </span></a>
    <a class="project RGul" href=""><img class="first" src="\images\Kakji\ResnieGul\KakiGul20.jpg" />Cik mīksts puncis <span>
   Kādas man ir smukas ķepas </span></a>
    <a class="project RGul" href=""><img class="first" src="\images\Kakji\ResnieGul\KakiGul21.jpg" />MMMM mīksti<span>
   Jauns pleds </span></a>
    <a class="project REd" href=""><img class="first" src="\images\Kakji\Kakied\KakiEd9.jpg" />Oligarhs<span>
  Diez kuru ēst </span></a>
    <a class="project RGul" href=""><img class="first" src="\images\Kakji\ResnieGul\KakiGul22.jpg" />Izmēram nav nozīmes <span>
   Galvenais ka spilvens der </span></a>
    <div class="clear"></div>
      </div>
  </div>
  
       </div>
     </div>
      </div>
    </div>

    <footer>
        @Marchello2m 2018    
</footer>
        
        <script src="{{asset('http://nott.com.ua/js/jquery.min.js')}}"></script>
      
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>