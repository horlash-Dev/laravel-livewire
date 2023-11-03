
<div>
    show user

    {{$user}}

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                <form action="" wire:submit="storeUser({{$user->id}})" method="post">
            <strong class="" x-on:live-save.window="alert($event)" >
                
            </strong>
            <div class="mb-4">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input wire:model="name" id="name" name="name" type="text" class="mt-1 block w-full" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div class="mb-4">
            <x-input-label for="name" :value="__('phone')" />
            <x-text-input wire:model.blur="phone" id="phone" name="phone" type="text" class="mt-1 block w-full"/>
            <x-input-error class="mt-2" :messages="$errors->get('phone')" />
        </div>

        <div class="mb-4">
            <x-input-label for="name" :value="__('address')" />
            <x-text-input wire:model.blur="address" id="address" name="address" type="text" class="mt-1 block w-full"/>
            <x-input-error class="mt-2" :messages="$errors->get('address')" />
        </div>


        <div class="mb-4">
            <x-input-label for="name" :value="__('date of birth')" />
            <x-text-input wire:model.blur="dob" id="dob" type="date" class="mt-1 block w-full"/>
            <x-input-error class="mt-2" :messages="$errors->get('dob')" />
        </div>
        
        <div class="row">

        <div class="mb-4 col">
            <x-input-label for="name" :value="__('country')" />
            <select wire:model="country" wire:click="getCountries"   id="" class=" rounded-lg shadow-sm">
                <option  disabled>select a county</option>
               
                    @foreach($countries as $val)
            
                    <option value="{{$val['name']}}">{{$val['name']}} </option>
                    @endforeach
                
            </select>
            
            <x-input-error class="mt-2" :messages="$errors->get('country')" />
            <div class="mb-4 col">
               
            <x-input-label for="name" :value="__('gender')" />
            
            <input wire:model="gender" id="ml"  value="male" class=" rounded-lg shadow-sm" type="radio" class="mt-1 block w-full"/>
            <x-input-label for="name" :value="__('male')" />
            <input wire:model="gender" id="fl" type="radio" value="female" class=" rounded-lg shadow-sm" class="mt-1 block w-full"/>
            <x-input-error class="mt-2" :messages="$errors->get('gender')" />
            <x-input-label for="name" :value="__('female')" />
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

<script>
    document.addEventListener('livewire:initialized', () => {
       @this.on('live-save', (event) => {
           console.log('done!!',event.message)
           
       });
    });
</script>