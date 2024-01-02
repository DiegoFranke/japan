<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img src="/images/default-profile-banner.jpg"
                  alt=""
                  class="mb-2"
            >

            <img src="{{ $user->avatar }}"
                 alt=""
                 class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                 style="left: 50%"
                 width="150"
            >
        </div>

        <div class="flex justify-between items-center mb-6">
            <div style="max-width: 270px">
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <h2 class=" text-l mb-0">{{ $user->role }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @can ('edit', $user)
                    <a href="{{ $user->path('edit') }}"
                       class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2"
                    >
                        Edit Profile
                    </a>
                @endcan

                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>
        <h2 class="font-bold text-2xl mb-0">About </h2>
        <p class="text-sm mb-3">
            {{ $user->about }}
        </p>

        <h2 class="font-bold text-2xl mb-0">Skills</h2>
        <p class="text-sm mb-3">
            {{ $user->skills }}
        </p>

        <h2 class="font-bold text-2xl mb-0">Degree</h2>
        <p class="text-sm mb-3 ">
            {{ $user->degree }}
        </p>
        <h2 class="font-bold text-2xl mb-0">Age</h2>
        <p class="text-sm mb-3 ">
            {{ $user->age }}
        </p>

        <h2 class="font-bold text-2xl mb-0">Country</h2>
        <p class="text-sm mb-3 ">
            {{ $user->country }}
        </p>


        <h2 class="font-bold text-2xl mb-0">Contact</h2>
        <p class="text-sm mb-3 text-blue-700">
            {{ $user->email }}
        </p>

  <div id="errorPopup" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; background-color: rgba(0, 0, 0, 0.5);">
            <div style="background-color: white; padding: 20px; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                <h2 style="color: red;">Error!</h2>
                <p>An error has occurred. Please try again later.</p>
                <button onclick="closePopup()" style="margin-top: 10px; padding: 5px 10px; border: none; background-color: red; color: white; border-radius: 3px; cursor: pointer;">Close</button>
            </div>
        </div>





    </header>

    @include ('_timeline', [
        'tweets' => $tweets
    ])
</x-app>
