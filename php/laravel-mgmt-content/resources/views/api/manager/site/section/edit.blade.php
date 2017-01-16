@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-9 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>{{$page_title}}</b>
                    <a href="{{route("manager.site.section")}}" class="btn btn-default pull-right btn-xs">
                        <i class="fa fa-reply"></i>Voltar
                    </a>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST"
                          action="{{ route('manager.site.section.update', $section->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group{{ $errors->has('order') ? ' has-error' : '' }}">
                            <label for="order" class="col-md-4 control-label">Ordem</label>

                            <div class="col-md-6">
                                <input id="order" type="number" min="1" class="form-control" name="order"
                                       value="{{ old('order', $section->order) }}">

                                @if ($errors->has('order'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('order') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('col_lg') ? ' has-error' : '' }}">
                            <label for="col_lg" class="col-md-4 control-label">Coluna tela grande ( 1200px > )</label>

                            <div class="col-md-6">
                                <input id="col_lg" type="number" min="1" max="12" class="form-control" name="col_lg"
                                       value="{{ old('col_lg', $section->col_lg) }}">

                                @if ($errors->has('col_lg'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('col_lg') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('col_md') ? ' has-error' : '' }}">
                            <label for="col_md" class="col-md-4 control-label">Coluna tela média ( 992px > )</label>

                            <div class="col-md-6">
                                <input id="col_md" type="number" min="1" max="12" class="form-control" name="col_md"
                                       value="{{ old('col_md', $section->col_md) }}">

                                @if ($errors->has('col_md'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('col_md') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('col_sm') ? ' has-error' : '' }}">
                            <label for="col_sm" class="col-md-4 control-label">Coluna tela pequena ( 768px > )</label>

                            <div class="col-md-6">
                                <input id="col_sm" type="number" min="1" max="12" class="form-control" name="col_sm"
                                       value="{{ old('col_sm', $section->col_sm) }}">

                                @if ($errors->has('col_sm'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('col_sm') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('col_xs') ? ' has-error' : '' }}">
                            <label for="col_xs" class="col-md-4 control-label">Coluna tela muito pequena ( < 768px
                                )</label>

                            <div class="col-md-6">
                                <input id="col_xs" type="number" min="1" max="12" class="form-control" name="col_xs"
                                       value="{{ old('col_xs', $section->col_xs) }}">

                                @if ($errors->has('col_xs'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('col_xs') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('box_color') ? ' has-error' : '' }}">
                            <label for="box_color" class="col-md-4 control-label">Cor da seção</label>

                            <div class="col-md-6">
                                <input id="box_color" type="text" class="form-control" name="box_color"
                                       value="{{ old('box_color', $section->box_color) }}" placeholder="Cores aceitas pelo CSS">

                                @if ($errors->has('box_color'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('box_color') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('text_color') ? ' has-error' : '' }}">
                            <label for="text_color" class="col-md-4 control-label">Cor da seção</label>

                            <div class="col-md-6">
                                <input id="text_color" type="text" class="form-control" name="text_color"
                                       value="{{ old('text_color', $section->text_color) }}" placeholder="Cores aceitas pelo CSS">

                                @if ($errors->has('text_color'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('text_color') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Título</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title"
                                       value="{{ old('title', $section->title) }}" required>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <textarea id="description" class="form-control" name="description"
                                           required>{!! old('description', $section->description) !!}</textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success pull-right">
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

@section('script')
    <script src='//cdn.tinymce.com/4/tinymce.min.js'></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            height: 500,
            plugins: [
                'advlist autolink lists charmap  anchor',
                'searchreplace visualblocks code',
                'insertdatetime table contextmenu paste code'
            ],
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link',
            content_css: '//www.tinymce.com/css/codepen.min.css'
        });
    </script>
@endsection