<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Alert Angel</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen flex flex-col">

  <!-- Navbar -->
  <header class="bg-white shadow-md">
    <div class="container mx-auto flex justify-between items-center p-4">
      <!-- Left: Alert Angel Text -->
      <h1 class="text-2xl font-bold text-blue-600">Alert Angel</h1>

      <!-- Right: Location Button -->
      <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Location</button>
    </div>
  </header>

  <!-- Main Content -->
  <main class="flex-grow flex flex-col justify-center items-center text-center relative">

    <!-- 2x2 Buttons around SOS -->
    <div class="grid grid-cols-2 gap-20 relative z-10">
      <button class="bg-blue-500 text-white px-8 py-6 rounded-lg text-lg font-semibold hover:bg-blue-600 transition"><a href="safty.php">safty tips</a></button>
      <button class="bg-blue-500 text-white px-8 py-6 rounded-lg text-lg font-semibold hover:bg-blue-600 transition"><a href="call.php">contacts</a></button>
      <button class="bg-blue-500 text-white px-8 py-6 rounded-lg text-lg font-semibold hover:bg-blue-600 transition"><a href="police.php">nearby police</a></button>
      <button class="bg-blue-500 text-white px-8 py-6 rounded-lg text-lg font-semibold hover:bg-blue-600 transition"><a href="about.php">about us</a></button>
    </div>

    <!-- SOS Button in the absolute center of grid -->
    <div class="absolute">
      <button class="bg-red-600 text-white text-3xl font-bold w-36 h-36 rounded-full shadow-xl hover:bg-red-700 transition animate-pulse">
        SOS
      </button>
    </div>

  </main>

  <!-- Footer -->
  <footer class="bg-white shadow-inner mt-8">
    <div class="container mx-auto p-6 text-center text-gray-500 text-sm">
      © 2025 Alert Angel. All rights reserved.
    </div>
  </footer>

</body>
</html>
