#!"C:\xampp\perl\bin\perl.exe"

use CGI qw(:standard);

my $importe;
my $modelo;
if (param('modelo') eq 1) {
  $importe = 20;
  $modelo = "Desgastados";
}
elsif (param('modelo') eq 2) {
  $importe = 20;
  $modelo = "Lisos";
}
elsif (param('modelo') eq 3) {
  $importe = 15;
  $modelo = "Piratas";
}
elsif (param('modelo') eq 4) {
  $importe = 35;
  $modelo = "Con dobladillo";
}
elsif (param('modelo') eq 5) {
  $importe = 50;
  $modelo = "Bordados";
}

my $talla;
if (param('talla') eq 1) {
  $talla = "XS";
}
elsif (param('talla') eq 2) {
  $talla = "S";
}
elsif (param('talla') eq 3) {
  $talla = "M";
}
elsif (param('talla') eq 4) {
  $talla = "L";
}
elsif (param('talla') eq 5) {
  $talla = "XL";
}

$cantidad = param('cantidad');

print header; 
print start_html(-title=>'Jeans World', -BGCOLOR=>'#fafafd');
print h1({-style=>'color: blue; font-style: italic; text-align: center;'}, '&#126 Jeans World &#126');
print "<p><center><font color=#333377>Ha realizado la siguiente compra:</p>";

print "<p><strong>Modelo: </strong> $modelo ";
print "<strong> Talla: </strong> $talla ";
print "<strong> Cantidad: </strong> $cantidad</p>";
print "<p><strong>Total: </strong>" . $importe*$cantidad . "&#8364 </p>";

print "<p><em>MUCHAS GRACIAS POR SU VISITA</em></font></p>";

print end_html;
