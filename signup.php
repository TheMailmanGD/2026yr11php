<form action="signupaction.php" method="post">
<h5>First Name</h5>
    <div class="form-floating mb-3">
        <input class="form-control" type="text" name="first_name" id="firstName" placeholder="First Name" required />
    <label for="inputLoginID">First Name</label>
    </div>
<h5>Last Name</h5>
    <div class="form-floating mb-3">
        <input class="form-control" type="text" name="last_name" id="lastName" placeholder="Last Name" required />
    <label for="inputPassword">Last Name</label>
    </div>
<h5>Email</h5>
    <div class="form-floating mb-3">
        <input class="form-control" type="text" name="email" id="email" placeholder="Email" required />
    <label for="inputPassword">Email</label>
    </div>
<h5>Password | 6-12 characters* </h5>
    <div class="form-floating mb-3">
        <input class="form-control" type="text" name="password" id="password" placeholder="Password" required />
    <label for="inputPassword">Password</label>
    </div>
    <div class="d-grid gap-2">
    <button class="btn btn-primary btn-block" type="submit">Sign up</button>
    </div>
</form>