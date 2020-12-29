<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.2.0/jspdf.umd.min.js"></script>
</head>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
<style>
body{
    font-family:sans-serif;
    font-size: 11pt;
    background-attachment:fixed;

  }
  table{
    width: 80%;
  }
  table, th,td{
    border: 3px solid black;
    border-collapse: collapse;
  }

  th, td {
    padding:10px;
    text-align:center;
  }
input::placeholder{
    color:#222;
}

</style>
<script src="jspdf.js"></script>
<body>
    <div class="canvas_div_pdf">

        <!--Add HTML content you want to convert to PDF-->
        

        <center>
            <form id="myForm" method="post" action="userInfo.php">

            <button onclick="getPDF()" id="sub">Send</button>
          


            <div style="width: 1500px; border: solid 2px #333; padding: 10px;">
            
                   <table style="width: 1200px; height: 80px; border: solid 2px #333; text-align: center; padding: 5px; margin:45px 20px 20px 20px;">
                    <tr>
                    
                    <th> Federacija Bosne i Hercegovine
                     <br> Federalno ministarstvo <br>
                finansija/financija Porezna uprava</th>
                      <th>Obrazac JS3100<br>Prijava/Promjena/Odjava osiguranja</th>
                        <th>Bar kod</th>  
                    
                    </tr>
                    </table>
                    <td colspan="7"><h2 align="center;" style="font-size:20px;">Prvi dio - podaci o obvezniku doprinosa</h2></td>

                <table style="width: 1200px;  height: 80px; border: solid 2px #333; text-align: center; padding: 5px; margin:45px 20px 20px 20px;">
            
                    <tr>
                        <td colspan="3">1) JIB/JMB
                         <input placeholder="JIB/JMB" style="outline:none; border:none; font-size:16px; width:250px; color:blue; text-align:center; color:blue;" type="text" name="brojfirme" required></td>
                                    
                     
                    </tr>
                    <tr>
                        
                        <td colspan="3">2)Naziv obveznika uplate doprinosa:
                        <input colspan="3" placeholder="Naziv obveznika uplate doprinosa:" style="outline:none; border:none; font-size:16px; width:250px; color:blue; text-align:center; color:blue;" type="text" name="nazivfirme" required></td>
                   
                    </tr>
                    <tr>
                       
                        <td colspan="3">3)Adresa obveznika uplate doprinosa:
                       <input placeholder="Adresa obveznika uplate doprinosa:" style="outline:none; border:none; font-size:16px; width:250px; color:blue; text-align:center; color:blue;" style="color:blue;" type="text" name="adresafirme" required></td>
                    </tr>
                    <tr>
                       
                        <td colspan="3">4) Grad i poštanski broj:
                        <input placeholder="Grad" style="color:blue; outline:none; border:none; font-size:16px; width:250px; text-align:center;" type="text" name="gradfirme" >
                         <input placeholder="Poštanski broj" style="color:blue; outline:none; border:none; font-size:16px; width:250px; text-align:center;" type="number" name="postanskibrojfirme" required></td>
                    </tr>
                            <tr>
                            <td colspan="3">5)Šifra opcine:
                        
                        <input placeholder="Šifra općine" style="color:blue; outline:none; width:250px; border:none; font-size:16px; text-align:center;" type="password" name="sifraopcine" required></td>
                        
                            </tr>
                    <tr>
                        
                        <td colspan="3">6) Vrsta prijave
                        Prijava osiguranja:
                        <input type="radio" name="gender" value="PO" >
                        Odjava osiguranja:
                            <input type="radio" name="gender" value="OO" >
                        Promjena podataka o osiguranju: 
                            <input type="radio" name="gender" value="POOS" ></td>
                    </tr>
                    <tr>
                       
                        <td colspan="3">7)Telefon:
                        <input placeholder="Broj telefona" style="color:blue; outline:none; width:250px; border:none; font-size:16px; text-align:center;" type="tel" name="telefonfirme" required></td>
                    </tr>
                    <tr>
                     
                        <td  colspan="3">8)Email:
                        <input placeholder="Unesite svoj E-mail" style="color:blue; outline:none; border:none; font-size:16px; width:250px; text-align:center;" type="email" name="emailfirme" required></td>
                    </tr>
                    </table>
                    <td colspan="7"><h2 align="center;" style="font-size:20px;">Drugi dio - podaci osiguranika</h2></td>
                    <table style="width: 1200px; height: 80px; border: solid 2px #333; text-align: center; padding: 5px; margin:45px 20px 20px 20px;">
            
                    <tr>
                        <td>1</td>
                        <td colspan="2">JMB ili lični identifikacioni broj(za strance)</td>
                        <td colspan="7"><input placeholder="JMB ili lični identifikacioni broj" style="color:blue; outline:none; border:none; font-size:16px; width:250px; text-align:center;" type="number" name="licnibroj" required></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td colspan="2">Prezime i ime osiguranika:</td>
                        <td colspan="7"><input placeholder="Prezime i ime osiguranika" style="color:blue; outline:none; border:none; font-size:16px; width:250px; text-align:center;" type="username" name="imeiprezimekorisnika" required></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td colspan="2">Djevojacko prezime:</td>
                       <td colspan="7"></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td colspan="2">Datum rođenja</td>
                        <td colspan="7"><input placeholder="Datum rođenja" style="color:blue; outline:none; border:none; font-size:16px; width:250px; text-align:center;" type="date" name="datumrodjenjakorisnika" required></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td colspan="2">Spol:</td>
                        <td colspan="3"> Ženski: <input type="radio" name="gender1" value="Muško" id="" > </td>
                      <td coslpan="3">Muški: <input type="radio" name="gender1" value="Žensko" id="" > </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td colspan="2">Adresa prebivališta:</td>
                        <td colspan="7"><input placeholder="Adresa prebivališta" style="color:blue; outline:none; border:none; font-size:16px; width:250px; text-align:center;" type="text" name="licnaadresa" id="" required></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td colspan="2">Općina prebivališta:</td>
                        <td colspan="7"><input placeholder="Šifra općine" style="color:blue; outline:none; border:none; font-size:16px; width:250px; text-align:center;" type="password" name="opcinaprebivalista" id="" required ></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td colspan="2">Kontakt adresa-ulica i broj
                        <br>(ako se razlikuje od prebivališta)</td>
                        <td colspan="7"><input type="text" placeholder="Kontakt adresa-ulica i broj"style="color:blue; outline:none; border:none; font-size:16px; width:250px; text-align:center;" name="kontaktadresa" required></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td colspan="2">Kontakt adresa - postanski broj i mjesto</td>
                        <td colspan="3"> <input style="color:blue; outline:none; border:none; font-size:16px; width:150px; text-align:center;" placeholder="Poštanski broj" type="number" name="licnipostanskibroj" required></td>
                        <td placeholder="Mjesto" colspan="3"><input placeholder="mjesto" style="color:blue; outline:none; border:none; font-size:16px; width:150px; text-align:center;" type="text" name="mjesto" ></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td colspan="2">E-mail adresa</td>
                        <td colspan="7"><input placeholder="Unesite E-mail adresu" style="color:blue; outline:none; border:none; font-size:16px; width:250px; text-align:center;" style="color:blue;" type="email" name="licniemail" id="" required></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td colspan="2">Stručna sprema:</td>
                        <td colspan="5">
                            DR <input type="radio" name="gender2" value="DR"> MR <input type="radio" name="gender2" value="MR"> VSS <input type="radio" name="gender2" value="VSS"> VŠS <input type="radio" name="gender2" value="VŠS"> SSS <input type="radio" name="gender2" value="SSS"> NIŽA <input type="radio" name="gender2" value="NIŽA"> VKV <input type="radio" name="gender2" value="VKV"> KV <input type="radio" name="gender2" value="KV"> PK <input type="radio" name="gender2" value="PK"> NK <input type="radio" name="gender2" value="NK"></td>
                    </tr>
               
                    
                    </table>
                    <td colspan="7"><h2 align="center;">Treći dio-podaci o osiguranju</h2></td>
            
                    <table style="width: 1200px; height: 80px; border: solid 2px #333; text-align: center; padding: 5px; margin:45px 20px 20px 20px;">
                    <tr>
                        <td>1</td>
                        <td colspan="2">Dnevno radno vrijeme:</td>
                        <td colspan="5"> <input  placeholder="Sati" style="color:blue; outline:none; border:none; font-size:16px; width:250px; text-align:center;"style="color:blue;" type="text" name="sati" > <input placeholder="Minute" placeholder="Unesite E-mail adresu" style="color:blue; outline:none; border:none; font-size:16px; width:250px; text-align:center;" style="color:blue;" style="color:blue;" type="text" 
                                    name="minute" required></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td colspan="2">Osnov osiguranja:</td>
                        <td colspan="7"><input placeholder="Osnov osiguranja" style="color:blue; outline:none; border:none; font-size:16px; width:250px; text-align:center;" style="color:blue;" type="text" name="osnovosiguranja" required></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td colspan="2">Zanimanje:</td>
                        <td colspan="7"><input placeholder="Zanimanje" style="color:blue; outline:none; border:none; font-size:16px; width:250px; text-align:center;" style="color:blue;" type="text" name="zanimanje" required></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td colspan="2">Stručna sprema koja se traži na radnom mjestu
                        </td>
                        <td colspan="7">  DR <input type="radio" name="gender3" value="DR"> MR <input type="radio" name="gender3" value="MR"> VSS <input type="radio" name="gender3" value="VSS"> VŠS <input type="radio" name="gender3" value="VŠS"> SSS <input type="radio" name="gender3" value="SSS"> NIŽA <input type="radio" name="gender3" value="NIŽA"> VKV <input type="radio" name="gender3" value="VKV"> KV <input type="radio" name="gender3" value="KV"> PK <input type="radio" name="gender3" value="PK"> NK <input type="radio" name="gender3" value="NK"></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td colspan="2">Datum prijave/odajve/promjene osiguranja</td>
                        <td colspan="7"><input style="color:blue; outline:none; border:none; font-size:16px; width:250px; text-align:center;" style="color:blue;" type="date" name="datumprijave" required></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td colspan="2">Osnov za uplatu doprinosa</td>
                        <td colspan="7"><input placeholder="Osnov za uplatu doprinosa" style="color:blue; outline:none; border:none; font-size:16px; width:250px; text-align:center;"  type="text" name="osnovuplate" required></td>
            
                    </tr>
                    <tr>
                        <td>7</td>
                        <td colspan="2">Staž za uvećanim trajanjem</td>
                        <td colspan="3">
                            <input placeholder="Šifra radnog mjesta" style="color:blue; outline:none; border:none; font-size:16px; width:250px; text-align:center;"  type="password" name="sifraradnogmjesta" required>
                        </td>
                        <td colspan="3">
                        <input type="text" placeholder="Stepen uvećanja" style="color:blue; outline:none; border:none; font-size:16px; width:250px; text-align:center;" name="stepenuvecanja" required></td>
                    </tr>
                    </table>
                    <th colspan="7"><h2>Cetvrti dio - potvrda i prijem</h2></th>
            
            
                  
                    <tr>
                    
                    <th colspan="1"><b> Ovjera predstavnika obveznika uplate doprinosa<br>
                finansija/financija Porezna uprava.</b></th>
                      <th colspan="7"><b> Ovjera prijema u poreznoj upravi </b></th>
                       <table style="width: 1200px; height: 80px; border: solid 2px #333; text-align: center; padding: 5px; margin:45px 20px 20px 20px;">
                    </tr>
                    <td colspan="3">Potpis podnosioca prijave:
                    <input placeholder="Unesi podatke" type="text" style="color:blue; outline:none; border:none; font-size:16px; width:130px; text-align:center;" name="potpispodnosioca" ></td>
            
            
                    <td colspan="3">Datum: <input style="color:blue; outline:none; border:none; font-size:16px; width:150px; text-align:center;" type="date" name="datumpodnosioca" required></td>
            
            
                    <td>Ime i prezime službenika Porezne uprave:
                        <input placeholder="Unesi podatke" type="text" style="color:blue; outline:none; border:none; font-size:16px; width:150px; text-align:center;"name="imeiprezimesluzbenikaporezneuprave" required>
                    </td>
            
                    </tr>
                    <tr>
                    <td colspan="3">Ime i prezime lica koje je popunilo prijavu: <input placeholder="Unesi podatke" style="color:blue; outline:none; border:none; font-size:16px; width:150px; text-align:center;" type="text" name="imeiprezimelicakojejepopuniloprijavu" required></td>
                    <td colspan="3">Potpis lica koje je popunilo prijavu
                        <input type="text" style="color:blue; outline:none; border:none; font-size:16px; width:150px; text-align:center; " placeholder="Unesi podatke" name="potpislicakojejepopuniloprijavu" required>
                    </td>
                    <td>Potpis službenika Porezne prijave:
                        <input type="text" style="color:blue; outline:none; border:none; font-size:16px; width:150px; text-align:center;" placeholder="Unesi podatke" name="potpissluzbenikaporezneprijave" required>
                    </td>
                    </tr>
                    <tr>
                        <td colspan="3"><b>Odgovornost lica koje je popunilo prijavu:</b><p>Izjavljujem da saam pregledao/la ou prijavu i da su uneseni podaci, po mom najboljem znanju i vjerovanju, vjerodostojni, tacni i potpuni </p></td>
                        <td colspan="3">MP</td>
                        <td colspan="3">
                            Datum prijema prijave:
                            <input type="date" style="color:blue; outline:none; border:none; font-size:16px; width:150px; text-align:center;" name="datumprijemaprijave" required>
                        </td>
                    </tr>
                  
                </table>
            
            
                </form>
        
            </center>
    </div>
</body>

</html>