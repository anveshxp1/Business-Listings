@extends('layouts.app')

@section('content')
  <div class="row">
      <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
              <div class="panel-heading">Add Listing <a href="/dashboard" class="pull-right btn btn-default btn-xs">Go back</a></div>
              <div class="panel-body">
                  {!! Form::open(['action' => 'ListingsController@store', 'method' => 'POST']) !!}
                    {{ Form::bsText('name', '', ['placeholder' => 'Company Name'])}}
                    {{ Form::bsText('website', '', ['placeholder' => 'Company Website'])}}
                    {{ Form::bsText('email', '', ['placeholder' => 'Contact Email'])}}
                    {{ Form::bsText('phone', '', ['placeholder' => 'Contact Phone'])}}
                    {{ Form::bsText('address', '', ['placeholder' => 'Business Address'])}}
                    {{ Form::bsTextArea('bio', '', ['placeholder' => 'About This Business'])}}
                    {{ Form::bsSubmit('Submit',['class' => "btb btn-primary"]) }}
                  {!! Form::close() !!}
                </div>
            </div>
          </div>
      </div>
  </div>
@endsection
