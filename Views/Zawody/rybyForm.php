<div class="container">
    <div class="row">
        <div class="clo-12 col-sm8- offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
            <div class="container">
                <h3>Register</h3>
                <hr>
                <form id="form" action="" method="post">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="firstName">Nazwa</label>
                                <input type="text" name="nazwa" id="nazwa" value="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="email">Występowanie</label>
                                <input type="text" name="wystepowanie" id="email" >
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="password">Styl życia tyby</label>
                                <input class="form-control" type="text" name="stylZycia" id="password">
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
