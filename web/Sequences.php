<h2>1.5: Working with sequences. </h2>

<?php
echo "Selecting large sections of your molecule using the previous method would be a bit tedious. 
Fortunately, there is an alternative method available. <br>";
echo "If you have not already done so, delete your old selection using the (sele) > A/delete selection. 
Note doing so will not remove the selected region or revert any of the changes made to it; 
it just gets rid of the (sele) object on the right side. <br>";

echo "Select Display/sequence in the upper window. 
This will make a string of letters appear on your screen; they refer to each of the residues in your pdb file. <br><br>";
echo '<img src="http://i.imgur.com/bNBsEbG.png" alt="PyMOL sequence view"<br><br><br>';
echo "The color of the letters varies based on how they are colored within the molecule. <br>";
echo "If you used the spectrum coloring, you'll notice the colors changing from blue to green to red as you scroll through. <br>";
 
echo "You can select the residues simply by clicking on them individually. <br>";
echo "Alternatively, you can select a long segment of consecutive ones by selecting one, and then holding down the shift key while clicking the last amino acid in your selectng one, and then holding down the shift key while clicking the last amino acid in your selection. <br>";
echo "Try selecting the first subunit (up to the HEM and SO4) using this method and changing its color.<br>";
echo "You may wish to center your view on the 3NMM object by clicking A/center and zoom out to show the full molecule to make it easier to work with. <br>";
echo "You should rename the selection you just made to something more specific. 
You can do so by choosing A/rename selection for your newly created object (sele). <br>";

echo "Repeat the above process on the other 3 subunits, giving each its own color and a descriptive selection name. 
You can ignore the long chains of O residues in the sequence view for now.<br><br>";


//echo "<strong> <a href=Colors.php>Return to previous page </a> </strong>  ";
//echo "<strong> <a href=homepage.php>  Return to homepage </a> </strong> ";
//echo "<strong> <a href=Scenes.php>Continue to next page</a> </strong> <br>";

echo '<TABLE BORDER="0">
<TR>

<TD><FORM METHOD="LINK" ACTION="Colors.php">
<INPUT TYPE="SUBMIT" VALUE="Return to previous page">
</FORM></TD>
<TD><FORM METHOD="LINK" ACTION="homepage.php">
<INPUT TYPE="SUBMIT" VALUE="Return to homepage">
</FORM></TD>
<TD><FORM METHOD="LINK" ACTION="Scenes.php">
<INPUT TYPE="SUBMIT" VALUE="Continue to next page">
</FORM></TD>
</TR>
</TABLE>
';
?>