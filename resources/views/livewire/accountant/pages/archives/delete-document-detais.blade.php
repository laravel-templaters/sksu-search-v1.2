<div class="w-full h-screen min-w-full px-4 mx-auto max-w-screen">
    <div class="container mx-auto my-4">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="min-w-full py-2 align-middle sm:px-6 lg:px-8 ">
                    <div class="overflow-hidden border-b border-gray-200 shadow-md shadow-primary-500/50 sm:rounded-lg bg-gray-50 ">
                        <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                            <div class="sticky top-0 px-4 py-5 sm:px-6">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Document Information</h3>
                                <p class="max-w-2xl mt-1 text-sm text-gray-500">@if ($islegacy)
                                   Legacy Document Details
                                @endif</p>
                                {{-- delete button --}}
                                <div x-data="{ open: false }" class="flex items-center justify-end">
                                    <span class="inline-flex rounded-md shadow-sm">
                                        <button wire:click.debounce.200ms="showValidate" x-on:click="open = ! open" type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:shadow-outline-red focus:border-red-700 active:bg-red-700 transition duration-150 ease-in-out">
                                           <svg xmlns="http://www.w3.org/2000/svg" class="inline w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            Delete Document
                                        </button>
                                    </span>

<div class="fixed {{$isValidCode ? '' : 'hidden'}} bg-opacity-95 inset-0 w-full h-full z-50 flex bg-primary-700 items-center justify-center">
    <div  class="bg-primary-200 rounded-lg shadow p-4" x-data="app()">
        <div class="font-bold px-2 pb-1 text-xl">Enter pin code</div>
        <div class="font-normal px-2 pb-2 text-sm">Deleting this document need extra security</div>
        <div class="flex">
            <template x-for="(l,i) in pinlength" :key="`codefield_${i}`">
                <input :autofocus="i == 0" :id="`codefield_${i}`" class="h-16 w-12 border mx-2 rounded-lg flex items-center text-center font-thin text-3xl" value="" maxlength="1" max="9" min="0" inputmode="decimal" type="password" @keyup="stepForward(i)" @keydown.backspace="stepBack(i)" @focus="resetValue(i)" wire:model="code"></input>
            </template>
        </div>
        {{-- add button --}}
        <div class="flex justify-center mt-4">
            <button id="confirmCode" disabled class="bg-primary-500 text-white font-bold py-2 px-4 rounded-lg" wire:click="validateCode">
                Confirm
            </button>
    </div>
</div>
   </div>
                                                        {{-- modal --}}
                    <!-- This example requires Tailwind CSS v2.0+ -->
<div  x-cloak {{$isValid ? '' : 'hidden'}} class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
  <!--
    Background backdrop, show/hide based on modal state.

    Entering: "ease-out duration-300"
      From: "opacity-0"
      To: "opacity-100"
    Leaving: "ease-in duration-200"
      From: "opacity-100"
      To: "opacity-0"
  -->
  <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

  <div class="fixed z-10 inset-0 overflow-y-auto">
    <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0">
      <!--
        Modal panel, show/hide based on modal state.

        Entering: "ease-out duration-300"
          From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
          To: "opacity-100 translate-y-0 sm:scale-100"
        Leaving: "ease-in duration-200"
          From: "opacity-100 translate-y-0 sm:scale-100"
          To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
      -->
      <div class="relative bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-lg sm:w-full">
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
          <div class="sm:flex sm:items-start">
            <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
              <!-- Heroicon name: outline/exclamation -->
              <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
              </svg>
            </div>
            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
              <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Delete Document</h3>
              <div class="mt-2">
                <p class="text-sm text-gray-500">Are you sure you want to delete this document? This will be permanently removed. This action cannot be undone.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
          <button type="button" wire:click="deleteDocument" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">Delete</button>
          <button wire:click="closeModal" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" >Cancel</button>
        </div>
      </div>
    </div>
  </div>
