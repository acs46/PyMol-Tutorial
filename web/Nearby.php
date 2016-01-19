<h2>1.7: Selecting nearby residues. </h2>

<?php
echo "Go back to the object you created for the Heme residue (if you have removed that selection, make another using any of the Heme residues). <br>";
echo "Let's modify it to include some of the surrounding residues the residues as well. 
You can do so by clicking A/modify/Expand/By 4A and then S/side chain/sticks. <br>";
echo "Deselect this object by clicking anywhere outside of it. <br><br>";

echo '<img src="http://i.imgur.com/HVxutyu.png" alt="Expanded selection"<br><br><br>';

echo "Expanding a selection like this can be quite handy, since this expanded area will likely contain most of the residues that interact with your original selection. <br><br>";

//echo "<strong> <a href=Scenes.php>Return to previous page </a> </strong> ";
//echo "<strong> <a href=homepage.php>Return to homepage</a> </strong> ";
//echo "<strong> <a href=Measure.php>Continue to next page</a> </strong> <br>";

echo '<TABLE BORDER="0">
<TR>

<TD><FORM METHOD="LINK" ACTION="Scenes.php">
<INPUT TYPE="SUBMIT" VALUE="Return to previous page">
</FORM></TD>
<TD><FORM METHOD="LINK" ACTION="homepage.php">
<INPUT TYPE="SUBMIT" VALUE="Return to homepage">
</FORM></TD>
<TD><FORM METHOD="LINK" ACTION="Measure.php">
<INPUT TYPE="SUBMIT" VALUE="Continue to next page">
</FORM></TD>
</TR>
</TABLE>';
?>