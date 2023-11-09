<x-layout>
    <x-slot:title>Neuer Blog Post</x-slot:title>

    <div class="flex justify-center items-center w-full md:mt-3">
        <div class="w-full bg-white p-5 rounded-lg shadow border max-w-screen-md">
            <form method="POST" action="{{ route('blog.store') }}">
                @csrf

                <div class="mb-5">
                    <x-form.input type="text" id="title" description="Titel"/>
                </div>

                <div class="mb-5">
                    <x-form.input type="text" id="slug" description="Slug"/>
                </div>

                <div>
                    <x-form.button-primary type="submit" id="create" description="Post Erstellen"/>
                </div>
            </form>
        </div>
    </div>
</x-layout>
