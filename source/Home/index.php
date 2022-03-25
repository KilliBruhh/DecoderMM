<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/dist/output.css" rel="stylesheet">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
</head>
<!-- TODO: Add custom colors (not working) -->
<body class="h-screen bg-black text-green-400" >
    <div class="border-2 border-green-900 w-2/4 h-64 mx-auto mt-40">
        <div class="border-2 border-green-900 w-2/5 mx-auto border-t-0 h-10 text-center font-bold">
            DECODER DELUXE
        </div>
        <table class="mx-auto mt-6">
            <form method="POST">
                <tr>
                    <td class="text-center">ENTER CODE:</td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="code" class="border-2 border-green-900 bg-transparent">
                    </td>
                </tr>
            </form>
        </table>
    </div>
</body>
</html>