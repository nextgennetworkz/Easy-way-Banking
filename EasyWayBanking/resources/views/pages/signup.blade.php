@extends('layouts.index')

@section('content')
<section class="signing-sec">
    <div class="col-sm-push-4 col-sm-5">
        <div class="signing-wrp">
            <div class="signing-form">
                <h1>Sign-Up Today</h1>
                <form>
                    <div class="input-wrp">
                        <input type="text" placeholder="Username">
                        <span><i class="fa fa-user"></i></span>
                    </div>
                    <div class="input-wrp">
                        <input type="email" placeholder="E-mail">
                        <span><i class="fa fa-envelope"></i></span>
                    </div>
                    <div class="input-wrp">
                        <input type="password" placeholder="Password">
                        <span><i class="fa fa-lock"></i></span>
                    </div>
                     <div class="input-wrp">
                         <input type="password" placeholder="Retype Password">
                         <span><i class="fa fa-lock"></i></span>
                         </div>

                    <div class="input-wrp">
                        <button>Sign-Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
@endsection