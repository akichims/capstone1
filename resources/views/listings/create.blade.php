<x-layout>

<div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
                    <header class="text-center">
                        <h2 class="text-2xl font-bold uppercase mb-1">
                            Add a Pet
                        </h2>
                        <p class="mb-4">Add new adoptable pets</p>
                    </header>

                    <form method="POST" action="/listings" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label for="shelter_name" class="inline-block text-lg mb-2">Shelter Name</label>
                            <select class="form-select border border-gray-200 rounded p-2 w-full" name="shelter_name" id="shelter_name">
                                <option value="Philippine Animal Rescue Team">PART</option>
                                <option value="Eiji Chelle">Eiji Chelle</option>
                                <option value="Philippine Society for the Prevention of Cruelty to Animals">PSPCA</option>
                            </select>
                            @error('shelter_name')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="pet_type" class="inline-block text-lg mb-2">Pet Type</label>
                            <select class="form-select border border-gray-200 rounded p-2 w-full" name="pet_type" id="pet_type">
                                <option value="Cat">Cat</option>
                                <option value="Dog">Dog</option>
                            </select>
                            @error('pet_type')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="pet_name" class="inline-block text-lg mb-2">Pet Name</label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="pet_name" id="pet_name" placeholder="Example: Browney" value="{{old ('pet_name')}}"/>
                            @error('pet_name')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="pet_age" class="inline-block text-lg mb-2">Approximate Age</label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="pet_age" id="pet_age" placeholder="Example: 5 years old" value="{{old ('pet_age')}}"/>
                            @error('pet_age')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="pet_gender" class="inline-block text-lg mb-2">Gender</label>
                            <select type="text" class="border border-gray-200 rounded p-2 w-full" name="pet_gender" id="pet_gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            @error('pet_gender')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="tags" class="inline-block text-lg mb-2">
                                Tags (Comma Separated)
                            </label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags" id="tags" placeholder="Example: Dog, Black, Brown, etc." value="{{old ('tags')}}"/>
                            @error('tags')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="pet_image" class="inline-block text-lg mb-2">Picture</label>
                            <input type="file" class="border border-gray-200 rounded p-2 w-full" name="pet_image" id="pet_image" accept=".jpg, .jpeg, .png"/>
                            @error('pet_image')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="description" class="inline-block text-lg mb-2">Pet Description</label>
                            <textarea class="border border-gray-200 rounded p-2 w-full" name="description" id="description" rows="10" value="{{old ('description')}}"></textarea>
                            @error('description')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="pet_status" class="inline-block text-lg mb-2">Pet Status</label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="pet_status" id="pet_status" value="Adoptable" readonly/> 
                        </div>

                        <div class="mb-6">
                            <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">Add Pet</button>

                            <a href="/" class="text-black ml-4"> Back </a>
                        </div>
                    </form>
                </div>
</x-layout>