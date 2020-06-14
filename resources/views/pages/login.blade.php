@extends('layouts.laravelAppLayout')

@section('content')


    <div class="border text-center">
        <h1>{{$title}}</h1>
    </div>
<div>

    <div class="border jumbotron text-center">
        <div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>Customer Login</h3>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Your Password *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Login" />
                    </div>
                    <div class="form-group">
                        <a href="#" class="btnForgetPwd">Forgot Password?</a>
                    </div>

                </div>


                <div class="col-md-6 login-form-2">

                    <h3>Banker Login</h3>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Your Password *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Login" />
                    </div>
                    <div class="form-group">

                        <a href="#" class="btnForgetPwd" value="Login">Forgot Password?</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        {{--    <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>--}}
        {{--        <a class="btn btn-primary btn-lg" href="/register" role="button">Register</a></p>--}}
    </div>

</div>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!------ Include the above in your HEAD tag ---------->
@endsection


