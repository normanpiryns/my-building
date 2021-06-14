<div style="padding-top:5px;padding-left:100px">
    <div style="float:left; width:500px;padding-left:100px">
        <h4 style="text-align:center;"> residents and owners login </h4>
        <div class="container" ><br>
            <h1 class="text-center"></h1><hr><br>
            <div class="row animate__animated animate__pulse">
                <div class="col-md-4 offset-md-4">
                    <form method="POST" action="">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="username" value="<?= isset($username)? $username: ''; ?>" placeholder="Username" id="username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password"><label>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="login" class="btn btn-warning"> Login </button>
                        </div><br>
                        <p ><a href="register.php"> Register here  </a>  </p>
                    </form>
                </div>
             </div>
        </div>
    </div>


    <div style="float:left; width:500px;padding-left:300px;padding-right:50px">
        <h4 style="text-align:right;"> Syndic login </h4>
        <div class="container" style="float:left; width:500px;"><br>
            <h1 class="text-center"></h1><hr><br>
            <div class="row animate__animated animate__pulse">
                <div class="col-md-4 offset-md-4">
                    <form method="POST" action="">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="username" value="<?= isset($Adresse)? $Adresse: ''; ?>" placeholder="Username" id="username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password"><label><?php echo isset($input_arr['input_pass_error'])? '<label>'.$input_arr['input_pass_error'].'</label>':''; ?>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="login" class="btn btn-warning"> Login </button>
                        </div><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>