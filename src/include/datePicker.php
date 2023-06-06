<div class="flex justify-center items-center mx-5 w-1/2">
    <form action="index.php?action=getDate" method="post">
        <h2 class="text-2xl mb-5 text-center">Choississez vos dates</h2>
        <div class="flex items-center">
            <input id="startDateInput" class="datepicker bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            datepicker-format="d/m/Y" name="startDate" type="text" placeholder="Date de début">
            
            <span class="mx-4 text-gray-500">à</span>

            <input id="endDateInput" class="datepicker bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            datepicker-format="d/m/Y" name="endDate" type="text" placeholder="Date de fin">
        </div>
        <div class="flex justify-center mt-5">
            <button class="bg-blue-500 rounded-lg py-1 px-4 text-white" type="submit">Valider</button>
        </div>
    </form>
</div>