@extends('layouts.index')

@section('content')
<section class="signing-sec">
    <div class="col-sm-push-4 col-sm-5">
        <div class="signing-wrp">
            <div class="signing-form">
                <h1>Sign-in to Your Account</h1>
                <form>
                    <div class="input-wrp">
                        <input type="text" placeholder="Username">
                        <span><i class="fa fa-user"></i></span>
                    </div>
                    <div class="input-wrp">
                        <input type="password" placeholder="Password">
                        <span><i class="fa fa-lock"></i></span>
                    </div>
                    <p>Forget password?</p><a href="{{url('reset-password')}}">Click here to reset</a>
                    <div class="input-wrp">
                       <button>Sign-in</button>
                    </div>

                </form>

            </div>

        </div>

    </div>

</section>
@endsection