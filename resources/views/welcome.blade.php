<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>

<body class="bg-gray-200 h-screen   grid gap-16">
    <header>
        <nav class="bg-vermelho-400 w-full h-10"> </nav>
        <img src="{{asset('/img/waveNavbar.svg')}}" class="w-full h-auto " alt="">
    </header>

    <div class="flex w-full mx-auto gap-8 justify-center content-center items-center">
        <div class="bg-vermelho-400 h-4 w-4 rounded-full"></div>
        <div class="bg-vermelho-400 h-4 w-4 rounded-full"></div>
    </div>

    <main class="container mx-auto flex flex-col w-7/8 ">
   
        <div class="grid content-center bg-preto-400 w-full h-200 rounded-2xl">
            <div class="grid grid-cols-6 gap-y-10 ">
                @foreach($characters as $pokemon)
                    <div class="flex mx-auto flex-col grayscale group hover:filter-none transition duration-100 gap-y-2">
                        <img src="{{asset($pokemon['image'])}}" alt="bulbassaur" class="p-3 bg-preto-600 rounded-2xl w-35 h-30" />
                        <div class="grid">
                            <span class="font-medium text-sm text-preto-500">N° 0001</span>
                            <span class="font-medium text-xl text-preto-300">{{$pokemon['name']}}</span>
                        </div>

                        <div class="flex gap-2">
                            @foreach($pokemon['types'] as $type)
                            <span class=" bg-preto-600 text-preto-300
                                @if($type == 'grass') group-hover:bg-green-400 group-hover:text-green-800
                                @elseif($type == 'poison') group-hover:bg-purple-400 group-hover:text-purple-800
                                @elseif($type == 'fire') group-hover:bg-orange-400 group-hover:text-orange-800
                                @elseif($type == 'flying') group-hover:bg-gray-400 group-hover:text-gray-800
                                @elseif($type == 'water') group-hover:bg-blue-400 group-hover:text-blue-800
                                @elseif($type == 'bug') group-hover:bg-green-200 group-hover:text-green-800
                                @elseif($type == 'normal') group-hover:bg-gray-200 group-hover:text-gray-800
                                @elseif($type == 'electric') group-hover:bg-yellow-400 group-hover:text-yellow-800
                                @endif
                             font-medium rounded-lg text-center py-1 px-2.5 text-sm">{{$type}}</span>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


    
    </main>

    <div class="container flex justify-between mx-auto items-center  w-7/8 ">
        <div class="flex bg-vermelho-400 h-12 w-12 rounded-full"></div>
        <div class="flex flex-col gap-2 *:rounded-lg">
            <div class="bg-preto-400 h-1.5 w-23 "></div>
            <div class="bg-preto-400 h-1.5 w-23 "></div>
            <div class="bg-preto-400 h-1.5 w-23 "></div>
            <div class="bg-preto-400 h-1.5 w-23 "></div>
        </div>
    </div>

    <section class="bg-vermelho-400 h-40 w-full">

    </section>



</body>

</html>
