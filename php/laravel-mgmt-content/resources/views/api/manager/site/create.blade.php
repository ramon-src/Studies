@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$page_title}}
                    <a href="{{route("manager.site")}}" class="btn btn-default pull-right btn-xs">
                        <i class="fa fa-reply"></i>Voltar
                    </a>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('manager.site.store') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Rota</label>

                            <div class="col-md-6">
                                <p>Toda página do site terá prefixo 'site'</p>
                                <input id="slug" type="text" class="form-control" name="slug" value="{{ old('slug') }}"
                                       placeholder="Insira a identificação da página para a URL"
                                       required>

                                @if ($errors->has('slug'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('slug') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('order') ? ' has-error' : '' }}">
                            <label for="order" class="col-md-4 control-label">Ordem</label>

                            <div class="col-md-6">
                                <input id="order" type="number" min="1" class="form-control" name="order"
                                       value="{{ old('order') }}">

                                @if ($errors->has('order'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('order') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Título</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title"
                                       value="{{ old('title') }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Descrição</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control" name="description"
                                          value="{{ old('description') }}"></textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('symbol') ? ' has-error' : '' }}">
                            <label for="symbol" class="col-md-4 control-label">Classe do Ícone</label>

                            <div class="col-md-6">
                                <input id="symbol" type="text" class="form-control" name="symbol"
                                       value="{{ old('symbol') }}" placeholder="Apenas nome do ícone do Font-Awesome">

                                @if ($errors->has('symbol'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('symbol') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('color_symbol') ? ' has-error' : '' }}">
                            <label for="color_symbol" class="col-md-4 control-label">Cor da seção</label>

                            <div class="col-md-6">
                                <input id="color_symbol" type="text" class="form-control" name="color_symbol"
                                       value="{{ old('color_symbol') }}" placeholder="Cor no padrão Hex: #d92626">

                                @if ($errors->has('color_symbol'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('color_symbol') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-floppy-o"></i>Salvar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection