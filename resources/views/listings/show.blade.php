<x-layout>
@include('partials._search')

<a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back </a>
            <div class="mx-4">
                <div class="bg-gray-50 border border-gray-200 rounded p-10 ">
                    <div class="flex flex-col items-center justify-center text-center">
                        <img class="w-48 mr-6 mb-6" src="{{asset('images/no-image.png')}}" alt=""/>

                        <h3 class="text-2xl mb-2">{{$listing->pet_name}}</h3>
                        <div class="text-xl font-bold mb-4">{{$listing->shelter_name}}</div>

                        <x-listing-tags :tagsCsv="$listing->tags"/>
                            
                        <div class="text-lg my-4">
                            <i class="fa-solid fa-hourglass"></i> Approximate Age: {{$listing->pet_age}}
                        </div>
                        <div class="border border-gray-200 w-full mb-6"></div>
                        <div>
                            <h3 class="text-3xl font-bold mb-4"> Description </h3>
                            <div class="text-lg space-y-6">
                                
                                {{$listing->description}}
                                
                            </div>
                        </div>
                        <a href="mailto:test@test.com" class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80 p-10"><i class="fa-solid fa-envelope">
                        </i> Contact Shelter </a> <br>

                        <a href="https://test.com" target="_blank" class="block bg-black text-white py-2 rounded-xl hover:opacity-80 p-10"><i class="fa-solid fa-globe">
                        </i> Visit Website </a>
                    </div>
                </div>
            </div>
</x-layout>