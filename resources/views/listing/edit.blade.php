@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Listing</div>

                <div class="panel-body">
                    {!! Form::open(['action' => ['ListingsController@update', $listing->id], 'method' => 'POST']) !!}

                    {{ Form::bsText('Name', $listing->name, ['placeholder'=>'Company Name']) }}
                    {{ Form::bsText('address', $listing->address, ['placeholder'=>'Full Address']) }}
                    {{ Form::bsText('category', $listing->category, ['placeholder'=>'Category']) }}
                    {{ Form::bsTextArea('bio', $listing->bio, ['placeholder'=>'Biography']) }}
                    {{Form::bsSubmit('_method', 'PUT')}},
                    {{Form::bsSubmit('Submit', ['class' => "btn btn-primary"])}}

                    {!! Form::close() !!}

                </div>


            </div>
        </div>
    </div>

@endsection