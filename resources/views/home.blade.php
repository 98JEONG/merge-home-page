
@extends('main')

@section('content')
    <div class="clock-banner">
        <!-- <img src="images/banner2.jpg"> -->
        <div class="clock">
            <p class="time">11:43:00</p>
            <p class="date">2020년 12월 09일</p>
        </div>
    </div>
    <div class="container">
        <p class="intro">
            안녕하세요 개발자 전세정입니다 👍
        </p>
        <p class="intro-contents">
            <span>건국대학교 소프트웨어학과를 전공하고
            <br/>현재 웹 풀스택 개발자가 되기 위해 공부하고 있습니다 ☺</span>
        </p>
        <div class="dev-skill-group">
            @foreach($skills as $skill)
                <div class="dev-skill-item">
                    <div>
                        <div style="display: flex; align-items: center;justify-content: space-between;">
                            <span class="title">{{ strtoupper($skill->name) }}</span>
                            <span>
                                @for($i = 0; $i<$skill->rating; $i++)
                                    <span>⭐</span>
                                @endfor
                            </span>
                        </div>
                        <p class="description">{{ $skill->meaning }}</p>
                    </div>
                    <img src="/images/{{ $skill->name }}.jpg">
                </div>
            @endforeach
        </div>
        <p class="intro">
            이런 개발을 했습니다 🎮
        </p>
        <p class="intro-contents">
            <span>친구들과 함께 팀프로젝트 개발을 하기도 하고
            <br/>스스로 개발을 하기도 했습니다</span>
        </p>
        <div class="project-group">
            @foreach($projects as $project)
                <div class="project-{{ $project->eng_title }} project-item">
                    <p class="name">{{ $project->title }}</p>
                    <p class="about">{{ $project->about }}</p>
                    <div class="description">
                        {{ $project->description }}
                    </div>
                    <span>{{ $project->tags }}</span>
                </div>
            @endforeach
        </div>
    </div>
@endsection

