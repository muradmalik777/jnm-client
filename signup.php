<!DOCTYPE html>
<html lang="en">


<?php include 'links.php'; ?>

<body>
<?php include 'header.php'; ?>
    <div class="mt100">
        <!-- content start -->
        <div class="container">
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="wrapper-content bg-white">
                        <div class="section-scroll" id="section-apply">
                            <div class="bg-light pinside60">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="section-title mb60 text-center">
                                            <h1>Create your Account</h1>
                                            <p>Create Account and get Access to top Resources</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form" id="userSignupForm">
                                            <fieldset>
                                                 <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 form-group ">
                                                    <label class="control-label" for="first_name">First Name</label>
                                                    <div class="">
                                                        <input id="name" name="first_name" type="text" placeholder="your first name" class="form-control input-md" required>
                                                        <span class="help-block"> </span>
                                                    </div>
                                                </div>
                                                <!-- Text input-->
                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 form-group ">
                                                    <label class=" control-label" for="last_name">Last Name</label>
                                                    <div class="">
                                                        <input id="email" name="last_name" type="text" placeholder="your last name" class="form-control input-md">
                                                    </div>
                                                </div>
                                                <!-- Text input-->
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group ">
                                                    <label class="control-label" for="email">Email</label>
                                                    <div class="">
                                                        <input id="phone" name="email" type="email" placeholder="enter your email" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group slide-ranger ">
                                                    <label for="password" class="control-label">Password</label>
                                                    <input type="password" name="password" id="password" class="form-control" placeholder="create account password">
                                                </div>
                                                <!-- Button -->
                                                <div class="form-group col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                                                    <div class="">
                                                        <button type="submit" id="signup" class="btn btn-primary btn-block">Sign up</button>
                                                    </div>
                                                </div>
                                                <div class="form-group col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                                                    <div class="half">
                                                        <p>Already a Member? <a href="login.php">Login</a></p>
                                                    </div>
                                                </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/main.js"></script>

<!-- personal-loan.html  19:06:50  -->
</html>
