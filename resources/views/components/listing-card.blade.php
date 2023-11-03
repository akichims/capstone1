@props(['listing'])

<x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="{{asset('images/no-image.png')}}" alt=""/>
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{$listing->id}}">{{$listing->pet_name}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$listing->shelter_name}}</div>
                <x-listing-tags :tagsCsv="$listing->tags"/>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-hourglass"></i> Approximate Age: {{$listing->pet_age}}</div>
            </div>
         </div>

</x-card>