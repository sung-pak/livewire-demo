
<div class="mt-14 ml-12">
  <form wire:submit.prevent="registerio" class="inline-block bg-gray-300 shadow-md rounded px-8 pt-6 pb-8 mb-4 max-w-lg">
    <div wire:model="title">{{$title}}</div>

    <div class="my-6 mb-8"><!-- radio buttons -->
      <p>Smoker:</p>
      <label>  
        <input type="radio" wire:model="smoker" value="no"/>
        No
      </label>
      <label>  
        <input type="radio" wire:model="smoker" value="yes"/>
        Yes
      </label>
    </div>

    <div class="my-6 mb-8"><!-- radio buttons -->
      <p>Disabled:</p>
      <label>  
        <input type="radio" wire:model="disability" value="no"/>
        No
      </label>
      <label>  
        <input type="radio" wire:model="disability" value="yes"/>
        Yes
      </label>
    </div>

    <div class="my-6 mb-8"><!-- checkboxes -->
      <p>Check all that aplies:</p>
      <div class="">
        <label class="pr-7">
          <input wire:model="identity" value="female" type="checkbox" />
          Female 
        </label>
        <label class="pr-7">
          <input wire:model="identity" value="male" type="checkbox" />
          Male 
        </label>
        <label class="pr-7">
          <input wire:model="identity" value="intersex" type="checkbox" />
          Intersex 
        </label>
        <label class="pr-7">
          <input wire:model="identity" value="trans" type="checkbox" />
          Trans 
        </label>
        <label class="pr-7">
          <input wire:model="identity" value="non-conforming" type="checkbox" />
          Non-Conforming 
        </label>
        <label class="pr-7">
          <input wire:model="identity" value="personal" type="checkbox" />
         Personal 
        </label>
        <label class="">
          <input wire:model="identity" value="eunuch" type="checkbox" />
          Eunuch 
        </label>
      </div>
    </div>

    <div class="mb-4 inline-block">
      <label for="name" class="w-28 inline-block">name</label>
      <input wire:model="name" type="text" id="name" class="w-80 py-2 px-3">
      @error('name') <span class="text-red-500">{{ $message }}</span>@enderror
    </div>
    <div class="mb-4 inline-block">
      <label for="email" class="w-28 inline-block">email</label>
      <input wire:model="email" type="text" id="email" class="w-80 py-2 px-3">
      @error('email') <span class="text-red-500">{{ $message }}</span>@enderror
    </div>
    <div class="mb-4 inline-block">
      <label for="password" class="w-28 inline-block">password</label>
      <input wire:model="password" type="password" id="password" class="w-80 py-2 px-3">
      @error('password') <span class="text-red-500">{{ $message }}</span>@enderror
    </div>
    {{-- <div class="mb-4 inline-block">
      <label for="passwordConfirmation">password confirmation</label>
      <input wire:model="passwordConfirmation" type="password" id="passwordConfirmation">
    </div> --}}

    <div>
      <input type="submit" value="Register" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
    </div>

  </form>
</div>
