<?php
// First, include the framework
include("dte/duperrific.php");	

// now set $blog as the global controller variable.
// 'Starter' is the name of the theme, sill be used internally for settings.
$blog = new Controller('Starter');

// get the helpers on the global namespace (just $html for this)
extract($blog->getHelpers());

// generates an exclusive text domain name ad stores it in 'magic' variable $_e
// this will be used accross the theme as the second parameter for i10n functions like __();
extract($blog->getTextDomain());
?>