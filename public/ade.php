{{-- {{dd($orders->prijsperstuk)}} --}}
<style>
     .producten tr,.producten td, .producten th{
          width: 200px;
     }

     .logo, img{
          /* background-color: red; */
          width: 300px;
     }
     .company-info{
          float: right;
          position: absolute;
          top: 20px;
     }
</style>

<div class="logo">
   <img src="https://media.nu.nl/m/hxtxyxzazu3p_wd640.jpeg" />

</div>
<div class="company-info">
    <table>
         <tr>
              <td>Naam:</td>
              <td>T.A. Pasman</td>

         </tr>
         <tr>
              <td>Adres:</td>
              <td>Driekieftenweg 10</td>
         </tr>
         <tr>
              <td>Postcode/Plaats: </td>
              <td>7214PJ Epse</td>
         </tr>
    </table>
</div>
<br>
<br>
<br>
<div class="papiertype" style="border-bottom: 1px solid black; border-top: 1px solid black; font-size: 35px; font-weight: bold; text-align: center;">Factuur</div>
<br>
<br>
<table class="producten">
     <tr>
          <th>Omschrijving</th>
          <th>Aantal</th>
          <th>Prijs</th>
          <th>Regeltotaal</th>
     </tr>
          @foreach ($orders as $product)
               <tr>
                    <td>{{$product->omschrijving}}</td>
                    <td>{{$product->aantal}}</td>
                    <td>€ {{$product->prijsperstuk}}</td>
               </tr>
          @endforeach
</table>
