@extends('dashboard::layouts.master')

@section('content')
<div class="card mb-4">
        <div class="card-header bg-white font-weight-bold">
            Modules
        </div>
        <div class="card-body">
            <div class="row text-center">
                @foreach($modules as $module)
                <div class="col-md @if(!$loop->last) border-right @endif py-4">
                    <i class="fas fa-layer-plus fa-8x"></i>
                    <h2>{{$module->getName()}}</h2>
                    <h5 class="text-secondary">{{$module->getName()}}</h5>
                    <p class="my-4">{{$module->getDescription()}}</p>
                    <a href="{{route('dashboard.modules.details',['name'=>$module->getName()])}}">
                        Details
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@stop
