
    <div class="max-w-screen-xl mx-auto">
        <div class="flex justify-between py-2 border-b items-betwen">
            <a href=""><i class="fa-solid fa-envelope" style="color:#0c0455;"></i> <span class="text-xl"> aa@aaa.com </span></a>
            <a href=""><i class="fa-solid fa-phone" style="color:#0c0455;"></i> <span class="text-xl"> 2662540</span></a>
            <div>
                <a href=""><i class="fa-brands fa-whatsapp fa-2x" style="color:#08833f;"></i></a>
                <a href=""><i class="fa-brands fa-facebook fa-2x" style="color:#0c0455;"></i></a>
                <a href=""><i class="fa-brands fa-youtube fa-2x" style="color:#ff0909;"></i></a>
                <a href=""><i class="fa-brands fa-twitter fa-2x" style="color:#09b1ff;"></i></a>
                <a href=""><i class="fa-brands fa-instagram fa-2x" style="color:#ffb109;"></i></a>
            </div>

        </div>
        <div class="flex items-center justify-center py-2 border-b">
            {{-- <a href="">Email: aa@aaa.com</a>
            <a href="">Telf: 2665470</a>
            <a href="">wathsapp: 996958745</a> --}}
            <a href="#" class="px-2 lg:px-0">
                <img src="/img/logoempresas.jpg" alt="logo" class="h-30 w-60" />
            </a>
         {{--    <a href="">Facebook</a>
            <a href="">Youtube</a>
            <a href="">Twiteer</a> --}}
        </div>

        <div class="flex items-center justify-center py-2 mb-3 border-b">
            <ul class="inline-flex items-center">

                <li class="px-2 md:px-4">
                    <a href="{{ route('showempresa', $busine ) }}" class="font-semibold text-purple-600 hover:text-purple-500"> Inicio </a>
                </li>
                <li class="px-2 md:px-4">
                    <a href="{{ route('aboutempresa', $busine ) }}" class="font-semibold text-gray-500 hover:text-purple-500"> Nosotros</a>
                </li>
                <li class="px-2 md:px-4">
                    <a href="{{ route('showempresa', $busine ) }}" class="font-semibold text-gray-500 hover:text-purple-500"> Productos </a>
                </li>
                <li class="px-2 md:px-4">
                    <a href="{{ route('contactempresa', $busine ) }}" class="font-semibold text-gray-500 hover:text-purple-500"> Contáctenos </a>
                </li>

            </ul>

        </div>


    </div>
