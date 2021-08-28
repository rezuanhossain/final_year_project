@extends('layouts.empty')

<div class="container">
    <div id="app1">
        <interest-survey :sub_categories="{{$sub_categories}}" :categories="{{ $categories }}"></interest-survey>
    </div>
</div>