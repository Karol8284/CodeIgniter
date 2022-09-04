<div class="container">
    <div class="row">
        <div class="clo-12 col-sm8- offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
            <div class="container">
                <h3>Register</h3>
                <hr>
                <form action="r" method="post">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input type="text" name="firstName" id="firstName" value="<?= set_value('firstName') ?>">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input type="text" name="lastName" id="lastName" value="<?= set_value('lastName') ?>">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="email">Email adress</label>
                                <input type="text" name="email" id="email" value="<?= set_value('email') ?>">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control" type="text" name="password" id="password">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="passwordConfirm">Confirm Password</label>
                                <input class="form-control" type="text" name="passwordConfirm" id="passwordConfirm">
                            </div>
                        </div>

                        <?php if(isset($validation)): ?>
                            <div class="col-12">
                                <div class="alert alert-danger" role="alert">
                                    <?= $validation->listErrors(); ?>
                                </div>
                            </div>
                        <?php endif ?>
                    </div>
                    
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <button class="btn btn-primary">Register</button>
                        </div>
                        <div class="col-12 col-sm-8 text-right">
                            <a href="/admin/user">Already have account</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>