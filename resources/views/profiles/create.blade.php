@extends('layouts.app')

@section('content')

    {!! Form::open([
        'action' => 'ProfilesController@store',
        'method' => 'post',
        'class' => 'form-horizontal',
        'files' => true]) !!}

        <div class="form-group">
            {!! Form::label('title', 'First Name', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::text('first_name', null , ['class' => 'form-control', 'placeholder' => 'First Name', 'required' => 'required']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('title', 'Last Name', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::text('last_name', null , ['class' => 'form-control', 'placeholder' => 'Last Name', 'required' => 'required']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('title', 'Middle Name', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::text('middle_name', null , ['class' => 'form-control', 'placeholder' => 'Middle Name', 'required' => 'required']  ) !!}
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
                {!! Form::date('birthday', null , ['class' => 'form-control', 'placeholder' => 'Birthday']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('title', 'Birth Place', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::text('birthplace', null , ['class' => 'form-control', 'placeholder' => 'Birth Place']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('title', 'Contact', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::text('contact', null , ['class' => 'form-control', 'placeholder' => '09123456789']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('title', 'Home Address', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::textarea('home_address', null , ['class' => 'form-control', 'placeholder' => 'B2 L2 Village, Brgy, City, Province', 'rows' => '2']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('title', 'Permanent Address', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::textarea('permanent_address', null , ['class' => 'form-control', 'placeholder' => 'B2 L2 Village, Brgy, City, Province', 'rows' => '2']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('title', 'Religion', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::text('religion', null , ['class' => 'form-control', 'placeholder' => 'Religion']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('title', 'Date of Hire', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::date('date_of_hire', null , ['class' => 'form-control', 'placeholder' => 'Date of Hire']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('title', 'Date of Regular', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::date('date_of_regular', null , ['class' => 'form-control', 'placeholder' => 'Date of Regular']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('title', 'Mother\' name', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::text('name_of_mother', null , ['class' => 'form-control', 'placeholder' => 'Mother\' name']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('title', 'Father\'s Name', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::text('name_of_father', null , ['class' => 'form-control', 'placeholder' => 'Father\'s Name']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('title', 'Contact Person', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::text('contact_person', null , ['class' => 'form-control', 'placeholder' => 'Contact Person']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('title', 'Contact Person Number', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::text('contact_person_number', null , ['class' => 'form-control', 'placeholder' => '09123456789']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('title', 'Wage', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::text('wage', null , ['class' => 'form-control', 'placeholder' => '10,000.00']) !!}
            </div>
        </div>


        <div class="form-group">
            {!! Form::label('title', 'Note', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::textarea('note', null , ['class' => 'form-control', 'placeholder' => 'Note Something...', 'rows' => '2']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('title', 'Memo', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::file('files[]',['class' => 'form-control', 'multiple' => true]) !!}
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