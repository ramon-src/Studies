@extends('layouts.web')

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="description">
                {{$page->description}}
            </div>
        </div>
    </div>
    <div class="row">
        @forelse($sections as $sec)
            <div class="col-lg-{{$sec->col_lg}} col-md-{{$sec->col_md}} col-sm-{{$sec->col_sm}} col-xs-{{$sec->col_xs}}">
                <div class="page-section"
                     style="background-color: {{$sec->box_color}} !important; color: {{$sec->text_color}} !important;">
                    {!! $sec->description !!}
                </div>
            </div>
        @empty
        @endforelse
    </div>
@endsection