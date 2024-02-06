<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>


</head>
<body>

    {{-- <div class="container p-3 w-full">
        <div>
            @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div> --}}

        <form method="post" action="{{ route('liste.store') }}" class="mx-auto max-w-md bg-white p-6 rounded-md shadow-md">
            @csrf
            @method('post')

            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-bold mb-2">Titre:</label>
                <input type="text" name="title" id="title" class="border border-gray-300 p-2 w-full focus:outline-none focus:border-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
                <textarea name="description" id="description" class="border border-gray-300 p-2 w-full resize-none focus:outline-none focus:border-blue-500" required></textarea>
            </div>

            <div class="mb-4">
                <label for="category" class="block text-gray-700 font-bold mb-2">Catégorie:</label>
                <input name="category" id="category" class="border border-gray-300 p-2 w-full focus:outline-none focus:border-blue-500" required>
                   
            </div>

        

            <div class="mb-4">
                <label for="cout" class="block text-gray-700 font-bold mb-2">Cout</label>
                <input type="text" name="cout" id="cout" class="border border-gray-300 p-2 w-full focus:outline-none focus:border-blue-500" required>
            </div>

           

            <button type="submit" class="bg-blue-800 text-white p-2 rounded ">Ajouter le Service</button>
        </form>
    </div>
</body>
</html>