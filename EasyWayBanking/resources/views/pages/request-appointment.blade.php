@extends('layouts.index')

@section('content')
<section class="appointment-sec">
    <div class="container">
        <h1>Request for an appointment</h1>

        <form>
           <div class="input-wrp">
                <span>First Name</span><br>
                <input type="text" >
           </div>
           <div class="input-wrp">
               <span>Last Name</span><br>
                <input type="text" >
           </div>
           <div class="input-wrp">
                <span>Last Name</span><br>
                 <input type="text" >
           </div>
        </form>
    </div>
</section>
@endsection