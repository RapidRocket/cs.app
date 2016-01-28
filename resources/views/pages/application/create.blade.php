@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Создать заявку</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/application') }}">
                            {!! csrf_field() !!}

                            <div class="form-group">
                                <label class="col-md-4 control-label">Имя</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">E-Mail</label>

                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                </div>
                            </div>
                            <!-- Phone Field -->
                            <div class="form-group">
                                <label class="col-md-4 control-label">Телефон</label>

                                <div class="col-md-6">
                                    <input type="tel" class="form-control" name="tel" value="{{ old('tel') }}">
                                </div>
                            </div>
                            <!-- Phone Field End -->

                            <div class="form-group">
                                <label class="col-md-4 control-label">Пароль</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Подтверждение пароля</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password_confirmation">
                                </div>
                            </div>

                            <!-- Select fields -->



                            <!-- Select fields End -->



                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-user"></i>Создать заявку
                                    </button>
                                </div>
                            </div>
                        </form>

                        @include('errors.list')

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop