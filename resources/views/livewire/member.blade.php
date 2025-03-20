<div>
    <section class="min-h-screen items-start w-full p-6 md:p-20">

        <div class="flex flex-row gap-2 items-center mb-4 p-1">
            <h1 class="text-4xl font-extrabold capitalize">Our</h1>
            <h1 class="text-4xl font-extrabold capitalize text-orange-400/90">Members</h1>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4 mt-14">
            @php
                $members = [
                    ['name' => 'Robert Brown'],
                    ['name' => 'Leslie Livingston'],
                    ['name' => 'Joseph McFall'],
                    ['name' => 'Helene Engels'],

                ];
            @endphp
            @foreach(range(1, 6) as $i)
                @foreach($members as $member)
                    <div class="relative w-50 h-35 rounded-xl overflow-hidden">
                        <img src="{{ Vite::asset('resources/images/t4.png') }}" class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black opacity-50"></div>
                        <p class="absolute bottom-2 left-2 text-white font-bold text-sm">{{ $member['name'] }}</p>
                    </div>
                @endforeach
            @endforeach
        </div>

    </section>

</div>
