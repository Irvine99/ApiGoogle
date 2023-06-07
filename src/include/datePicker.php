<div class="flex justify-center items-center md:mx-5 lg:w-2/5 mt-7">
    <form action="index.php?action=getDate" method="post">
        <h2 class="text-2xl mb-5 text-center">Choississez vos dates</h2>
        <div class="flex flex-col md:flex-row items-center m-auto w-[300px] md:w-auto ">
            <input id="startDateInput" class="datepicker bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5"
            datepicker-format="d/m/Y" name="startDate" type="text" placeholder="Date de début">
            
            <span class="my-3 md:my-auto mx-4 text-gray-500">à</span>

            <input id="endDateInput" class="datepicker bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5"
            datepicker-format="d/m/Y" name="endDate" type="text" placeholder="Date de fin">
        </div>
        <div class="flex justify-center mt-5">
            <button class="bg-blue-600 rounded-lg py-1 px-4 text-white" type="submit">Valider</button>
        </div>
    </form>
</div>