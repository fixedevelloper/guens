@extends('base')
@section('keywords')
    Structure de procédure consulaire au Congo,
    Procédure consulaire en République Démocratique du Congo,
    Services consulaires au Congo,
    Gestion des procédures consulaires en RDC,
    Assistance consulaire au Congo,
    Structure des démarches consulaires au Congo,
    Conseils pour procédures consulaires en RDC,
    Formalités consulaires au Congo,
    Aide à la procédure consulaire en République Démocratique du Congo,
    Structure de gestion des procédures consulaires Congo,
@endsection
@section('description')
    Découvrez notre structure de procédure consulaire au Congo, offrant une assistance complète pour toutes vos démarches administratives. Bénéficiez de conseils professionnels et
    d'un soutien efficace pour vos formalités consulaires en République Démocratique du Congo
@endsection
@section('content')
@include('_partials._banner',['title'=>__('site.about_us')])
    @include('includes._about')
@include('includes._trial')
@endsection
