<?php
if(!file_exists('obfuscate.php') || !file_exists('bin/colors.php') || !file_exists('bin/header.php'))
{
	echo "\nSome Files Missing , Please Download The Tool Again\nYou Can Download it With This Command:\ngit clone https://github.com/Rizer/Blind-Bash\n\n";
	exit(0);
}
else
{
	require('obfuscate.php');
	require('bin/colors.php');
	require('bin/header.php');
}
head();
$filename = readline("Enter File Name: ");
$filename = trim($filename);
$filename = "in/".$filename;
if(file_exists($filename))
{
$out = readline("└─Out File Name: ");
$out = "out/".$out;
obfuscate($filename,$out);
}
else
{
	echo "$filename Not Exists\n";
}
?>
