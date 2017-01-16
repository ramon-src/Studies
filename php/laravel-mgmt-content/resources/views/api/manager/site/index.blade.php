@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{$page_title}}
                </div>

                <div class="panel-body">
                    <div class="panel panel-info">
                        <div class="panel-heading"><b>Páginas</b>

                            <a href="{{route("manager.site.create")}}" class="btn btn-default pull-right btn-xs">
                                <i class="fa fa-plus text-primary"></i>Nova
                            </a>
                            <a href="{{route("manager.site.section")}}" class="btn btn-default pull-right btn-xs">
                                <i class="fa fa-gear text-default"></i>Gerenciar seções
                            </a>
                        </div>

                        <div class="list-group">
                            @forelse($pages as $page)
                                <div href="#" class="list-group-item">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            {{$page->title}}
                                        </div>
                                        <div class="col-lg-6 text-right">
                                            <a href="{{route('manager.site.edit', $page->id)}}" class="btn btn-xs btn-info">
                                                <i class="fa fa-edit"></i>Editar
                                            </a>
                                            @if($page->active)
                                                <a href="{{route('manager.site.switch', [$page->id,  $page->active])}}"
                                                   class="btn btn-xs btn-danger">
                                                    <i class="fa fa-eye-slash"></i>Esconder
                                                </a>
                                            @else
                                                <a href="{{route('manager.site.switch', [$page->id,  $page->active])}}"
                                                   class="btn btn-xs btn-success">
                                                    <i class="fa fa-eye"></i>Mostrar
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @empty
                                Nenhuma página foi adicionada ao site...
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection