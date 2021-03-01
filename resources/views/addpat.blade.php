
<form action="/addpat" method="post">

{{ csrf_field() }}

<input type="text" name="first_name" placeholder="First Name">
<input type="text" name="last_name" placeholder="Last Name">

<br></br>
<input type="date" name="Date_of_Birth" placeholder="Date_of_Birth">
<input type="text" name="sex" placeholder="sex">

<br></br>
<input type="text" name="Contact_Number" placeholder="Contact_Number">
<input type="text" name="numéro_de_sécurité_sociale" placeholder="numéro_de_sécurité_sociale">

<br></br>
<input type="email" name="email" placeholder="email">
<input type="text" name="Address" placeholder="Address">

<br></br>
<input type="text" name="Maladies_Chroniques" placeholder="Maladies_Chroniques">
<input type="text" name="antécédents" placeholder="antécédents">

<br></br>
<input type="text" name="Allergie" placeholder="Allergie">
<input type="text" name="commentaires" placeholder="commentaires">

<br></br>

  <button class="login100-form-btn" class="button is-link" type="submit" >
     Add Patient
  </button>


</form>



