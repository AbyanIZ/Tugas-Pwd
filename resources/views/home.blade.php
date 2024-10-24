<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Streaming</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white ">
    <header class="max-w-full flex justify-center py-4 bg-white mb-5">
        <div class="flex justify-between items-center w-full max-w-full">
            <div class="text-2xl font-bold">cineNexis</div>
            <div class="flex items-center space-x-3">
                <input type="text" placeholder="Search..." class="p-2 text-black rounded-md w-72">
                <button class="p-2 bg-gray-700 text-white rounded-md">Search</button>

            </div>

            <button id="profil" class="">
                <a href="{{ url('/profile') }}">
                    <img src="{{('frofile.png') }}" alt="Profile Icon" class="w-10 h-10">
                </a>
            </button>

        </div>
    </header>

    <div class="container mx-auto max-w-7xl">
        <h1 class="text-center text-3xl mb-8">Film & Movie</h1>
        <div class="grid grid-cols-4 gap-5">
            <!-- Movie Item 1 -->
            <div class="bg-gray-800 rounded-lg overflow-hidden">
                <img src="Screenshot (184).png" alt="Movie Title 1" class="w-full h-52 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-bold mb-2">Movie DPS (Diluc Paling Sakit)</h2>
                    <p class="text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <p class="text-blue-400"><a href="#">13 Comments</a></p>
                </div>
            </div>

            <!-- Movie Item 2 -->
            <div class="bg-gray-800 rounded-lg overflow-hidden">
                <img src="cc97597cf30a5a68149ce56cbdd0db63.jpeg" alt="Movie Title 1" class="w-full h-52 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-bold mb-2">Movie Luwak Pink Cafe</h2>
                    <p class="text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <p class="text-blue-400"><a href="#">13 Comments</a></p>
                </div>
            </div>

            <!-- Movie Item 3 -->
            <div class="bg-gray-800 rounded-lg overflow-hidden">
                <img src="Screenshot (177).png" alt="Movie Title 3" class="w-full h-52 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-bold mb-2">Movie Bapak Arlecino</h2>
                    <p class="text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <p class="text-blue-400"><a href="#">5 Comments</a></p>
                </div>
            </div>

            <!-- Movie Item 4 -->
            <div class="bg-gray-800 rounded-lg overflow-hidden">
                <img src="Screenshot (184).png" alt="Movie Title 1" class="w-full h-52 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-bold mb-2">Movie DPS (Diluc Paling Sakit)</h2>
                    <p class="text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <p class="text-blue-400"><a href="#">13 Comments</a></p>
                </div>
            </div>

            <!-- Tambahan item lainnya mengikuti pola yang sama -->
        </div>
    </div>

    <div class="container mx-auto max-w-7xl mt-8">
        <h1 class="text-center text-3xl mb-8">Suggested The World</h1>
        <div class="grid grid-cols-4 gap-5">
            <!-- Movie Item Suggested 1 -->
            <div class="bg-gray-800 rounded-lg overflow-hidden">
                <img src="cc97597cf30a5a68149ce56cbdd0db63.jpeg" alt="Movie Title 1" class="w-full h-52 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-bold mb-2">Movie Luwak Pink Cafe</h2>
                    <p class="text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <div class="flex space-x-2">
                        <button class="bg-blue-500 text-white px-4 py-2 rounded-md">TRAILER</button>
                        <button class="bg-green-500 text-white px-4 py-2 rounded-md">VIEW FILM</button>
                    </div>
                </div>
            </div>

            <!-- Movie Item Suggested 2 -->
            <div class="bg-gray-800 rounded-lg overflow-hidden">
                <img src="Screenshot (185).png" alt="Movie Title 1" class="w-full h-52 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-bold mb-2">Film Kucing Liar</h2>
                    <p class="text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <div class="flex space-x-2">
                        <button class="bg-blue-500 text-white px-4 py-2 rounded-md">TRAILER</button>
                        <button class="bg-green-500 text-white px-4 py-2 rounded-md">VIEW FILM</button>
                    </div>
                </div>
            </div>
            <div class="bg-gray-800 rounded-lg overflow-hidden">
                <img src="Screenshot (185).png" alt="Movie Title 1" class="w-full h-52 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-bold mb-2">Film Kucing Liar</h2>
                    <p class="text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <div class="flex space-x-2">
                        <button class="bg-blue-500 text-white px-4 py-2 rounded-md">TRAILER</button>
                        <button class="bg-green-500 text-white px-4 py-2 rounded-md">VIEW FILM</button>
                    </div>
                </div>
            </div>
            <!-- Tambahkan item lainnya sesuai kebutuhan -->
        </div>
    </div>
</body>
</html>
