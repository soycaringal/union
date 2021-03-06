@extends('layouts.app')

@section('content')

    {!!
    Form::model($profile, ['route' => ['profiles.update', $profile->id],
        'method' => 'put',
        'class' => 'form-horizontal']) !!}

    <div class="form-group">
        {!! Form::label('title', 'First Name', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-9">
            {!! Form::text('first_name', $profile->first_name , ['class' => 'form-control', 'placeholder' => 'First Name']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('title', 'Last Name', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-9">
            {!! Form::text('last_name', $profile->last_name , ['class' => 'form-control', 'placeholder' => 'Last Name']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('title', 'Middle Name', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-9">
            {!! Form::text('middle_name', $profile->middle_name , ['class' => 'form-control', 'placeholder' => 'Middle Name']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('title', 'Gender', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            <div class="row">
                <div class="col-sm-4">
                    {!! Form::label(null, null , ['class' => 'radio-inline']) !!}
                    <label class="radio-inline">
                        {!! Form::radio('gender', 'Male') !!} Male
                    </label>
                </div>
                <div class="col-sm-4">
                    {!! Form::label(null, null , ['class' => 'radio-inline']) !!}
                    <label class="radio-inline">
                        {!! Form::radio('gender', 'Female') !!} Female
                    </label>
                </div>


            </div>
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('title', 'Birthday', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-9">
            {!! Form::date('birthday', $profile->birthday , ['class' => 'form-control', 'placeholder' => 'Birthday']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('title', 'Birth Place', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-9">
            {!! Form::text('birthplace', $profile->birthplace , ['class' => 'form-control', 'placeholder' => 'Birth Place']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('title', 'Contact', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-9">
            {!! Form::text('contact', $profile->contact , ['class' => 'form-control', 'placeholder' => '09123456789']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('title', 'Home Address', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-9">
            {!! Form::textarea('home_address', $profile->home_address , ['class' => 'form-control', 'placeholder' => 'B2 L2 Village, Brgy, City, Province', 'rows' => '2']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('title', 'Permanent Address', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-9">
            {!! Form::textarea('permanent_address', $profile->permanent_address , ['class' => 'form-control', 'placeholder' => 'B2 L2 Village, Brgy, City, Province', 'rows' => '2']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('title', 'Religion', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-9">
            {!! Form::text('religion', $profile->religion , ['class' => 'form-control', 'placeholder' => 'Religion']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('title', 'Date of Hire', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-9">
            {!! Form::date('date_of_hire', $profile->date_of_hire , ['class' => 'form-control', 'placeholder' => 'Date of Hire']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('title', 'Date of Regular', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-9">
            {!! Form::date('date_of_regular', $profile->date_of_regular , ['class' => 'form-control', 'placeholder' => 'Date of Regular']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('title', 'Mother\' name', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-9">
            {!! Form::text('name_of_mother', $profile->name_of_mother , ['class' => 'form-control', 'placeholder' => 'Mother\' name']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('title', 'Father\'s Name', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-9">
            {!! Form::text('name_of_father', $profile->name_of_father , ['class' => 'form-control', 'placeholder' => 'Father\'s Name']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('title', 'Contact Person', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-9">
            {!! Form::text('contact_person', $profile->contact_person , ['class' => 'form-control', 'placeholder' => 'Contact Person']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('title', 'Contact Person Number', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-9">
            {!! Form::text('contact_person_number', $profile->contact_person_number , ['class' => 'form-control', 'placeholder' => '09123456789']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('title', 'Wage', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-9">
            {!! Form::text('wage', $profile->wage , ['class' => 'form-control', 'placeholder' => 'Wage']) !!}
        </div>
    </div>


    <div class="form-group">
        {!! Form::label('title', 'Note', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-9">
            {!! Form::textarea('note', $profile->note , ['class' => 'form-control', 'placeholder' => 'Note Something...', 'rows' => '2']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-9 pull-right">
            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>

    {{ csrf_field() }}
    {!! Form::close() !!}

@endsection
@yield('footer')