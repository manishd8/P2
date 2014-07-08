<!DOCTYPE html>
<html>

<head>
  <title>Manish Goyal P2</title>
  <meta charset="utf-8">
  <?php require('logic.php'); ?>
</head>

<body>

  <?php $ValueArray = myFunction(); ?>
    <div align="center" id='output'>
        <h1>Password Generator</h1>
        <h2><?php echo $ValueArray[0]; ?></h2>
        
    </div>

    <div align="center"m id="Form1">

        <form action="index.php" method="GET">
            Number of words <select name = "WordCount">
              <option value="1" <?php if($ValueArray[1] == 1) {?> selected = "selected"  <?php } ?>> 1 </option>
              <option value="2" <?php if($ValueArray[1] == 2) {?> selected = "selected"  <?php } ?>> 2 </option>
              <option value="3" <?php if($ValueArray[1] == 3) {?> selected = "selected"  <?php } ?>> 3 </option>
              <option value="4" <?php if($ValueArray[1] == 4) {?> selected = "selected"  <?php } ?>> 4 </option>
              <option value="5" <?php if($ValueArray[1] == 5) {?> selected = "selected"  <?php } ?>> 5 </option>
              <option value="6" <?php if($ValueArray[1] == 6) {?> selected = "selected"  <?php } ?>> 6 </option>
              <option value="7" <?php if($ValueArray[1] == 7) {?> selected = "selected"  <?php } ?>> 7 </option>
              <option value="8" <?php if($ValueArray[1] == 8) {?> selected = "selected"  <?php } ?>> 8 </option>
              <option value="9" <?php if($ValueArray[1] == 9) {?> selected = "selected"  <?php } ?>> 9 </option>
            </select><br/>

            <input type="checkbox" name="NumberFlag" <?php if($ValueArray[2] == 'on') {?> checked = "checked"  <?php } ?>/>Include Number
            <input type="checkbox" name="SymbolFlag" <?php if($ValueArray[3] == 'on') {?> checked = "checked"  <?php } ?>/>Include Symbols 
            <input type="checkbox" name="UpperCaseFlag" <?php if($ValueArray[4] == 'on') {?> checked = "checked"  <?php } ?>/>UpperCase First Letter <br/><br/>
            <input type="submit"/>
        </form> 

    </div><br/><br/><br/><br/><br/><br/>

    <div align="center">
      <img src = "http://imgs.xkcd.com/comics/password_strength.png" hight='400' width='500' style="float:center">
    </div>

    
</body>

</html>