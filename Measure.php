<h2>1.8: Taking measurements. </h2>

<?php
echo "Before starting this section, you may wish to clean up your workspace a bit by removing any pre-existing (sele) objects. <br>";

echo "Select Lysine residue 61 from the sequence view and give it a unique name, such as K61, to easily identify it later.<br>";
echo "Center your screen on K61 and zoom in to get a better view. <br> ";

echo " Now, choose Wizard/Measurement from the command window. <br>";
echo "Then, click on the lysine residue end and the closest oxygen on the nearby heme carboxyl; this should show you the distance between them. <br><br>";
echo '<img src="http://i.imgur.com/lNVTzH0.png" alt="Making a measurement"<br><br><br>';

echo "Click \"Done\" in the bottom right when you are finished making measurements. <br>";
echo "You'll notice that this created creates a new object named measure01 to mark the distance between the selected atoms. <br>";

echo "Perhaps you only want the line to appear to show the interaction between two parts of a molecule. <br>";
echo "If this is the case, you will probably want to hide the numbers associated with your new measurement. 
You can do this by selecting (measure01) > H/labels. <br>";
echo "If you wish, you can also edit the color of the line similarly to how you colored other objects previously. <br><br>";
echo '<img src="http://i.imgur.com/FoIQSSR.png" alt="An edited measurement object"<br><br><br>';

echo "You may wish to save a view which displays this interaction as a new scene. 
Make sure you do not overwrite a scene that you are using already. <br><br>"; 

//echo "<strong> <a href=Nearby.php>Return to previous page </a> </strong> ";
//echo "<strong> <a href=homepage.php>Return to homepage</a> </strong> ";
//echo "<strong> <a href=Screenshot.php>Continue to next page</a> </strong> <br>";

echo '<TABLE BORDER="0">
<TR>

<TD><FORM METHOD="LINK" ACTION="Nearby.php">
<INPUT TYPE="SUBMIT" VALUE="Return to previous page">
</FORM></TD>
<TD><FORM METHOD="LINK" ACTION="homepage.php">
<INPUT TYPE="SUBMIT" VALUE="Return to homepage">
</FORM></TD>
<TD><FORM METHOD="LINK" ACTION="Screenshot.php">
<INPUT TYPE="SUBMIT" VALUE="Continue to next page">
</FORM></TD>
</TR>
</TABLE>';
?>