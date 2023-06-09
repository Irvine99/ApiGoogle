
<div class="m-5 flex flex-col bg-gray-100 py-2 rounded-lg w-auto md:w-1/2 drop-shadow-xl w-[20%]">
    <h1 class="m-5 text-black-500">Selectionnez une date</h1>
    <form action="index.php?action=getDate" method="post">
        <div id="datepicker-disable-future" class="relative m-3 "   >
            <input type="text"
                name="startDate"
                id="startDate"
                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                placeholder="Select a date"  />
            <label for="floatingInput"
                class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none">Date de début</label>
        </div>
        <div class="relative m-3" data-te-datepicker-init data-te-input-wrapper-init  >
            <input type="text"
                name="endDate"
                id="endDate"
                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                placeholder="Select a date" data-te-datepicker-toggle-ref data-te-datepicker-toggle-button-ref />
            <label for="floatingInput"
                class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none">Date de Fin</label>
        </div>
        <div class="flex justify-center mt-3">
        <button class="py-1 px-2 bg-blue-500 rounded-lg text-white" type="submit">Envoyer</button>
        </div>
    </form>
</div>


