<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Petugas Page</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        darkMode: 'class',
        theme: {
            extend: {
                colors: {
                    primary: {
                        "50": "#e6f4ea",
                        "100": "#cce9d6",
                        "200": "#99d2ae",
                        "300": "#66bb85",
                        "400": "#33a45d",
                        "500": "#2e8b57",
                        "600": "#257346",
                        "700": "#1d5b36",
                        "800": "#144324",
                        "900": "#0d2c16"
                    },
                },
                fontFamily: {
                    'sans': ['Inter', 'system-ui', 'sans-serif'],
                    'custom': ['Poppins', 'Arial', 'sans-serif'],
                    /* Menambahkan font custom */
                }
            }
        }
    }
    </script>
</head>

<body
    class="bg-gradient-to-r from-green-500 via-green-600 to-green-700 dark:bg-gray-900 min-h-screen flex items-center justify-center">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div
            class="w-full bg-white rounded-lg shadow-lg dark:border dark:border-gray-700 sm:max-w-md xl:p-0 dark:bg-gray-800">
            <div class="p-6 space-y-6 sm:p-8">
                <h1
                    class="text-2xl font-bold leading-tight tracking-tight text-green-600 md:text-3xl font-custom text-center">
                    Welcome Worker Keshipedia
                </h1>
                <p class="text-sm font-medium text-gray-700 dark:text-gray-300 text-center">
                    Let's achieve great things together!
                </p>
                <form class="space-y-6" action="proses_login_petugas.php" method="post">
                    <div>
                        <label for="username"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                        <input type="text" name="username" id="username"
                            class="w-full p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Enter your username" required>
                    </div>
                    <div>
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password"
                            class="w-full p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                            placeholder="••••••••" required>
                    </div>
                    <div class="flex items-center justify-start">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox"
                                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:ring-offset-gray-800">
                            </div>
                            <label for="remember"
                                class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-300">Remember me</label>
                        </div>
                    </div>
                    <button type="submit" name="login" 
                        class="w-full text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-800 transition duration-300 ease-in-out transform hover:scale-105">
                        Log in
                    </button>

                    <!-- Sign Up Link moved to the bottom -->
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400 mt-4 text-center">
                        Don’t have an account? <a href="tambah_petugas.php"
                            class="font-medium text-green-600 hover:underline dark:text-green-500">Sign up</a>
                    </p>
            </div>
        </div>
    </div>

    <!-- Optional Bootstrap JS (If needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>