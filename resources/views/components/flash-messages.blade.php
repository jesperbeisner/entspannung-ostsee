@if (session()->has('success'))
    <section class="flash-message flex justify-center w-full mb-3 px-2">
        <div class="text-sm p-4 text-green-800 border border-green-300 rounded-lg bg-green-50 text-center w-full md:max-w-screen-md" role="alert">
            {{ session('success') }}
        </div>
    </section>
@endif

@if (session()->has('failure'))
    <section class="flash-message flex justify-center w-full mb-3 px-2">
        <div class="text-sm p-4 text-red-800 border border-red-300 rounded-lg bg-red-50 text-center w-full md:max-w-screen-md" role="alert">
            {{ session('failure') }}
        </div>
    </section>
@endif

@if(session()->has('success') || session()->has('failure'))
    <script>
        (function() {
            const flashMessages = document.querySelectorAll('.flash-message');

            flashMessages.forEach((flashMessage) => {
                setTimeout(() => {
                    flashMessage.remove();
                }, 5000);
            });
        })();
    </script>
@endif
