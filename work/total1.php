<html>
<head>
<style>body{border:ridge 5px;}</style>
<body>

<form  method="post">
<h2 align="center"><i>Form for accepting marks and calculating the total</h2>

<table>
<tr>
<td><i><b>English:</td>
<td><input type ="text" name="num1" value=""   size="30" onFocus="this.value=''"/></td>
</tr><br>
<tr>
<td><b><i>Kannada:</td>
<td><input type ="text"  name="num2" size="30"/></td>
</tr><br>
<tr>
<td><i><b>Hindi:</td>
<td><input type ="text"  name="num3" size="30"/></td>
</tr><br>
<tr>
<td><i><b>Maths:</td>
<td><input type ="text" name="num4" size="30"/></td>
</tr><br>
<tr>
<td><i><b>Science:</td>
<td><input type ="text"  name="num5" size="30"/></td>
</tr><br>
</table>
<input type="submit" name="btn_submit" value="submit">
</form>
</body>
</html>
$sum1 = new Calculator();
echo "<p> ".$sum1->add()." </p>";







