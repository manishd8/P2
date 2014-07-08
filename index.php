<!DOCTYPE html>
<html>

<head>
  <LINK href="Style.css" rel="stylesheet" type="text/css">
  <title>Manish Goyal P2</title>
  <meta charset="utf-8">
  <?php require('logic.php'); ?>
</head>

<body >

  <?php $ValueArray = myFunction(); ?>

  <div class="MainBox">

      <div align="center">
          <h1>Password Generator</h1>
          <?php  
            $passStringLen = strlen($ValueArray[0])*12; 
            if(strlen($ValueArray[0])<30){
                $passStringLen = strlen($ValueArray[0])*13; 
                $passStringLen*=(($passStringLen+5)/$passStringLen);
              }
            $passString = 'width: ';
            $passString.=$passStringLen;
            $passString.='px';
          ?>
          <h2 class = "Output" style="<?php echo $passString?>" > 
            <?php echo $ValueArray[0]; ?>
          </h2>
          
      </div><br/><br/>

      <div align="center">

          <form action="index.php" method="GET">
              <select name = "WordCount">
                <option value="1" <?php if($ValueArray[1] == 1) {?> selected = "selected"  <?php } ?>> 1 </option>
                <option value="2" <?php if($ValueArray[1] == 2) {?> selected = "selected"  <?php } ?>> 2 </option>
                <option value="3" <?php if($ValueArray[1] == 3) {?> selected = "selected"  <?php } ?>> 3 </option>
                <option value="4" <?php if($ValueArray[1] == 4) {?> selected = "selected"  <?php } ?>> 4 </option>
                <option value="5" <?php if($ValueArray[1] == 5) {?> selected = "selected"  <?php } ?>> 5 </option>
                <option value="6" <?php if($ValueArray[1] == 6) {?> selected = "selected"  <?php } ?>> 6 </option>
                <option value="7" <?php if($ValueArray[1] == 7) {?> selected = "selected"  <?php } ?>> 7 </option>
            <!--    <option value="8" <?php if($ValueArray[1] == 8) {?> selected = "selected"  <?php } ?>> 8 </option>
                <option value="9" <?php if($ValueArray[1] == 9) {?> selected = "selected"  <?php } ?>> 9 </option> -->
              </select>Number of words <br/><br/>

              <input type="checkbox" name="NumberFlag" <?php if($ValueArray[2] == 'on') {?> checked = "checked"  <?php } ?>/>Include Number <br/><br/>
              <input type="checkbox" name="SymbolFlag" <?php if($ValueArray[3] == 'on') {?> checked = "checked"  <?php } ?>/>Include Symbols  <br/><br/>
              <input type="checkbox" name="UpperCaseFlag" <?php if($ValueArray[4] == 'on') {?> checked = "checked"  <?php } ?>/>UpperCase First Letter <br/><br/>
              <input type="submit" value="Generate"/>
          </form> 

      </div>
    </div><br/><br/><br/><br/>

    <div align="center">
        <img src = "http://imgs.xkcd.com/comics/password_strength.png" alt="Xkcd PWD Generator" height='400' width='500' style="float:center">
    </div>

</body>

</html>