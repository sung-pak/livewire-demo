
<div class="mt-20 ml-20">
  <form wire:submit.prevent="register" class="inline-block bg-gray-300 shadow-md rounded px-8 pt-6 pb-8 mb-4 max-w-lg">
    <div wire:model="title">{{$title}}</div> <br>
    <div class="mb-4 inline-block">
      <label for="name" class="w-28 inline-block">name</label>
      <input wire:model="name" type="text" id="name" name="name" class="w-80 py-2 px-3">
      @error('name') <span>{{ $message }}</span>@enderror
    </div>
    <div class="mb-4 inline-block">
      <label for="email" class="w-28 inline-block">email</label>
      <input wire:model="email" type="text" id="email" name="email" class="w-80 py-2 px-3">
      @error('email') <span>{{ $message }}</span>@enderror
    </div>
    <div class="mb-4 inline-block">
      <label for="password" class="w-28 inline-block">password</label>
      <input wire:model="password" type="text" id="password" name="password" class="w-80 py-2 px-3">
      @error('password') <span>{{ $message }}</span>@enderror
    </div>
    {{-- <div class="mb-4 inline-block">
      <label for="passwordConfirmation">password confirmation</label>
      <input wire:model="passwordConfirmation" type="password" id="passwordConfirmation" name="passwordConfirmation">
    </div> --}}
    <div>
      <input type="submit" value="Register" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
    </div>
  </form>
</div>