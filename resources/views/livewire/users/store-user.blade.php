<div>
   <div class="card p-4 text-center shadow-lg mt-4">
    create form
   </div>

   <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                <form action="" wire:submit="save" method="post">
            <strong class="" x-on:live-save.window="alert($event)" >
                
            </strong>
            <div class="mb-4">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input wire:model="form.name" id="name" name="name" type="text" class="mt-1 block w-full" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('form.name')" />
        </div>

        <div class="mb-4">
            <x-input-label for="name" :value="__('email')" />
            <x-text-input wire:model.blur="form.email" id="email" email="email" type="text" class="mt-1 block w-full" required  />
            <x-input-error class="mt-2" :messages="$errors->get('form.email')" />
        </div>

        <div class="mb-4">
            <x-input-label for="name" :value="__('phone')" />
            <x-text-input wire:model.blur="form.phone" id="phone" name="phone" type="text" class="mt-1 block w-full"/>
            <x-input-error class="mt-2" :messages="$errors->get('form.phone')" />
        </div>

        <div class="mb-4">
            <x-input-label for="name" :value="__('address')" />
            <x-text-input wire:model.blur="form.address" id="address" name="address" type="text" class="mt-1 block w-full"/>
            <x-input-error class="mt-2" :messages="$errors->get('form.address')" />
        </div>


        <div class="mb-4">
            <x-input-label for="name" :value="__('date of birth')" />
            <x-text-input wire:model.blur="form.dob" id="dob" type="date" class="mt-1 block w-full"/>
            <x-input-error class="mt-2" :messages="$errors->get('form.dob')" />
        </div>
        
        <div class="row">

        <div class="mb-4 col">
            <x-input-label for="name" :value="__('country')" />
            <select wire:model="form.country" wire:click="getCountries"   id="" class=" rounded-lg shadow-sm">
                <option  disabled>select a county</option>
               
                    @foreach($countries as $val)
            
                    <option value="{{$val['name']}}">{{$val['name']}} </option>
                    @endforeach
                
            </select>
            
            <x-input-error class="mt-2" :messages="$errors->get('form.country')" />
            <div class="mb-4 col">
               
            <x-input-label for="name" :value="__('gender')" />
            
            <input wire:model="form.gender" id="ml"  value="male" class=" rounded-lg shadow-sm" type="radio" class="mt-1 block w-full"/>
            <x-input-label for="name" :value="__('male')" />
            <input wire:model="form.gender" id="fl" type="radio" value="female" class=" rounded-lg shadow-sm" class="mt-1 block w-full"/>
            <x-input-error class="mt-2" :messages="$errors->get('form.gender')" />
            <x-input-label for="name" :value="__('female')" />
            </div>

                    <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input wire:model.blur="form.password" id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input wire:model.blur="form.password_confirmation" id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('form.password_confirmation')" class="mt-2" />
        </div>

        </div>
        </div>
        <x-text-input  type="submit" class="mt-4 bg-gray-800 text-white w-full p-4"/>
        
        <span wire:loading>Saving...</span>



                </form>
                </div>
            </div>
        </div>
    </div>
</div>
