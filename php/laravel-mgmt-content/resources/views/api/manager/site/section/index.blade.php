@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{$page_title}}
                </div>

                @forelse($pages as $page)
                    <div class="panel-body">
                        <div class="panel {{$page->active ? 'panel-info' : 'panel-warning'}}">
                            <div class="panel-heading"><b>{{$page->title}}</b>
                                <a href="{{route("manager.site.section.create", $page->id)}}"
                                   class="btn btn-default pull-right btn-xs">
                                    <i class="fa fa-plus text-primary"></i>Nova
                                </a>
                            </div>

                            <div class="list-group">
                                @forelse($page->sections as $section)
                                    <div href="#" class="list-group-item">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                {!! str_limit($section->title, 100) !!}
                                            </div>
                                            <div class="col-lg-6 text-right">
                                                <a href="{{route('manager.site.section.edit', $section->id)}}"
                                                   class="btn btn-xs btn-info">
                                                    <i class="fa fa-edit"></i>Editar
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div href="#" class="list-group-item">
                                        Nenhuma seção foi adicionada à página
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                @empty
                    <div href="#" class="list-group-item">
                        Nenhuma página foi adicionada ao site...
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection