<h2>1.3: Moving around your screen. </h2>

<?php
echo "Since proteins are 3-dimensional, it is often useful to be able to view them from different angles. <br>";
echo "By left clicking (don't release) and dragging your mouse, you can rotate your molecule to get a better view of whatever you want to look at. <br>";
echo "You can also zoom in and out by dragging your mouse up or down while right clicking. <br>";

echo "The mouse wheel has multipel functions. By clicking it in while moving your mouse, you are able to pan around your image. <br>";
echo "Alternatively, scrolling with the mouse wheel begins to slice away from the back of the molecule. <br>";
echo "Your molecule will look something like this:  <br><br>";
echo '<img src="http://i.imgur.com/V4zX96Z.png" alt="Mouse scrolling example"<br><br><br>';
echo "This change can be restored simply by scrolling in the opposite direction.<br><br>";

//echo "<strong> <a href=Visualizing.php>View previous page </strong>     ";
//echo "<strong> <a href=homepage.php>Return to homepage</a> </strong>     ";
//echo "<strong> <a href=Colors.php>Continue to next page</a> </strong> <br>";

echo '<TABLE BORDER="0">
<TR>

<TD><FORM METHOD="LINK" ACTION="Visualizing.php">
<INPUT TYPE="SUBMIT" VALUE="Return to previous page">
</FORM></TD>
<TD><FORM METHOD="LINK" ACTION="homepage.php">
<INPUT TYPE="SUBMIT" VALUE="Return to homepage">
</FORM></TD>
<TD><FORM METHOD="LINK" ACTION="Colors.php">
<INPUT TYPE="SUBMIT" VALUE="Continue to next page">
</FORM></TD>
</TR>
</TABLE>';
?>