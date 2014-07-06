<!DOCTYPE html>
<html>

<head>
  <title>Manish Goyal P2</title>
  <?php require('logic.php'); ?>
</head>

<body align="center">
  <?php echo $output ?><br/><br/>

  <form action="logic.php" method="get">
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

     <input type="checkbox" name="NumberFlag"style="float:center"/>Include Number
     <input type="checkbox" name="SymbolFlag"style="float:center"/>Include Symbols 
     <input type="checkbox" name="UpperCaseFlag"style="float:center"/>UpperCase First Letter <br/><br/>
     <input type="submit" style="float:center"/>
     <input type="reset" style="float:center"/>
  </form>  <p align="center"> <img src = "http://imgs.xkcd.com/comics/password_strength.png" hight='400' width='500'> </p>
</body>

</html>