@extends('layouts.plain')
@section('content')
    <div class="error">
        <div class="title">403</div>
        <p class="links">
            <a href="{{ route('post.index') }}" aria-label="点击查看文章列表">文章</a><font aria-hidden="true">/</font>
            <a href="{{ route('projects') }}" aria-label="点击查看项目列表">项目</a><font aria-hidden="true">/</font>
            <a href="{{ route('page.show','about') }}" aria-label="查看的个人信息">关于</a>
        </p>
    </div>
@endsection
