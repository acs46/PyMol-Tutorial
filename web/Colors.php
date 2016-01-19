<h2>1.4: Selecting and coloring. </h2>

<?php
echo "Let's change the coloring of our molecule a bit, so we can see it more clearly. <br>";
echo "You can show the different secondary structures by choosing C/by ss next to the 3NMM object.<br>";
echo "Additionally, C/spectrum can be used to color the molecule from N-terminus to C-terminus.<br>";

echo "Try left clicking on one of the ends of the peptide. The dots that appear indicate your new selection, which will have a the name (sele) by default. <br>";
echo "You can display the line representation for this selected are by choosing S/lines next to your (sele) object on the right side. <br>";
echo "A/center will allow you to center your view on the selected residue.";
echo "Change your view of (sele) by showing sticks and hiding lines (using S and H). <br>";
echo "To deselect something, you can either click anywhere in the empty space, or click on the name of the object ((sele) in this case).";

echo "Select a few more side chains near this residue using the same technique and then alter them by choosing (sele)/S/Side chain sticks and (sele)/C.<br>";
echo "C/by element will allow you to choose a color for Carbon, but gives a preset color to the other elements.<br><br>";

//echo "<strong> <a href=Movement.php>Return to previous page</a> </strong>     ";
//echo "<strong> <a href=homepage.php>Return to homepage</a> </strong>     ";
//echo "<strong> <a href=Sequences.php>Continue to next page</a> </strong> <br>";

echo '
<TABLE BORDER="0">
<TR>

<TD><FORM METHOD="LINK" ACTION="Movement.php">
<INPUT TYPE="SUBMIT" VALUE="Return to previous page">
</FORM></TD>
<TD><FORM METHOD="LINK" ACTION="homepage.php">
<INPUT TYPE="SUBMIT" VALUE="Return to homepage">
</FORM></TD>
<TD><FORM METHOD="LINK" ACTION="Sequences.php">
<INPUT TYPE="SUBMIT" VALUE="Continue to next page">
</FORM></TD>

</TR>
</TABLE>';
?>