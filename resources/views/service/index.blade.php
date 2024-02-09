<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HireME</title>
    

    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
   

</head>
<body class="bg-white font-family-karla">

    <!-- Top Bar Nav -->
    <nav class="w-full py-4 bg-blue-800 shadow">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between">

            <nav>
                <ul class="flex items-center justify-between font-bold text-sm text-white uppercase no-underline">
                    <li><a class="hover:text-gray-200 hover:underline px-4" href="#">HireME</a></li>
                </ul>
            </nav>

         
        </div>

    </nav>

    <!-- Text Header -->
    <header class="w-full container mx-auto">
        <div class="flex flex-col items-center py-12">
            <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="#">
                HireME
            </a>
            
        </div>
    </header>

    

        <div class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2">
            <a href="service/create" class="hover:bg-gray-600 rounded py-2 px-4 mx-2">Ajouter un poste</a>
        </div>

    <div class="container mx-auto flex flex-wrap py-6">

      @foreach ($services as $service)
          
      <article class="flex flex-col shadow my-4 h-64 w-full">
        <div class="bg-white flex flex-col justify-start p-6">
            <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">{{ $service->category }}</a>
            <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">{{ $service->title }}</a>
            <p href="#" class="text-sm pb-3">
                By <a href="#" class="font-semibold hover:text-gray-800">{{ $service->description }}</a>,
                Published on {{ $service->cout }}
            </p>
        </div>
    </article>
        @endforeach

        </section>

        <!-- Sidebar Section -->
        <aside class="w-full  flex flex-col items-center px-3">

            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">About Us</p>
                <p class="pb-2">HireME Services" est votre partenaire de confiance pour tous vos besoins en matière de travaux domiciliaires. Nous sommes une entreprise spécialisée dans les services de jardinage, de plomberie, d'électricité, de menuiserie et bien plus encore. Notre équipe expérimentée de professionnels qualifiés est déterminée à offrir des solutions complètes et fiables pour rendre votre maison aussi confortable et fonctionnelle que possible.</p>
               
            </div>

            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">Instagram</p>
             
                <a href="#" class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-6">
                    <i class="fab fa-instagram mr-2"></i> Follow @hireme_ma
                </a>
            </div>

        </aside>

    </div>

    <footer class="w-full border-t bg-white pb-12">
    
        <div class="w-full container mx-auto flex flex-col items-center">
            <div class="flex flex-col md:flex-row text-center md:text-left md:justify-between py-6">
                <a href="#" class="uppercase px-3">About Us</a>
                <a href="#" class="uppercase px-3">Privacy Policy</a>
                <a href="#" class="uppercase px-3">Terms & Conditions</a>
                <a href="#" class="uppercase px-3">Contact Us</a>
            </div>
            <div class="uppercase pb-6">&copy; hireme.com</div>
        </div>
    </footer> 

</body>
</html>