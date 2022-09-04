<div class="container  p-5">
 <form method="post" action="createUser">
  <div class="col-3">
   <label for="firstName" class="form-label">First name</label>
   <input type="text" name="firstName" id="exampleInputEmail" class="form-control" aria-describedby="firstName">

   <label for="lastName" class="form-label">Last name</label>
   <input type="text" name="lastName" id="" class="form-control" aria-describedby="">

   <label for="email" class="form-label">E-mail</label>
   <input type="email" name="email" id="" class="form-control">

   <label for="phoneNumber" class="form-label">Phone numbr</label>
   <input type="tel" class="form-control" pattern="[0-9]{9,13}" name="phoneNumber" placeholder="000000000" id="">
   <!-- [0-9]{2}-[0-9]{3}-[0-9]{2}-[0-9]{2} -->
   
   <label for="" class="form-label">Login</label>
   <input type="text" name="login" class="form-control" id="">

   <label for="Password" class="form-label">Password</label>
   <input type="password" name="password" class="form-control">

   <button class="btn btn-primary" type="submit">Create</button>
  </div>
 </form>
</div>
