<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!--Tailwind -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
    <title>Panel admin</title>
</head>

<body class="bg-gray-100">
    <?php include('../include/navbar.php') ?>
    <!--TailwindElement -->
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <div class="flex justify-center m-4">
    <a href="../view/modifier.php" class="bg-blue-600 rounded text-white hover:text-gray-700 text-center p-3 justify-center">Ajouter un utilisateur</a>
    </div>
    <div>
        <div class="flex flex-col text-black">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-left text-sm font-light">
                            <thead class="border-b font-medium dark:border-neutral-500">
                                <tr>
                                    <th scope="col" class="px-6 py-4">id</th>
                                    <th scope="col" class="px-6 py-4">Email</th>
                                    <th scope="col" class="px-6 py-4">Nom</th>
                                    <th scope="col" class="px-6 py-4">Projet</th>
                                    <th scope="col" class="px-6 py-4 text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 hover:bg-neutral-300">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">1</td>
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">bjv@hvjhv</td>
                                    <td class="whitespace-nowrap px-6 py-4">Mark</td>
                                    <td class="whitespace-nowrap px-6 py-4">Otto</td>
                                    <td class="whitespace-nowrap px-6 py-4 text-center">
                                        <a href="../view/modifier.php" class="bg-green-500 rounded text-gray-900 hover:text-blue-700 text-center p-2">Modifier</a>

                                        <a href="#" class="bg-red-500 p-2 rounded text-gray-900 hover:text-red-700 text-center">Supprimer</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('../include/footer.php') ?>

</body>