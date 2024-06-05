@extends('app')
@section('content')
<div class="container">
    <div class="grid">
        <div class="card">
            <img src="https://placehold.co/600x400" alt="Placeholder" class="card__image">
            <div class="card__header">
                <h1 class="card__title">Welcome to Laravel</h1>
            </div>
            <div class="card__body">
                <p>Lorem ipsum dolor sit amet consectetur <a href="#" title="adipisicing elit">adipisicing elit.</a> Consequuntur nemo rerum iure sunt aut nisi nesciunt dignissimos possimus corrupti, laborum, quasi impedit voluptates nobis quas praesentium architecto dolores vel enim!</p>
            </div>
            <div class="card__footer">
                <a href="#" class="button button--primary">About link</a>
            </div>
        </div>
        <div class="card">
            <img src="https://placehold.co/600x400" alt="Placeholder" class="card__image">
            <div class="card__header">
                <h1 class="card__title">Welcome to Laravel</h1>
            </div>
            <div class="card__body">
                <p>Lorem ipsum dolor sit amet consectetur <a href="#" title="adipisicing elit">adipisicing elit.</a> Consequuntur nemo rerum iure sunt aut nisi nesciunt dignissimos possimus corrupti, laborum, quasi impedit voluptates nobis quas praesentium architecto dolores vel enim!</p>
            </div>
            <div class="card__footer">
                <button type="button" class="button button--secondary">About button</button>
            </div>
        </div>
        <div class="card">
            <img src="https://placehold.co/600x400" alt="Placeholder" class="card__image">
            <div class="card__header">
                <h1 class="card__title">Welcome to Laravel</h1>
            </div>
            <div class="card__body">
                <p>Lorem ipsum dolor sit amet consectetur <a href="#" title="adipisicing elit">adipisicing elit.</a> Consequuntur nemo rerum iure sunt aut nisi nesciunt dignissimos possimus corrupti, laborum, quasi impedit voluptates nobis quas praesentium architecto dolores vel enim!</p>
            </div>
            <div class="card__footer">
                <button type="button" class="button button--primary button--outline">Outline About</button>
            </div>
        </div>
    </div>

</div>
@endsection