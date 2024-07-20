<?php
$connection=oci_connect('test','oracle','localhost/XE') or die (oci_error());
if(!$connection)
{
	echo"not connected";
}
else
{
	echo "connected";
}
oci_close($connection);