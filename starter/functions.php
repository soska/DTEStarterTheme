<?php

include("dte/duperrific.php");	

$blog = new Controller('Starter');
extract($blog->getHelpers());
extract($blog->getTextDomain());
?>