<div x-data="{isLegacy:true}" class="block min-w-full">
   <div class="flex">
      <input type="checkbox" name="legacy" id="legacy" x-on:click="isLegacy=!isLegacy" class="my-auto rounded-md" checked> <label class="my-auto ml-1" for="legacy">Legacy Document</label>
   </div>
   <div x-show="isLegacy" class="block w-full">
      {{-- @livewire('archiver.pages.new-legacy-document', ['folder' => $folder, 'drawer' => $drawer,'shelf' => $shelf,'building' => $building,]) --}}
      @livewire('archiver.pages.new-legacy-document')
   </div>
</div>