</div>
 {{-- modal end --}} 
   



                                    </div>
                            </div>
                            @if ($islegacy)
                              <div class="px-4 py-5 border-t border-gray-200 sm:p-0">
                                 <dl class="sm:divide-y sm:divide-gray-200">
                                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                       <dt class="text-sm font-medium text-gray-500">Document Name</dt>
                                       <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $document->name }}</dd>
                                    </div>
                                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                       <dt class="text-sm font-medium text-gray-500">Document Code</dt>
                                       <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"> {{ $document->document_code }}</dd>
                                     
                                    </div>

                                     <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                       <dt class="text-sm font-medium text-gray-500">Payee Name</dt>
                                       <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"> {{$document->payee_name }}</dd>
                                     
                                    </div>

                                     <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                       <dt class="text-sm font-medium text-gray-500">Particular</dt>
                                          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                             <p class="whitespace-pre">
                                             {{ $document->particulars}}</p>
                                          </dd>
                                    </div>

                                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                       <dt class="text-sm font-medium text-gray-500">Archive Date</dt>
                                       <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"> {{ date('F d, Y', strtotime($document->date)) }}</dd>
                                      
                                    </div>
                                    
                                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                       <dt class="text-sm font-medium text-gray-500">Document Location <br/>( Building / Shelf / Drawer / Folder )</dt>
                                       <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $document->building->building_name }} / {{ $document->shelf->shelf_name }} / {{ $document->drawer->drawer_name }} / {{ $document->folder->folder_name }}</dd>
                                       
                                    </div>
                                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                       <dt class="text-sm font-medium text-gray-500">Upload Date</dt>
                                       <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $document->created_at->format('F d, Y') }}</dd>
                                    </div>
                                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                       <dt class="text-sm font-medium text-gray-500">Attachments</dt>
                                       <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                             <ul role="list"
                                                class="border border-gray-200 divide-y divide-gray-200 rounded-md" x-data="{showPreview:false}">
                                                <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                                                   <div class="flex items-center flex-1 w-0">
                                                         <!-- Heroicon name: solid/paper-clip -->
                                                         <svg class="flex-shrink-0 w-5 h-5 text-gray-400"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                               d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                               clip-rule="evenodd" />
                                                         </svg>
                                                         <span class="flex-1 w-0 ml-2 truncate">
                                                            {{ str_replace(' ','_',$document->name) }}.pdf </span>
                                                   </div>
                                                   <div class="flex-shrink-0 ml-4" x-cloak x-show="showPreview == false">
                                                      <a href="{{ asset( 'storage/'.$document->path ) }}" target="_blank" 
                                                         class="font-medium text-indigo-600 hover:text-indigo-500 hover:cursor-pointer">
                                                         Show Preview
                                                      </a>
                                                   </div>
                                                   <div class="flex-shrink-0 ml-4" x-cloak x-show="showPreview">
                                                      <a x-on:click="showPreview = false"
                                                         class="font-medium text-indigo-600 hover:text-indigo-500 hover:cursor-pointer">
                                                         Hide Preview
                                                      </a>
                                                   </div>
                                                   {{-- <div class="flex-shrink-0 ml-4">
                                                         <a wire:click.prevent="downloadLegacyDocument"
                                                            class="font-medium text-indigo-600 hover:text-indigo-500 hover:cursor-pointer">
                                                            Download </a>
                                                   </div> --}}
                                                </li>
                                                <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm" x-cloak x-show="showPreview">
                                                   <div class="flex items-center flex-1 w-0">
                                                         <iframe src="{{ asset( 'storage/'.$document->path ) }}" class="block w-screen h-96" frameborder="0"></iframe>
                                                   </div>
                                                </li>
                                             </ul>
                                       </dd>
                                    </div>
                                 </dl>
                              </div>
                            @endif                            
                        </div>

                    </div>



                    {{-- prieview --}}
                     {{-- <div class="grid col-span-1 overflow-hidden border-b border-gray-200 shadow-md shadow-primary-500/50 sm:rounded-lg bg-gray-50 ">
                        <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                            <div class="sticky top-0 px-4 py-5 sm:px-6">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Attachments</h3>
                                <p class="max-w-2xl mt-1 text-sm text-gray-500">@if ($islegacy)
                                   Preview
                                @endif</p>
                            </div>
                            @if ($islegacy)
                              <div class="px-4 py-5 border-t border-gray-200 sm:p-0">
                                 <dl class="sm:divide-y sm:divide-gray-200">
                                  
                                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                       <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-3">
                                             <ul role="list"
                                                class="border border-gray-200 divide-y divide-gray-200 rounded-md" x-data="{showPreview:false}">
                                                <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                                                   <div class="flex items-center flex-1 w-0">
                                                         <svg class="flex-shrink-0 w-5 h-5 text-gray-400"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                               d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                               clip-rule="evenodd" />
                                                         </svg>
                                                         <span class="flex-1 w-0 ml-2 truncate">
                                                            {{ str_replace(' ','_',$document->name) }}.pdf </span>
                                                   </div>
                                              
                                                   <div class="flex-shrink-0 ml-4">
                                                         <a wire:click.prevent="downloadLegacyDocument"
                                                            class="font-medium text-indigo-600 hover:text-indigo-500 hover:cursor-pointer">
                                                            Download </a>
                                                   </div>
                                                </li>
                                                <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm" x-cloak>
                                                   <div class="flex items-center flex-1 w-0">
                                                         <iframe src="{{ asset( 'storage/'.$document->path ) }}" class="block w-screen h-96" frameborder="0"></iframe>
                                                   </div>
                                                </li>
                                             </ul>
                                       </dd>
                                    </div>
                                 </dl>
                              </div>
                            @endif                            
                        </div>

                    </div> --}}
                    {{-- end preview --}}
                </div>
            </div>
        </div>
              {{-- {{-- modal pin --}}
    
<script type="text/javascript">
function app() {
    return {
        pinlength: 5,
        resetValue(i) {
            for (x = 0; x < this.pinlength; x++) {
                if (x >= i) document.getElementById(`codefield_${x}`).value = ''
            }
        },
        stepForward(i) {
            if (document.getElementById(`codefield_${i}`).value && i != this.pinlength - 1) {
                document.getElementById(`codefield_${i+1}`).focus()
                document.getElementById(`codefield_${i+1}`).value = ''
            }
            this.checkPin()
        },
        stepBack(i) {
            if (document.getElementById(`codefield_${i-1}`).value && i != 0) {
                document.getElementById(`codefield_${i-1}`).focus()
                document.getElementById(`codefield_${i-1}`).value = ''
            }
        },
        checkPin() {
            let code = ''
            for (i = 0; i < this.pinlength; i++) {
                code = code + document.getElementById(`codefield_${i}`).value
            }
            if (code.length == this.pinlength) {
                //enable button
                //another comment
                document.getElementById('confirmCode').disabled = false;
                this.validatePin(code) 
            }
        },
        validatePin(code) {
            // Check pin on server
            if (code != '12345')
            {
                 alert('Invalid code');
                  document.getElementById('confirmCode').disabled = true;
            }  
        }
    }
}
</script> 
    {{-- modal pin end --}}
    </div>
</div>
