
<html>

<body>
<center>
<form action="/cnx" method="post">

{{ csrf_field() }}

     <input type="text" name="name" placeholder="Name">
     <input type="text" name="surname" placeholder="Surname">
     <input type="text" name="specialty" placeholder="Specialty">
     <input type="email" name="email" placeholder="Email">
     <input type="password" name="password" placeholder="Password">
     <input type="submit" value="Register">

</form>

</center>
</body>


</html>

