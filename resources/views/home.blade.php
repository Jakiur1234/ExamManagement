@extends('main.main')
@section('document-title')
    Home
@endsection
@section('body-section')

    <x-sections.hero-section />
    <x-sections.at-a-glance />
    <x-sections.services />
    <x-sections.examiners />
    <x-sections.student-review />

@endsection
