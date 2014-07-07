<!DOCTYPE html>
<html>

<head>
  <title>Manish Goyal P2</title>
  <meta charset="utf-8">
  <?php require('logic.php'); ?>
</head>

<body>
    <div align="center" id='output'>
        <h1>Password Generator</h1>
        <h2><?php echo $OutputPassword; ?></h2>
        
    </div>

    <div align="center"m id="Form1">

        <form action="logic.php" method="GET">
            Number of words <select name = "WordCount">
              <option value="1"> 1 </option>
              <option value="2"> 2 </option>
              <option value="3"> 3 </option>
              <option value="4" selected = "selected"> 4 </option>
              <option value="5"> 5 </option>
              <option value="6"> 6 </option>
              <option value="7"> 7 </option>
              <option value="8"> 8 </option>
              <option value="9"> 9 </option>
            </select><br/>

            <input type="checkbox" name="NumberFlag"/>Include Number
            <input type="checkbox" name="SymbolFlag"/>Include Symbols 
            <input type="checkbox" name="UpperCaseFlag"/>UpperCase First Letter <br/><br/>
            <input type="submit" name="submit" onClick="myFunction()"/>
            <input type="reset"/>
        </form> 

    </div><br/><br/><br/><br/><br/><br/>

    <div align="center">
      <img src = "http://imgs.xkcd.com/comics/password_strength.png" hight='400' width='500' style="float:center">
    </div>

    
</body>

</html>