<html>

<body>
    
  <div class="slider">
    <div class="slides">
      <input type="radio" name="radio-btn" id="radio1">
      <input type="radio" name="radio-btn" id="radio2">
      <input type="radio" name="radio-btn" id="radio3">

      <div class="slide first">
        <img src="imgs/slipknot-news.png" alt="Imagem 1">
      </div>
      <div class="slide">
        <img src="imgs/sabrina-news.png" alt="Imagem 2">
      </div>
      <div class="slide">
        <img src="imgs/tyler-news.png" alt="Imagem 3">
      </div>

      <div class="navigation-auto">
        <div class="auto-btn1"></div>
        <div class="auto-btn2"></div>
        <div class="auto-btn3"></div>
      </div>
    </div>

    <div class="manual-navigation">
      <label for="radio1" class="manual-btn"></label>
      <label for="radio2" class="manual-btn"></label>
      <label for="radio3" class="manual-btn"></label>
    </div>
  </div>
  
  <div class="news">
    A edição de 2024 do Knotfest Brasil foi marcada por intensas apresentações e alguns imprevistos técnicos que não tiraram o brilho do evento. <br>no Allianz Parque em São Paulo, o festival reuniu grandes nomes do metal, como Slipknot, Mudvayne e Babymetal. O Slipknot, que foi o headliner <br>das duas noites, apresentou um setlist com clássicos de sua carreira, trazendo energia máxima ao palco, especialmente durante as músicas de seu <br>álbum de estreia. A presença de Eloy Casagrande na bateria, substituindo Jay Weinberg, foi um destaque emocionante para os fãs brasileiros. <br>Bandas brasileiras como Krisiun e Ratos de Porão também se apresentaram e foram muito bem recebidas, embora o palco secundário tenha <br>enfrentado críticas por falta de iluminação em alguns momentos.<br><br>

    Na cena pop, Sabrina Carpenter lançou o single "Espresso", que traz uma sonoridade vibrante e cativante, com uma energia envolvente. <br>A canção reflete a versatilidade de Sabrina e foi bem recebida por seu público, mostrando um lado autoconfiante e explorando novas texturas em <br>seu trabalho. O lançamento se soma ao crescente sucesso da cantora, que se consolida como uma das vozes proeminentes do pop atual.<br><br>

    Tyler, The Creator também lançou seu novo álbum, que explora uma rica fusão de estilos e letras introspectivas. O trabalho reflete a maturidade <br>do artista, abordando temas pessoais como identidade, crescimento e os desafios da fama. Através de batidas únicas e variações de gênero, Tyler<br>continua a se destacar como um dos artistas mais inovadores da música contemporânea, conquistando tanto os fãs quanto a crítica com sua autenticidade e criatividade.
  </div >

</body>

<style>

  .slider{
    margin: 0 auto;
    width: 800px;
    height: 500px;
    overflow: hidden;
    border-radius: 10px;
  }

  .slides{
    width: 400%;
    height: 400px;
    display: flex;
  }

  .slides input{
    display: none;
  }

  .slide{
    width: 25%;
    position: relative;
    transition: 2s;
  }

  .slide img{
    width: 800px;
  }

  .manual-navigation{
    position: absolute;
    width: 800px;
    margin-top: 50px;
    display: flex;
    justify-content: center;
  }

  .manual-btn{
    border: 2px solid #fff;
    padding: 5px;
    border-radius: 10px;
    cursor: pointer;
    transition: 1s;
  }

  .manual-btn:not(:last-child){
    margin-right: 40px;
  }

  .manual-btn:hover{
    background-color: #fff;
  }

  #radio1:checked ~ .first{
    margin-left: 0;
  }
  #radio2:checked ~ .first{
    margin-left: -25%;
  }
  #radio3:checked ~ .first{
    margin-left: -50%;
  }

  .navigation-auto div{
    border: 2px solid #fff;
    padding: 5px;
    border-radius: 10px;
    cursor: pointer;
    transition: 1s;
  }

  .navigation-auto{
    position: absolute;
    width: 800px;
    margin-top: 450px;
    display: flex;
    justify-content: center;
  }
  .navigation-auto div:not(:last-child){
    margin-right: 40px;
  }

  #radio1:checked ~ .navigation-auto .auto-btn1{
    background-color: #fff;
  }
  #radio2:checked ~ .navigation-auto .auto-btn2{
    background-color: #fff;
  }
  #radio3:checked ~ .navigation-auto .auto-btn3{
    background-color: #fff;
  }

  .news{
    font-size: 16px;
    margin-top: 10px;
    margin-left: 10px;
    padding: 15px;
    background-color: #ADD8E6;
    text-align: center;
    border-radius: 5px;
  }
</style>

<script>
  let count = 1;
  document.getElementById("radio1").checked = true;

  setInterval( function(){
    nextImage()
  }, 5000)

  function nextImage(){
    count++;
    if(count>3){
      count = 1;
    }
    document.getElementById("radio"+count).checked = true;
  }

</script>
</html>