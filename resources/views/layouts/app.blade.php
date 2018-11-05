<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript">   
        function verifCardId(){
            for(var i=1;i<4;i++){
                if(document.getElementsByName('type_card_'+i)[0].value==""){
                    console.log(i);
                    return i;
                }
            }
        }

        function addToList(event){
            //Verify wich card it will be
            var idCard = verifCardId();
            
            //Create the new element
            var card = window.event.target.parentNode;
            var deckList = document.getElementsByClassName('deck-card-list')[0];            
                        
            if(deckList.children.length<3){
                var newCard = document.createElement('li');
                var suppressButton = document.createElement('button');
                
                suppressButton.innerText = 'X';
                suppressButton.type="button";
                suppressButton.addEventListener('click',removeFromList);

                newCard.innerText = card.firstChild.data;
                newCard.className = card.className; //type
                newCard.setAttribute('name','card_'+idCard); //idCard
                newCard.appendChild(suppressButton);
                
                deckList.appendChild(newCard);

                //Give value to associated input
                document.getElementsByName('type_card_'+idCard)[0].value = card.className; //type

                //Hide type from type list
                card.style = "display:none";
            }else{
                alert('Le nombre maximal de carte est de 3');
            }         
        }

        function removeFromList(){            
            var card = window.event.target.parentNode;
            var cardType = document.getElementsByClassName(card.className)[0];            
            var inputAssoc = document.getElementsByName("type_"+card.getAttribute('name'))[0];

            cardType.style="display:flex";
            inputAssoc.value="";
            card.parentNode.removeChild(card);
        }

        function useDeck(event){
            var id_deck = window.event.target.parentNode.parentNode.id;
            window.location.href="setDeckActiv?id_deck="+id_deck;
        }
        
        function deleteDeck(event){
            var id_deck = window.event.target.parentNode.parentNode.id;
            window.location.href="deleteDeck?id_deck="+id_deck;
        }

        function modifDeck(event){
            var id_deck = window.event.target.parentNode.parentNode.id;
            window.location.href="modifDeck?id_deck="+id_deck;        
        }        
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Monomalpoly.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 middleFlex">
            @yield('content')
        </main>
    </div>
</body>
</html>
<script type="text/javascript">
    function setModifState(){
        if(window.location.href.indexOf('modif')!=-1){
            var list = document.getElementsByClassName('deck-card-list')[0];            
            for(i=0;i<list.children.length;i++){
                card = list.children[i];
                var input = document.getElementsByName('type_'+card.getAttribute('name'))[0];                
                var type = document.getElementsByClassName(card.className)[0];
                
                console.log(input);                
                input.value = card.className;
                console.log(input.value);
                type.style = "display:none";
            }            
        }
    }

    if(window.location.href.indexOf('modif')!=-1 || window.location.href.indexOf('creation')!=-1){
        function verifSubmit(event) {
            var card_list = document.getElementsByClassName('deck-card-list')[0];            
            var deck_name = document.getElementsByName('deck_name')[0].value;
            
            console.log(deck_name);

            if(deck_name==""){
                alert("Le deck doit avoir un nom");
            }else if(card_list.children.length<3){
                alert("Il n'y a pas assez de carte dans le deck (3 necessaire)");                
            }else if(card_list.children.length>3){
                alert("Il y a trop de carte dans le deck (3 maximum)");                
            }else{
                document.getElementById("deck_form").submit();
            }
        }
    }

    window.addEventListener('load',setModifState());    
</script>