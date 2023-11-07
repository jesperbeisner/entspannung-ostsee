<footer class="w-full border-t shadow-sm bg-blue-50 text-center py-2">
    <nav class="mb-2">
        <ul class="flex justify-center gap-4 text-sm sm:text-base">
            <li><a href="/" class="link">Impressum</a></li>
            <li><a href="/" class="link">AGBs</a></li>
            <li><a href="/" class="link">Datenschutz</a></li>
        </ul>
    </nav>

    <p class="text-gray-600 text-xs">
        Copyright © <?= date('Y') ?> Iris Bohn
    </p>

    @if(app()->environment('local') === true)
        <nav class="mt-2">
            <ul class="flex justify-center gap-4 text-sm sm:text-base">
                <li><a href="/login" class="link">Login</a></li>
                <li><a href="/logout" class="link">Logout</a></li>
                <li><a href="/admin" class="link">Admin</a></li>
            </ul>
        </nav>
    @endif
</footer>
