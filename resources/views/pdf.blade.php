
{{-- {{dd($orders->prijsperstuk)}} --}}
<style>
     .producten tr,.producten td, .producten th{
          width: 100%;
     }

     .logo, img{
          /* background-color: red; */
          margin-left: 20px;
          width: 300px;
     }
     .company{
          float: right;
          position: absolute;
          top: 1px;
          font-size: 10pt;
     }
      .adres{
          height: 40px;
     }
     th{
       height: 100px;
       color: green;
     }
</style>

<div class="logo">
   <img src="../public/kalveren.jpg" />

</div>
<div class="company">
    <table>
         <tr>
              <td style="width: 100px;">Adres:</td>
              <td>T.A. Pasman</td>

         </tr>
         <tr>
              <td style="width: 100px;"></td>
              <td>Driekieftenweg 10</td>
         </tr>
         <tr>
              <td style="width: 100px;"></td>
              <td>7214PJ Epse</td>
         </tr>
         <tr>
              <td class="adres" style="width: 100px;">KVK:</td>
              <td>57929637</td>
         </tr>
         <tr>
              <td style="width: 100px;">Bank:</td>
              <td>Rabobank</td>
         </tr>
         <tr>
              <td class="adres" style="width: 100px;">IBAN NR:</td>
              <td>RABO55 55447882</td>
         </tr>
         <tr>
              <td style="width: 100px;">E-mail:</td>
              <td><a href="mailto: kalverenpasman@kpnmail.nl">kalverenpasman@kpnmail.nl</td>
         </tr>
         <tr>
              <td style="width: 100px;">Mobiel:</td>
              <td>06-38547270</td>
         </tr>
    </table>
</div>
<div style="font-size:22pt; margin-left: 10px; font-weight: bold">Kalverenbedrijf Pasman</div>
<br>
<div class="papiertype" style="border-bottom: 1px solid black;border-top: 1px solid black; font-size: 35px; font-weight: bold; text-align: center;">Factuur</div>
<br>
<table class="" style="width: 100%; border: 1px solid black">
    <tr style="">
        <th style="border-bottom: 1px solid black">Omschrijving</th>
        <th style="text-align: center;">Aantal</th>
        <th style="text-align: center;">Prijs</th>
        <th style="text-align:right">Regeltotaal</th>
    </tr>
    @foreach ($products as $product)
        <tr>
            <td>{{$product->description}}</td>
            {{-- <td>{{$product->id}}</td> --}}
            {{-- <td style="text-align: center;">{{$product->aantal}}</td> --}}
            {{-- <td style="text-align: center;">€ {{$product->prijsperstuk}}</td> --}}
            {{-- <td style="text-align: right;">€ {{round($product->prijsperstuk*$product->aantal,2)}}</td> --}}
        </tr>
    @endforeach
</table> 
