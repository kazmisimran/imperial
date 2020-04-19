@extends('layout.app')

@include('templates.header')

<h1 class="container my-4 text-primary text-center">Dashboard Admin</h1>

<div class="container">
    <a href="{{route('header')}}" class="d-block">Dashboard Header</a>
    <a href="{{route('about')}}" class="d-block">Dashboard About</a>
    <a href="{{route('portfolio.index')}}" class="d-block">Dashboard Portfolio</a>
    <a href="{{route('team.index')}}" class="d-block">Dashboard Team</a>
</div>