<h2>1.2: Visualizing protein structures. </h2>

<?php
echo "On the right side of the display window, there are object buttons. The one called 3NMM is your hemoglobin protein. <br>";
echo "When you make selections later on, they will appear in this area as well.<br>";
echo "Beside each object name are 5 buttons: 	<br>";
echo "<ul style=list-style-type:disc>
				<li>A, for Actions</li>
				<li>S, for Show</li>
				<li>H, for Hide</li>
				<li>L, for Label</li>
				<li>C, for Color</li>
			</ul>";
echo "When an object is selected, it will be highlighted in gray. 3NMM should be selected currently. <br>";
echo "If you click on its name, it should become hidden. Make sure 3NMM is showing again by clicking on its name if it is not already selected.<br><br>";

echo "Let's change up the display of our molecule a little bit. Try left clicking the A next to 3NMM and choosing Hydrogens/Remove. <br> ";
echo "Similarly, choose the H/nonbonded and H/lines options.<br>";
echo "There is no button to undo changes in PyMOL; however, you can bring back hidden elements using the S (show) button. For now, we'll leave these things hidden.<br>";

echo "Select S/ribbon to show the ribbon structure of the protein. <br>";
echo "You can also display the cartoon representation by choosing S/cartoon, but for now we will be working with the ribbon structure. <br>";
echo "If you enabled the cartoon display, you can hide it by selecting H/cartoon. <br>";

echo "Your image should look something like this:<br>";
echo '<img src="http://i.imgur.com/Wxtw2Bx.png" alt="3NMM ribbon structure"><br><br>';

//echo "<strong> <a href=Gettingstarted.php>View previous page</a> </strong>     ";
//echo "<strong> <a href=homepage.php>Return to homepage</a> </strong>     ";
//echo "<strong> <a href=Movement.php>Continue to next page</a> </strong> <br>";

echo '<TABLE BORDER="0">
<TR>

<TD><FORM METHOD="LINK" ACTION="Gettingstarted.php">
<INPUT TYPE="SUBMIT" VALUE="Return to previous page">
</FORM></TD>
<TD><FORM METHOD="LINK" ACTION="homepage.php">
<INPUT TYPE="SUBMIT" VALUE="Return to homepage">
</FORM></TD>
<TD><FORM METHOD="LINK" ACTION="Movement.php">
<INPUT TYPE="SUBMIT" VALUE="Continue to next page">
</FORM></TD>
</TR>
</TABLE>';
?>