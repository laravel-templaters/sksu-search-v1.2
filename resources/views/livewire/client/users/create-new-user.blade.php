<div class="p-5 mx-5 mt-5 bg-transparent rounded-lg">
    <form class="space-y-8 divide-y divide-primary-400">
        <div class="space-y-8 divide-y divide-primary-400 sm:space-y-5">
            <div>
                <h3 class="text-lg font-extrabold leading-6 tracking-widest text-gray-900 uppercase">
                    Personal Information
                </h3>
                <p class="max-w-2xl mt-1 text-sm text-gray-500">
                </p>
            </div>
            <div class="space-y-6 sm:space-y-5">
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-primary-400 sm:pt-5">
                    <label for="fname" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                        First Name
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <input wire:model="first_name" type="text" name="fname" id="fname" autocomplete="given-name"
                            class="block w-full max-w-lg rounded-md shadow-sm border-primary-400 focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                        @error('first_name')<span class="mt-2 text-red-700 error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-primary-400 sm:pt-5">
                    <label for="fname" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                        Middle Name
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <input wire:model="middle_name" type="text" name="fname" id="fname" autocomplete="given-name"
                            class="block w-full max-w-lg rounded-md shadow-sm border-primary-400 focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                            @error('middle_name')<span class="mt-2 text-red-700 error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-primary-400 sm:pt-5">
                    <label for="fname" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                        Last Name
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <input wire:model="last_name" type="text" name="fname" id="fname" autocomplete="given-name"
                            class="block w-full max-w-lg rounded-md shadow-sm border-primary-400 focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                            @error('last_name')<span class="mt-2 text-red-700 error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-primary-400 sm:pt-5">
                    <label for="suffix" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                        Suffix (if any)
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <input wire:model="suffix" type="text" name="suffix" id="suffix"
                            class="block w-full max-w-lg rounded-md shadow-sm border-primary-400 focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                            @error('suffix')<span class="mt-2 text-red-700 error">{{ $message }}</span>@enderror 
                    </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-primary-400 sm:pt-5">
                    <label for="email" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                        Email address
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <input wire:model="email" id="email" name="email" type="email" autocomplete="email"
                            class="block w-full max-w-lg rounded-md shadow-sm border-primary-400 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        @error('email')<span class="mt-2 text-red-700 error">{{ $message }}</span>@enderror 
                    </div>
                </div>
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-primary-400 sm:pt-5">
                    <label for="suffix" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                        Birthday
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <input wire:model="birthday" type="date" name="suffix" id="suffix"
                            class="block w-full max-w-lg rounded-md shadow-sm border-primary-400 focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                        @error('birthday')<span class="mt-2 text-red-700 error">{{ $message }}</span>@enderror 
                    </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-primary-400 sm:pt-5">
                    <label for="contact-no" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                        Contact Number
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <input wire:model="contact" type="tel" name="contact-no" id="contact-no"  pattern="[0-9]{4}-[0-9]{4}-[0-9]{3}"
                            class="block w-full max-w-lg rounded-md shadow-sm border-primary-400 focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                            <h1 class="text-sm text-secondary-500"><span class="tracking-widest"> Format ( " - " not required ): 0912-1234-123 </span> </h1>
                        @error('contact')<span class="mt-2 text-red-700 error">{{ $message }}</span>@enderror 
                    </div> 
                </div>
                
                {{-- <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-center sm:border-t sm:border-primary-400 sm:pt-5">
                    <label for="photo" class="block text-sm font-medium text-gray-700">
                      Photo
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                      <div class="flex items-center">
                        <span class="w-12 h-12 overflow-hidden bg-gray-100 rounded-full">
                          <svg class="w-full h-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                          </svg>
                        </span>
                        <button type="button" class="px-3 py-2 ml-5 text-sm font-medium leading-4 text-gray-700 bg-white border rounded-md shadow-sm border-primary-400 hover:bg-secondary-alt-400 hover:text-primary-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                          Change
                        </button>
                        
                      </div>
                    </div>
                </div> --}}

                    {{-- @if (Laravel\Jetstream\Jetstream::managesProfilePhotos()) --}}
          
        {{-- @endif --}}
                
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-primary-400 sm:pt-5">
                    <label for="department" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                        Department
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <select wire:model="department" id="department" name="department" autocomplete=""
                            class="block w-full max-w-lg rounded-md shadow-sm border-primary-400 focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                       @foreach ($departments as $dept)
                       <option value="{{ $dept->id }}">{{ $dept->department_name }}</option>
                       @endforeach
                           
                        </select>
                    </div>
                </div>
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-primary-400 sm:pt-5">
                    <label for="position" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                        Position
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <select wire:model="position" id="position" name="position" autocomplete="position"
                            class="block w-full max-w-lg rounded-md shadow-sm border-primary-400 focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                            @foreach ($positions as $post)
                            <option value="{{ $post->id }}">{{ $post->position_name }}</option>
                            @endforeach
                                
                        </select>
                    </div>
                </div>
</div>

<div class="pt-5">
    <div class="flex justify-end">
        <button type="button"
            class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border rounded-md shadow-sm border-primary-400 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Cancel
        </button>
        <button type="submit" wire:click.prevent="submit_user"
            class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white border border-transparent rounded-md shadow-sm bg-primary-500 hover:bg-green-400 hover:text-primary-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Save
        </button>
    </div>
</div>
</form>

</div>
