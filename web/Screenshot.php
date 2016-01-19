<h2>1.9: Taking a picture of your molecule. </h2>

<?php
echo "There's a good chance that your goal is to make a picture of your molecule to use for something.<br>";
echo "By default, the background color on PyMOL is set to black, but you may wish to change it to white for to take your picture. <br>";
echo "You can change the background color by selecting Display/background/white in the command window. <br><br>";
echo '<img src="http://i.imgur.com/lcpROCj.png" alt="Using a white background"<br><br><br>';
echo "Make sure that the colors you chose earlier are still visible.
 You may need to make some changes if something is too hard to see. <br>";
echo "Don't forget to save any changes you make! <br>";

echo "The scenes you made earlier might be good ideas of things to focus your screenshot on. <br>";
echo "Go to a scene of your choice by pressing the associated F key, such as F1. <br><br>";

echo "Before you take your screenshot, you should render the image to make it looks nicer.
In the command window, type \"ray\" and hit enter. <br>";
echo "It may take a moment for your computer to process this; don't panic, and try not to move your molecule while it is happening.<br>";
echo "The ray command renders your image to the screen resolution by default. 
You can render to different resolutions by typing something such as \"ray 1000\". <br>";
echo "If you are using the educational version of PyMOL, the ray function might not be available to you. <br>";
echo "You will still be able to save images, but they will not be quite as clean. <br><br>";

echo "Be aware that your image wll revert back to its original quality if you click inside of the viewer window. 
Try to avoid doing so until you are done saving your image. <br>";

echo "In the command window, go to File/Save Image As/png and save it somewhere that you'll be able to find it later on. <br>";
echo "Make sure you give it a name that you'll be able to recognize to make your life easier.<br><br>";

//echo "<strong> <a href=Measure.php>Return to previous page </a> </strong> ";
//echo "<strong> <a href=homepage.php>Return to homepage</a> </strong> ";
//echo "<strong> <a href=extra.php>Continue to next page</a> </strong> <br>";

echo '<TABLE BORDER="0">
<TR>

<TD><FORM METHOD="LINK" ACTION="Measure.php">
<INPUT TYPE="SUBMIT" VALUE="Return to previous page">
</FORM></TD>
<TD><FORM METHOD="LINK" ACTION="homepage.php">
<INPUT TYPE="SUBMIT" VALUE="Return to homepage">
</FORM></TD>
<TD><FORM METHOD="LINK" ACTION="extra.php">
<INPUT TYPE="SUBMIT" VALUE="Continue to next page">
</FORM></TD>
</TR>
</TABLE>';
?>