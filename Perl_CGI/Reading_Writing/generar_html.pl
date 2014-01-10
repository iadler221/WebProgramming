#!/usr/bin/perl
my $leyendo = "poema.txt";
if ( ! -r $leyendo ) {
	die "El fichero $leyendo no es legible\n";
}
open (my $fh, "<", $leyendo)
	or die "No puedo abrir el fichero $leyendo por $!\n";

my @parrafos;

my $titulo = <$fh>;
chop($titulo);

my @fichero = <$fh>;
shift @fichero;

foreach(@fichero) {
	chop;
	my $par;
	if ( $_ =~  /^$/) { 
		$par = "<br>";
    } else{
		$par = "<p>".$_."</p>";		
	}
	push(@parrafos, $par);
}

my $doctype = "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\"> ";
my $meta = "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-15\">";
my @texto_HTML = ($doctype, "<html>", "<head>", $meta, "<title>", $titulo, "</title>", "</head>", "<body>", "<h1>", $titulo, "</h1>");
foreach(@parrafos) {
	push(@texto_HTML, $_);
}

my @texto_HTML_Fin = ("</body>", "</html>");

foreach(@texto_HTML_Fin) {
	push(@texto_HTML, $_);
}

open(my $fh_out, ">", "parrafos.html");
foreach(@texto_HTML) {
	print $fh_out "$_\n";
}

close $fh;
close $fh_out;
