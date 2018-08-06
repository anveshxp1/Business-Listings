@extends('layouts.app')

@section('content')
  <div class="row">
      <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
              <div class="panel-heading">Latest Business Listings<span class="pull-right"><a href="/listings/create"   class="btn btn-success btn-xs">Add Listing</a> </span></div>  
              <div class="panel-body">
                  @if(count($listings))
                    <ul class="list-group">
                      @foreach($listings as $listing)
                        <li class="list-group-item"><a href="/listings/{{$listing->id}}">{{$listing->name}}</a></li>
                      @endforeach
                    </ul>

                  @else
                    <p>No listings found<p>
                  @endif
              </div>
          </div>
      </div>
  </div>
@endsection
