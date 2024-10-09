<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Font: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

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
                    'poppins': ['Poppins', 'sans-serif'], // Tambahkan Poppins
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
                    class="text-3xl font-bold leading-tight tracking-wide text-green-600 md:text-4xl text-center font-poppins">
                    Welcome To Keshipedia
                </h1>
                <form class="space-y-6" action="proses_login.php" method="post">
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
                    <!-- Button for Login as Staff -->
                    <a href="login_petugas.php"
                        class="w-full text-center block text-green-600 bg-gray-100 hover:bg-gray-200 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-green-500 dark:focus:ring-green-800 transition duration-300 ease-in-out transform hover:scale-105">
                        Log in sebagai Petugas
                    </a>
                </form>

                <!-- Sign Up Link moved to the bottom -->
                <p class="text-sm font-light text-gray-500 dark:text-gray-400 mt-4 text-center">
                    Don’t have an account? <a href="tambah_pelanggan.php"
                        class="font-medium text-green-600 hover:underline dark:text-green-500">Sign up</a>
                </p>
            </div>
        </div>
    </div>

    <!-- Optional Bootstrap JS (If needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>