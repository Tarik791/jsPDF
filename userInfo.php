<?php 
include_once('insert.php');


$brojfirme = $_POST['brojfirme'];
$nazivfirme = $_POST['nazivfirme'];
$adresafirme = $_POST['adresafirme'];
$gradfirme = $_POST['gradfirme'];
$postanskibrojfirme = $_POST['postanskibrojfirme'];
$prijavaosiguranja = $_POST['gender'];
$telefonfirme = $_POST['telefonfirme'];
$emailfirme = $_POST['emailfirme'];
$licnibroj = $_POST['licnibroj'];
$imeiprezimekorisnika = $_POST['imeiprezimekorisnika'];
$spol = $_POST ['gender1'];
$licnaadresa = $_POST['licnaadresa'];
$kontaktadresa = $_POST['kontaktadresa'];
$licnipostanskibroj = $_POST['licnipostanskibroj'];
$datumrodjenjakorisnika = $_POST['datumrodjenjakorisnika'];
$opcinaprebivalista = $_POST['opcinaprebivalista'];
$licnomjesto = $_POST['mjesto'];
$licniemail = $_POST['licniemail'];
$strucnasprema = $_POST['gender2'];
$sati = $_POST['sati'];
$minute = $_POST['minute'];
$osnovosiguranja = $_POST['osnovosiguranja'];
$zanimanje = $_POST['zanimanje'];
$strucnaspremanaradnom = $_POST['gender3'];
$datumprijave = $_POST['datumprijave'];
$osnovuplate = $_POST['osnovuplate'];
$sifraradnogmjesta = $_POST['sifraradnogmjesta'];
$stepenuvecanja = $_POST['stepenuvecanja'];
$potpispodnosioca = $_POST['potpispodnosioca'];
$datumpodnosioca = $_POST['datumpodnosioca'];
$imeiprezimepodnosiocaporezneuprave = $_POST['imeiprezimesluzbenikaporezneuprave'];
$potpislicakojejepopuniloprijavu = $_POST['potpislicakojejepopuniloprijavu'];
$potpissluzbenikaporezneprijave = $_POST['potpissluzbenikaporezneprijave'];
$datumprijemaprijave = $_POST['datumprijemaprijave'];

$sql = "INSERT INTO prijava (broj_firme, naziv_firme, adresa_firme, grad_firme, postanskibroj_firme, vrsta_prijave,  telefon_firme,email_firme,   licni_broj, datum_korisnika,  imei_prezime_korisnika,spol,licna_adresa, kontakt_adresa, licnipostanski_broj, licno_mjesto, licni_email, strucna_sprema, sati, minute, osnov_osiguranja, zanimanje, strucna_spremanaradnom,datum_prijave, osnov_za_uplatu_doprinosa, sifra_radnog_mjesta, stepen_uvecanja, potpis_podnosioca_prijave, datum_podnosioca_prijave, ime_i_prezime_podnosioca_porezne_upraveioca_p, potpis_lica_koje_popunilo_prijavu, potpis_sluzbenika_porezne_prijave, datum_prijema_prijave) VALUES ('$brojfirme', '$nazivfirme','$adresafirme','$gradfirme','$postanskibrojfirme','$prijavaosiguranja', '$telefonfirme', '$emailfirme', '$licnibroj', '$datumrodjenjakorisnika', '$imeiprezimekorisnika', '$spol', '$licnaadresa', '$kontaktadresa', '$licnipostanskibroj', '$licnomjesto','$licniemail', '$strucnasprema' ,  '$sati','$minute',   '$osnovosiguranja', '$zanimanje', '$strucnaspremanaradnom', '$datumprijave','$osnovuplate', '$sifraradnogmjesta', '$stepenuvecanja', '$potpispodnosioca', '$datumpodnosioca', '$imeiprezimepodnosiocaporezneuprave', '$potpislicakojejepopuniloprijavu', '$potpissluzbenikaporezneprijave', '$datumprijemaprijave')";

if(!mysqli_query($con, $sql)){
    echo 'Not insered';
}else {
    echo 'Inserted';
}
?>