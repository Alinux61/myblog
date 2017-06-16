@extends('site.master')
@extends('site.right-content')
@extends('site.left-content')


@section('main_content')
  @foreach ($article as $articles)
    <div class="card w-100">
      <div class="card-header align-items-center">
        <div class="row text-muted" style="margin-bottom:auto">
          <div class="col-md-4 text-left">
            Kategori: <b>{{ $articles->Menu->value }} - {{ $articles->Category->category_name }} </b>
          </div>
          <div class="col-md-4"></div>
          <div class="col-md-4 text-right text-muted">
            <b>{{ $articles->created_at->diffForHumans() }}</b>
          </div>
        </div>
      </div>
      <div class="card-block">
        <div class="row no-gutters" style="margin-bottom:auto;margin-left:0">
          <div class="col-md-4">
            <img src="../media/article_title_images/{!! $articles->picture_name !!}" alt="">
          </div>
          <div class="col-md-8">
            <div class="card-title" style="font-size:20px">{{ $articles->title }}</div>
            <div class="card-text">
              {{ str_limit($articles->special_note, 160) }}
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer">
        <div class="row text-muted align-items-center" style="margin-bottom:auto">
          <div class="col-md-4 text-left">
            Yazar: <b>{{ $articles->User->name }} </b>
          </div>
          <div class="col-md-4"></div>
          <div class="col-md-4 text-right text-muted">
            <a href="yazi/{{ $articles->slug }}"><button type="button" class="mini circular ui blue button">Oku</button></a>
          </div>
        </div>
      </div>
    </div>
  @endforeach
      {{ $article->render() }}

@endsection
