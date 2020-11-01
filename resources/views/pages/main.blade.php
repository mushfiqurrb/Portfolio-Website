@extends('layouts.admin_layout')
@section('content')
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Main</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Main</li>
                        </ol>
                        <div class="row">
                            <div class="form-group col-md-3 mt-3">
                                <h3>Image</h3>
                            <img style="height: 30vh" src="{{url($main->image)}}" class="img-thumbnail">
                            <input class="mb-3" type="file" class="form-control" id="image" name="image">
                            </div>
                            <div class="form-group col-md-4 mt-3">
                                <div class="mb-3">
                                    <label for="person_name"><h4> Name</h4></label>
                                <input type="text" class="form-control" id="person_name" name="person_name" value="{{$main->person_name}}">
                                </div>
                                <div class="mb-3">
                                    <label for="quality"><h4> Qualities</h4></label>
                                <input type="text" class="form-control" id="quality" name="quality" value="{{$main->quality}}">
                                </div>
                            </div>
                        </div>
                        
                        <div style="height: 100vh;"></div>
                    </div>
                </main>
@endsection