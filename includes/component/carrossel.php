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