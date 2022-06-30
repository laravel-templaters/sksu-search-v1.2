<div class="mt-5">
    <!-- This example requires Tailwind CSS v2.0+ -->
<div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-xl font-semibold uppercase sm:text-4xl text-primary-600">archives</h1>
        <p class="mt-2 text-sm text-gray-700">A list of all the users in your account including their name, title, email and role.</p>
      </div>
      <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none sm:w-lg">
        <div class="inline-flex items-start">
            <div class="px-3 py-2 bg-white border rounded-md shadow-sm border-primary-300 ">
              <label for="filter" class="block text-sm font-bold text-gray-900"> Search Here </label>
              <div class="flex mt-1 rounded-md shadow-sm">
                  <span class="inline-flex items-center text-gray-500 border border-r-0 border-gray-300 focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600 rounded-l-md bg-gray-50 sm:text-sm">
                    <select wire:model="filter" name="filter" id="" class="border-0 rounded-l-md focus:border-0">
                      <option value="payee" selected>Payee</option>
                      <option value="particular">Particular</option>\
                      <option value="document-code">Document Code</option>
                      <option value="date">Date</option>
                    </select>
                  </span>
                  @if($filter == "date")
                  <input wire:model.debounce="searchText" type="date" name="name" id="name" class="flex-1 block w-full min-w-0 px-3 py-2 border-gray-300 rounded-none rounded-r-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Select Date">
                  @else
                  <input wire:model.debounce="searchText" type="text" name="name" id="name" class="flex-1 block w-full min-w-0 px-3 py-2 border-gray-300 rounded-none rounded-r-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Start Searching...">
                  @endif
                  
                  
              </div>
            </div>
                 
        </div>       
      </div>
    </div>
    <div class="flex flex-col mt-8">
      <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle">
          <div class="overflow-hidden shadow-sm ring-1 ring-black ring-opacity-5">
            <table class="min-w-full divide-y divide-gray-300">
              <thead class="bg-gray-50">
                <tr>
                  <th scope="col"
              class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
             document code
          </th>
                  <th scope="col"
                  class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                 Payee Name
                 </th>
              
          <th scope="col"
                  class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                  Particulars
              </th>
              <th scope="col"
                  class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                  Description/Document Name
              </th>
              <th scope="col"
                  class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                  Date Archived
              </th>
             
              <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Action</span>
              </th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
               
                @if (count($documents)>0)
                               
                                    @foreach ($documents as $legacy_document)
                                    <tr>
                                        <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap">
                                            {{$legacy_document->document_code}}
                                        </td>
                                        <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap">
                                          {{$legacy_document->payee_name}}
                                      </td>
                                      <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap">
                                        {{$legacy_document->particulars}}
                                    </td>
                                    <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap">
                                      {{$legacy_document->name}}
                                  </td>
                                        <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap">
                                            {{ date('F d, Y', strtotime($legacy_document->date))}}
                                        </td>
                                        <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                            <a href="{{  route('archive-detail', ['id'=>$legacy_document->id,'islegacy'=>1])  }}" target="_blank" class="inline-flex text-indigo-600 hover:text-indigo-900">
                                                <span class="inline pr-3">View</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="inline w-5 h-5" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                                </svg>
                                            </a>
                                        </td>

                                    </tr>
                                    @endforeach
                                   
                                @else
                                <tr>
                                    <td class="px-6 py-4 italic text-center text-gray-500 text-md whitespace-nowrap" colspan="6">
                                    NOTHING TO SHOW
                                    </td>
                                </tr>
                                @endif
              </tbody>
              <tfoot class="bg-white">
                    <tr class="">
                        <td colspan="6" class="p-3">{{ $documents->links() }}</td>
                    </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>
