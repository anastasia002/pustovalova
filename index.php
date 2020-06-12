<?php
include 'calc.php';
echo "Adad";
?>
<form action="/index.php" method="POST">
 <input type="text" name="x">
 <select name="operation">
 <option value="sum">+</option>
 <option value="diff">-</option>
 <option value="del">÷</option>
 <option value="umno">×</option>
 </select>
 <input type="text" name="y">
 <button type="submit">Выполнить действие</button>
</form>