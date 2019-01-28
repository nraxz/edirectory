@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Create Listing</div>

                     <div class="panel-body">
                         {!! Form::open(['action' => 'ListingsController@store', 'method' => 'POST']) !!}

                         {{ Form::bsText('Name', '', ['placeholder'=>'Company Name']) }}
                         {{ Form::bsText('address', '', ['placeholder'=>'Full Address']) }}
                         {{ Form::bsText('category', '', ['placeholder'=>'Category']) }}
                         {{ Form::bsTextArea('bio', '', ['placeholder'=>'Biography']) }}
                         {{Form::bsSubmit('Submit', ['class' => "btn btn-primary"])}}

                         {!! Form::close() !!}

                     </div>


            </div>
        </div>
    </div>

@endsection
