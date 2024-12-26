<button class="mb-4 rounded-lg bg-blue-600 p-2 text-white lg:hidden" onclick="toggleSidebar()" aria-label="Open Sidebar">
    <i class="fas fa-bars"></i>
</button>

<div class="mb-6 flex flex-col items-center justify-between lg:flex-row">
    <input type="text" placeholder="Rechercher" class="w-full rounded-lg border border-gray-300 p-2 lg:w-1/3" />
    <div class="flex items-center space-x-4">
        <a href="{{ route('profile.edit') }}" class="mt-4 flex items-center space-x-4 lg:mt-0">
            <div class="flex items-center space-x-2">
                <img src="{{ $currentUser->image ? $currentUser->imageUrl() : 'https://via.placeholder.com/150' }}"
                    alt="Profile" class="h-10 w-10 rounded-full" />
                <div>
                    <h3 class="text-gray-800">{{ $currentUser->firstName }} {{ $currentUser->lastName }}</h3>
                    <p class="text-sm text-gray-500">{{ $currentUser->email }}</p>
                </div>
            </div>
        </a>
        @if ($currentUser->role != 'admin')
            <span class="rounded-lg bg-yellow-800 p-2 text-sm text-white">{{ $activeSubscription->plan->name }}</span>
        @endif
    </div>
</div>
