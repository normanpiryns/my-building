

<div style="padding-top:10px;margin-left:450px;">
    <div style="float:left; width:500px;padding-left:100px">
        <h4 style="text-align:center;">  Login </h4>
        <div class="container" ><br>
            <h1 class="text-center"></h1><hr><br>
            <div class="row animate__animated animate__pulse">
                <div class="col-md-4 offset-md-4">
                    <form method="POST" action="/user/login">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="username"  placeholder="Username" id="username">
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
                        <p ><a href="/user/forms"> Register here  </a>  </p>
                    </form>
                </div>
             </div>
        </div>
    </div>

   

