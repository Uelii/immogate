<!--Layout to add a new object-->

@extends('layouts.master')

@section('title')
    CREATE-Objects
@endsection

@section('content')
    <section class="row">
        <div class="col-md-12">
            <h2>Add a new object</h2>
            <hr>
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add object</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('objects.store') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('building_id') ? 'has-error' : '' }}">
                                <label for="building_id" class="col-md-4 control-label">Building</label>

                                <div class="col-md-6">
                                    <select id="building_id" class="form-control" name="building_id" required autofocus>
                                        @foreach($buildings as $building)
                                            <option value="{{ $building->id }}"> {{ $building->name }}:
                                                {{ $building->street }} {{$building->street_number}},
                                                {{ $building->zip_code }} {{ $building->city }}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('building_id'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('building_id') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description" class="col-md-4 control-label">Description</label>

                                <div class="col-md-6">
                                    <textarea id="description" class="form-control" rows="5" name="description" required></textarea>

                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('size') ? ' has-error' : '' }}">
                                <label for="size" class="col-md-4 control-label">Size</label>

                                <div class="col-md-6">
                                    <input id="size" type="number" class="form-control" name="size" step="any" required>

                                    @if ($errors->has('size'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('size') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('room') ? ' has-error' : '' }}">
                                <label for="room" class="col-md-4 control-label">Room</label>

                                <div class="col-md-6">
                                    <input id="room" type="number" class="form-control" name="room" step="any" required>

                                    @if ($errors->has('room'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('room') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Add
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="panel-footer">
                        <a href="{{ url('/objects') }}" class="btn btn-info"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back to overview</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection