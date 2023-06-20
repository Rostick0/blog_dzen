@extends('layout.default')

@section('title', 'Главная')

@section('html')
    <div class="container">
        <div class="page home-page">
            <x-aside />
            <div class="content">
                <div class="articles">
                    @if ($articles->count())
                        @foreach ($articles as $article)
                            <x-article :article="$article" />
                        @endforeach
                        <br>
                        {{ $articles->links('vendor.pagination') }}
                    @else
                        <div class="article__no-search">
                            Лента пуста, попробуйте зайти позже
                        </div>
                    @endif
                </div>
            </div>
            <x-right-tags />
        </div>
    </div>
@endsection
