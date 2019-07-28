<html>
<head>
<title>Assignment1</title>
</head>

<body>
<form name="form1" method="get" action="output.php" onSubmit="return validate()">
  <table width="339" border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td width="97" valign="top">Parents: </td>
      <td width="236"><textarea name="parent" cols="40" rows="3" id="parent"></textarea></td>
    </tr>
    <tr>
      <td valign="top">Children:</td>
      <td>
        <textarea name="children" cols="40" rows="3" id="children"></textarea>
      </td>
    </tr>
    <tr>
      <td colspan="2" align="right"><input type="submit" name="submit" id="submit" value="Process"></td>
    </tr>
  </table>
  <script type="text/javascript">
  //parent = document.getElementById("parent").value;
  </script>
</form>
</body>
</html>
