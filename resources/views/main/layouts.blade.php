<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <nav class="bg-indigo-400">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
        <a href="" class="flex items-center">
            <img class="h-8 mr-3" src="https://images.vexels.com/media/users/3/137632/isolated/preview/c7915d9b389bd7b3764fb11445b53bba-simple-infinity-logo-infinite.png" alt="vaxels logo">
            <span class="self-center text-2xl font-semibold text-white">Vaxels</span>
        </a>
        <div class="items-center justify-between ">
            <ul class="flex flex-row p-4">
                <li>
                    <a href="/home" class="text-l p-4 font-semibold text-white hover:text-indigo-900">
                        Home
                    </a>
                </li>
                <li>
                    <a href="/idea" class="text-l p-4 font-semibold text-white hover:text-indigo-900">
                        Idea
                    </a>
                </li>
                <li>
                    <a href="/akun" class="text-l p-4 font-semibold text-white hover:text-indigo-900">
                        Account
                    </a>
                </li>
                <li>
                    <a href="/about" class="text-l p-4 font-semibold text-white hover:text-indigo-900">
                        About
                    </a>
                </li>
            </ul>
        </div>
    </div>
  </nav>
  <div class="container-fluid">
    @yield('container')
</div>
</body>
</html>