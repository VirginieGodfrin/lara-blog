@extends('header')

    @section('titre')
        <h1>Bonjour {{ $prenom }} </h1>
    @endsection
        
    @section('form')
        <form action="/inscription" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Mot de passe">
            </div>
            <div class="form-group">
                <input type="password" name="password_confirmation" placeholder="Confirmation mot de passe">
            </div>
            <div class="form-group">
                <input type="submit" value="m'inscrire">
            </div>
        </form>
    @endsection
    
    @section('contenu')
        <div class="row">
            <p class="col-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, aliquam, autem, obcaecati, distinctio atque quae soluta ut vel itaque cum non amet aliquid et excepturi doloremque quas nihil sequi accusantium?</p>
            <p class="col-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, aliquam, autem, obcaecati, distinctio atque quae soluta ut vel itaque cum non amet aliquid et excepturi doloremque quas nihil sequi accusantium?</p>
            <p class="col-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, aliquam, autem, obcaecati, distinctio atque quae soluta ut vel itaque cum non amet aliquid et excepturi doloremque quas nihil sequi accusantium?</p>
        </div>
    @endsection
    
@extends('footer')   