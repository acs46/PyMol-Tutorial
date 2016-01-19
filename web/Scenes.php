<h2>1.6: Using scenes. </h2>

<?php
echo "You may have noticed that PyMOL lacks any sort of \"undo\" feature. 
This makes it somewhat unforgiving when you make an error, and it is one of the downsides to using PyMOL.<br>";
echo "One way to work around this is to get in the habit of saving your session every few minutes so you can refresh it without losing too much progress if a mistake is made.<br>";
echo "Another option is to make use of something called scenes. <br><br>";

echo "Make sure you can clearly see all four of the subunits in your field of view,
 and select Scene/Store F1. <br>";

echo "Now make a new selection for the Heme residue (HEM in the sequence viewer) and choose (sele) > S/lines. 
If you wish you can change the color of the Heme as well. <br>";
echo "Now center your screen on the Heme and zoom in on it to get a good view. 
Save this view under Scene/Store F2. <br>";

echo "If you wish to back to these scenes at any point, you can do so by selecting Scene/Recall/F1, F2, etc.
Alternatively, you can use the F keys at the top of your keyboard as a shortcut to recall your scenes. 
For example, pressing the F2 key will revert to scene 2. <br>";
echo "A nice thing about scenes is that they are maintained when you save your session. 
You can do this under File/Save Session As. <br><br>";

//echo "<strong> <a href=Sequences.php>Return to previous page </a> </strong> ";
//echo "<strong> <a href=homepage.php>Return to homepage</a> </strong> ";
//echo "<strong> <a href=Nearby.php>Continue to next page</a> </strong> <br>";

echo '<TABLE BORDER="0">
<TR>

<TD><FORM METHOD="LINK" ACTION="Sequences.php">
<INPUT TYPE="SUBMIT" VALUE="Return to previous page">
</FORM></TD>
<TD><FORM METHOD="LINK" ACTION="homepage.php">
<INPUT TYPE="SUBMIT" VALUE="Return to homepage">
</FORM></TD>
<TD><FORM METHOD="LINK" ACTION="Nearby.php">
<INPUT TYPE="SUBMIT" VALUE="Continue to next page">
</FORM></TD>
</TR>
</TABLE>';
?>