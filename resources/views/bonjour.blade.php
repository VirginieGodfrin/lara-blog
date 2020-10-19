@extends('header')

<div class='container'>
    @section('titre')
        <div class='jumbotron'>
           <h1>Bonjour {{$prenom}} </h1> 
        </div>
    @endsection
    <div class="row">
        @section('contenu')
            <p class="col-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, aliquam, autem, obcaecati, distinctio atque quae soluta ut vel itaque cum non amet aliquid et excepturi doloremque quas nihil sequi accusantium?</p>
            <p class="col-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, aliquam, autem, obcaecati, distinctio atque quae soluta ut vel itaque cum non amet aliquid et excepturi doloremque quas nihil sequi accusantium?</p>
            <p class="col-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, aliquam, autem, obcaecati, distinctio atque quae soluta ut vel itaque cum non amet aliquid et excepturi doloremque quas nihil sequi accusantium?</p>
        @endsection
    </div>
</div>
@extends('footer')   