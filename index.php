<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><Währungsrechner></title> 
</head>
<body>
<div style ='font:30px/30px Comic Sans MS,tahoma,sans-serif;'> Währungsrechner </div>
</body>
<form action="daten.php" method="POST" >
<br>
<br>
  <label for="Betrag eingeben">Betrag eingeben</label>
  <input id="amount" name="amount">
<br>
<br>
  <label for="Ursprungswährung">Ursprungswährung</label>
  <select id="original_currency" name="original_currency">
    <option value="GBP">British Pound Sterling</option>
    <option value="EUR" selected>Euro</option>
    <option value="INR">Indian Rupee</option>
    <option value="USD">US Dollar</option>
    <option value="JPY">YEN</option>
    <option value="BIT">Bitcoin</option>
  </select>
<br>
<br>
  <label for="Zielwährung">Zielwährung</label>
  <select id="target_currency" name="target_currency">
    <option value="GBP">British Pound Sterling</option>
    <option value="EUR">Euro</option>
    <option value="INR">Indian Rupee</option>
    <option value="USD" selected>US Dollar</option>
    <option value="JPY">YEN</option>
    <option value="BIT">Bitcoin</option>
  </select>
<br>
<br>
 <button type="submit">Wechselkurs berechnen </button>
</form>
</html>
