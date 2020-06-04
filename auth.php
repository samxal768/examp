<?php
$username="saxal";
$passwd="1234";
if ( $username=="samxal" and $passwd=="1234") {
	echo "Sisteme Xos geldiniz"; 
}
else if ( $username!="samxal" and $passwd=="1234" ) {
	echo " sifre yalnisdir";
}
else {
	echo "istifadeci movcud deyil";
}
echo __FILE__ ;
?>
