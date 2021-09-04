@extends('layouts.empty')

<div class="container">
    <div id="app1">
        <interest-survey :categories="{{ $categories }}"></interest-survey>
    </div>
</div>