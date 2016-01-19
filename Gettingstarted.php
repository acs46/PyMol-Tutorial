<h2>1.1: Getting started. </h2>

<?php
echo "To start off, you are going to need to download a protein file to view. 
This tutorial is going to be working with 3NMM, 
<a href=http://www.rcsb.org/pdb/explore/explore.do?structureId=3NMM>which can be found here.</a><br>";

echo "When you open PyMOL, you may notice that 2 windows appear. The smaller of these two includes a command line, as well as a few buttons.
The larger window displays your molecule, and is where you will be able to create and modify selections later on. <br>";

echo "It should look something like this: <br>";
echo '<img src="http://i.imgur.com/1fQQMQN.png" alt="Educational MacPyMOL client" height=340, width=430><br><br>';
echo "Note that this image is of the educational version for Macs. You may notice minor differences, depending on what version you have.<br>";


echo "To open up a protein image, go to File/Open and find the location where you saved the 3NMM.pdb file. <br>";
echo "The larger window should now be displaying your hemoglobin molecule. We'll learn what we can do with this in later parts of the tutorial.<br><br>";

//echo "<strong> <a href=homepage.php>Return to homepage</a> </strong>     ";
//echo "<strong> <a href=Visualizing.php>Continue to next page</a> </strong> <br>";
//was having trouble with the buttons, so keeping these here for now in case
echo '<TABLE BORDER="0">
<TR>

<TD><FORM METHOD="LINK" ACTION="homepage.php">
<INPUT TYPE="SUBMIT" VALUE="Return to homepage">
</FORM></TD>
<TD><FORM METHOD="LINK" ACTION="Visualizing.php">
<INPUT TYPE="SUBMIT" VALUE="Continue to next page">
</FORM></TD>

</TR>
</TABLE>
';
?>