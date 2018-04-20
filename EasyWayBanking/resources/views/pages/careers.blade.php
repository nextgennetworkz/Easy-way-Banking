
@extends('layouts.index')

@section('content')

<section class="career-page-banner">
    <img src="{{ asset('/custom/images/1920%20x%20300-PM-Blue.jpg') }}" class="img-responsive">
    <h1>Join With Our Team</h1>
</section>
<section class="page-body">
    <div class="container vacancies-main-container">
        <div class="vacancy-wrp">
            <span>Trainee Staff Assistants 2017/2018</span>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 19
                60s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing </p>
            <button onclick="openNav()">Apply Now</button>
            <hr>
        </div>
        <div class="vacancy-wrp">
            <span>Trainee Staff Assistants 2017/2018</span>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 19
                60s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing </p>
            <button onclick="openNav()">Apply Now</button>
            <hr>
        </div>
    </div>

    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <div class="col-sm-push-2 col-sm-8">
                <div class="form-content">
                    <form  action="{{ route('careers.store') }}" method="post" enctype="multipart/form-data">
                        <h2>Enter Your Details</h2>
                        <div class="input-field">
                            <span>First Name</span><br>
                            <input  type="text" name="first_name" required="required">
                        </div>

                        <div class="input-field">
                            <span>Last Name</span><br>
                            <input  type="text" name="last_name" required="required">
                        </div>

                        <div class="input-field">
                            <span>Telephone Number</span><br>
                            <input  type="text"  required="required" name="tele_number">
                        </div>

                        <div class="input-field">
                            <span>Mobile Number</span><br>
                            <input  type="text"  name="mobile_number">
                        </div>

                        <div class="input-field">
                            <span>Email</span><br>
                            <input  type="email" name="email" required="required">
                        </div>

                        <div class="input-field">
                            <span>O/L results</span><br>
                            <textarea name="ol" required="required" rows="5"></textarea>
                        </div>

                        <div class="input-field">
                            <span>A/L results</span><br>
                            <textarea name="al" required="required" rows="5"></textarea>
                        </div>

                        <div class="input-field">
                            <span>Professional qualifications</span><br>
                            <textarea name="Pro_qualification" required="required" rows="5"></textarea>
                        </div>
                        <div class="input-field">
                            <span>Upload Your CV</span><br>
                            <input  type="file" name="file">
                        </div>
                        <button type="submit" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection



