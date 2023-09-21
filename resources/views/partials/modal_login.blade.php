<!-- Modal -->
<div data-te-modal-init
    class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
    id="modalLogin" tabindex="-1" aria-labelledby="modalLoginLabel" aria-hidden="true">
    <div data-te-modal-dialog-ref
        class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
        <div
            class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none ">

            <!--Modal body-->
            <div class="relative" data-te-modal-body-ref>
                <!-- component -->
                <div class="flex items-center">
                    <!-- Login Container -->
                    <div class="w-full flex-col border bg-white px-6 py-14 shadow-md rounded-[4px] ">
                        <div class="mb-8 flex justify-center">
                            <img class="w-24" src="{{ asset('assets/img/logo-undip.png') }}" alt="logo-undip" />
                        </div>
                        <form id="form-login" action="{{ route('login') }}" method="POST">
                            @csrf
                            <div id="loginError" class="hidden mb-2 ml-1.5 text-sm text-red-700">
                            </div>
                            <div class="flex flex-col text-sm rounded-md">
                                <input type="hidden" name="intended_url" id="intendedUrl">
                                <input
                                    class="mb-5 rounded-[4px] border p-3 hover:outline-none focus:outline-none hover:border-yellow-500 "
                                    type="text" name="username" placeholder="Username" required />
                                <input
                                    class="border rounded-[4px] p-3 hover:outline-none focus:outline-none hover:border-yellow-500"
                                    type="password" name="password" placeholder="Password" required />
                            </div>
                            <button
                                class="mt-7 w-full border p-2 bg-gradient-to-r from-gray-800 bg-gray-500 text-white rounded-[4px] hover:bg-slate-400 scale-105 duration-300"
                                type="submit">Masuk</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->