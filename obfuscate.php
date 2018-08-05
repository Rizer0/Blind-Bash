<?php
function obfuscate($filename,$out){
//call colors file
require('bin/colors.php');
//open the bash file
$fh = fopen($filename,'r');
$code="";
while ($line = fgets($fh))
{
	//read source code
	$code = $code.$line;
}
//encode source code with base64
$enc = base64_encode($code);
//reverse it after encoding 
$enc = shell_exec("echo $enc | rev");
//now obfuscate the source
echo $orange."Obfuscation ..\n";
$s='gH4="Ed";kM0="xSz";c="ch";L="4";rQW="";fE1="lQ";s="';
$s=$s." '$enc'";
$s=$s.' | r";HxJ="s";Hc2="";f="as";kcE="pas";cEf="ae";d="o";V9z="6";P8c="if";U=" -d";Jc="ef";N0q="";v="b";w="e";b="v |";Tx="Eds";xZp=""';
$x='x=$(eval "$Hc2$w$c$rQW$d$s$w$b$Hc2$v$xZp$f$w$V9z$rQW$L$U$xZp")';
$z='eval "$N0q$x$Hc2$rQW"';
$code = $s."\n".$x."\n".$z."\n";
$code = base64_encode($code);
echo "└─Please wait ..\n";sleep(1);
//check if out folder exists
if(!file_exists("out/"))
{
	//make out folder
	shell_exec("mkdir out");
}
//save obfuscated code to new file
shell_exec("echo $code | base64 -d > $out");
$path = shell_exec("pwd");$path=trim($path);
$path = $path."/";
echo $blue."\n[+] Obfuscated Done$red File$blue Saved as => $red$path$out\n";
echo $yellow."[!] Bye Bye\n\n$nbold";
//close the file
fclose($fh);
}
?>
