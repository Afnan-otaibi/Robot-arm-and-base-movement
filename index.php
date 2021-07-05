<!DOCTYPE html>
<html>
<head>
<title>Robot control arm </title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<form action="conn.php" method = "POST">   
    <div class="box1">
      <h3>MOTORS MOVEMENT</h3>

      <div class="slider-wrapper">
        <input type="range" min="1" max="180" class="slider" name="m1">
        <span>50</span>
      </div>
        

      <div class="slider-wrapper">
        <input type="range" min="1" max="180" class="slider" name="m2">
        <span>50</span>
      </div>

      <div class="slider-wrapper">
        <input type="range" min="1" max="180" class="slider" name="m3">
        <span>50</span>
      </div>

       <div class="slider-wrapper">
        <input type="range" min="1" max="180" class="slider" name="m4">
        <span>50</span>
      </div>
      
      <div class="slider-wrapper">
        <input type="range" min="1" max="180" class="slider" name="m5">
        <span>50</span>
      </div>

      <div class="slider-wrapper">
        <input type="range" min="1" max="180" class="slider"name="m6">
        <span>50</span>
      </div>

      <input type="submit" value="SAVE" class="b">
      <input type="submit" value="ON/OFF" class="b">
      
    
   
    
     <div>
      <h3>Dirction CONTROL</h3>
        <button type="button" class="b">Forward</button>
        <button type="button"class="b">Backward</button>
        <button type="button"class="b">Left</button>
        <button type="button"class="b">Right</button>   
        <button type="button"class="b">Stop</button>

        </div> 
</div>
    </form>
    
      <script src="sl.js"></script>

</body>
</html>