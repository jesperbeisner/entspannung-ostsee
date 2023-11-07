<footer class="w-full border-t border-blue-200 bg-blue-50 text-center py-2 shadow-[0_-5px_6px_-1px_rgba(0,0,0,0.1)]">
    <nav class="mb-2">
        <ul class="flex justify-center gap-4 text-sm sm:text-base">
            <li><a href="{{ route('imprint') }}" class="link">Impressum</a></li>
            <li><a href="{{ route('agbs') }}" class="link">AGBs</a></li>
            <li><a href="{{ route('data-protection') }}" class="link">Datenschutz</a></li>
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
