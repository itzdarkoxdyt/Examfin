@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Participacione
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Participacione</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('participaciones.update', $participacione->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('participacione.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
