#!"C:\xampp\perl\bin\perl.exe"

# HTTP Header
print "Content-type:text/html\r\n\r\n";

#############################################################
#			LLEGIR UN FITXER I MOSTRAR-LO					#
#############################################################

# Obro el fitxer file.txt en mode lectura
open(DATA, "<file.txt") or die "Couldn't open file file.txt, $!";




#Mostro el fitxer fila a fila en html
while(<DATA>){
   print "$_<br/>";
}

#tanco el fitxer
close( DATA );

#############################################################
#			COPIAR UN FITXER A UN ALTRE						#
#############################################################

# Obro el fitxer file.txt en mode lectura
open(DATA1, "<file.txt") or die "Couldn't open file file.txt, $!";

#Obro file2.txt en mode escritura. Crearà un nou fitxer si no existeix.
open(DATA2, ">file2.txt") or die "Couldn't open file file2.txt, $!";

# Recorro linea a linea el fitxer1 i l'escric al fitxer2
while(<DATA1>){
	#Escric linea al fitxer2
	print DATA2 $_;
}



close( DATA1 );
close( DATA2 );
