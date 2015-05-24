      

function myFunction() {
var x = $("#mySelect").val();

$('.res_viabilidad').hide();
$('#res_viabilidad_' + x).show();

$('.res_causa').hide();
$('#res_causa_' + x).show();

$('.cdetalle').hide();
$('#iddetalle').show();

$('[id-prediseno]').hide();


}
function detalles() {
var x = $("#mySelect").val();
$('[id-prediseno]').hide();
$('[id-prediseno="' + x + '"]').show();

}
$(document).ready(function () {
$('.cdetalle').hide();
$('[id-prediseno]').hide();
});
