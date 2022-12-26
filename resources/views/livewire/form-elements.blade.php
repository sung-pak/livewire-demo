<div class="mt-14 ml-12 p-6 pb-16 max-w-lg text-white border-2 border-slate-300 border-solid rounded-lg ">

  <div class="relative"> 
    <h1>T-shirt size</h1>
    <select wire:model="size" class="w-46 bg-slate-500 text-white {{$size=='select' ? 'text-slate-300' : ''}}">
      <option disabled value="select">Select a size</option> 
      <option value="none">None</option> 
      <option value="small">Small</option> 
      <option value="medium">Medium</option> 
      <option value="large">Large</option>
    </select>
    <div> Size: @json($size)</div> 
    <div class="absolute top-6 left-48 w-20">
      <button wire:click="resetIt('size')">
      Reset dropdown
      </button>
    </div>
  </div>

  <div class="relative top-8"> 
    <h1>Extra Swag</h1>
    <select wire:model="extras" multiple class="h-36 bg-slate-500"> 
      <option disabled value="select" class="text-slate-300">Shift + Select</option> 
      <option value="bag">Bag</option> 
      <option value="hat">Hat</option> 
      <option value="mug">Mug</option> 
      <option value="stickers">Stickers</option>
    </select>
    <div>Extras: @json($extras)</div>
    <div class="absolute top-6 left-48 w-20">
      <button wire:click="resetIt('extras')">
      Reset list
      </button>
    </div>
  </div>
</div>