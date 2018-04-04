


    <h1>Application Form</h1>

    {!! Form::open(['action' => 'CareersController@store', 'method' => 'POST']) !!}

    <div class="form-group">
        {{Form::label('firstname', 'First Name')}}
        {{Form::text('firstname', '', ['class' => 'form-control', 'placeholder' => 'First Name'])}}

    </div>

    <div class="form-group">
        {{Form::label('lastname', 'Last Name')}}
        {{Form::text('lastname', '', ['class' => 'form-control', 'placeholder' => 'Last Name'])}}

    </div>

    <div class="form-group">
        {{Form::label('nic', 'NIC')}}
        {{Form::text('NIC', '', ['class' => 'form-control', 'placeholder' => 'NIC'])}}

    </div>

    <div class="form-group">
        {{Form::label('email', 'email')}}
        {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'email'])}}

    </div>

    <div class="form-group">
        {{Form::label('post', 'post')}}
        {{Form::text('post', '', ['class' => 'form-control', 'placeholder' => 'post'])}}

    </div>


    {!! Form::close() !!}


