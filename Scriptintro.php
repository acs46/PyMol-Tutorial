<h2>2.1: Introduction to PyMOL scripting</h2>
<?php
echo "Scripts can be a useful tools for making your projects in PyMOL run more smoothly. <br>";
echo "You probably remember that PyMOL lacks an undo feature, making it difficult to go back to make changes. <br>";
echo "Previously, we used scenes to try to work around this, but it is even easier to do it with a script. <br>";
echo "Essentially, you can type out all of the commands that you wish to perform ahead of time, 
making your computer go through each of them automatically whenever your program is run. <br>";
echo "To make changes, instead of going back and redoing things, you simply edit your script and reload it to see the new results. <br>";
echo "This can help speed things up quite a bit when you get the hang of it.<br><br>";

echo "These scripts start off with a simple command \"rei\", which is short for reinitialize. <br>";
echo "This will reset your PyMOL client to show you an empty screen.<br>";
echo "Next, you load up your protein of choice with the fetch command, typing something like \"fetch 1brn, async=0\"<br>";
echo "Keep in mind that you are not limited to opening one of these at a time.<br>";
echo "If you wish to look at multiple molecules side by side, simply use the fetch command again to load something else. <br>"; 

echo "Note that unlike before, you do not actually have to have the file for this molecule downloaded. 
The fetch command will download the file for you. <br>";

echo "Here is a mini example script which recolors each of the subgroups of 3nmm and makes the heme groups white:<br><br>";
echo "<code>rei<br>
fetch 3nmm, async=0<br>
hi ev<br>
sh lines<br>
color red, A//<br>
color yellow, B//<br>
color blue, C//<br>
color green, D//<br>
color white, HEM/<br>
sh sticks, HEM/<br>
zoom HEM/ <br>
center HEM/ </code><br><br>";

echo "sh and hi are short for show and hide, respectively. The command \"hi ev\" hides everything, making it a useful tool if you want to start off with a blank slate.<br>";
echo "Of course, this is only a small look at the many options available to you when writing scirpts for PyMOL.<br>";
echo "Anything that can be done through PyMOL can be done in this way.<br>";
echo "For example, you can rotate your image using something like \"rotate y, 90\", to rotate 90 degrees along the y axis.<br>";
echo "A PyMOL script can be written using any text editting software, as long the file is saved with the .pml extention.<br><br>";


//echo "<strong> <a href=extra.php>Return to previous page </a> </strong> ";
//echo "<strong> <a href=homepage.php>Return to homepage</a> </strong> ";
//echo "<strong> <a href=___insert link___.php>Continue to next page</a> </strong> <br>"; use this when next page is done

echo '<TABLE BORDER="0">
<TR>

<TD><FORM METHOD="LINK" ACTION="extra.php">
<INPUT TYPE="SUBMIT" VALUE="Return to previous page">
</FORM></TD>
<TD><FORM METHOD="LINK" ACTION="homepage.php">
<INPUT TYPE="SUBMIT" VALUE="Return to homepage">
</FORM></TD>

</TR>
</TABLE>';
//echo '<FORM METHOD="LINK" ACTION="___insert link___.php">
//<INPUT TYPE="SUBMIT" VALUE="Continue to next page">
//</FORM>';  for future pages
?>

