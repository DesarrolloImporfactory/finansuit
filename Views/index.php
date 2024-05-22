<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-[#171931] min-h-screen  grid text-center place-content-center">
    <div class="bg-white py-3 w-[400px] px-5">
        <span class="shadow text-xl">
            Ingresar
        </span>
        <form id="loginForm" class="mt-4">
            <input type="text" name="username" placeholder="Usuario" class="w-full p-2 rounded border border-gray-300 mb-2" required>
            <input type="password" name="password" placeholder="Contraseña" class="w-full p-2 rounded border border-gray-300 mb-2" required>
            <button type="submit" class="w-full p-2 bg-[#171931] text-white rounded">Ingresar</button>
        </form>
        <hr class="bg-[#171931] py-[1px] my-3">
        <a href="#" class="text-blue-500">¿Olvidaste tu contraseña?</a>
    </div>
    <script>
        $("#loginForm").submit(function(e) {
            e.preventDefault();
            let nombre = $("input[name='username']").val();
            let password = $("input[name='password']").val();
            $.ajax({
                url: "<?php echo BASE_URL ?>/Admin/login",
                type: "POST",
                data: {
                    username: nombre,
                    password: password

                },
                success: function(response) {
                    console.log(response);
                }
            })
        })
    </script>

</body>



</html>