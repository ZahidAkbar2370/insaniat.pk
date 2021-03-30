<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blood Donation') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-link-button href="{{route('blooddonation.create')}}">Add New Blood Donation</x-link-button>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                          <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                              <tr>

                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                  Title
                                </th>

                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                  Hospital Name
                                </th>

                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                  Req. Blood Group
                                </th>

                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                  Contact
                                </th>

                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                  Verified
                                </th>

                                 <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                  Status
                                </th>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                  Action
                                </th>
                              </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                              @foreach($bloodDonations as $bloodDonation)
                              <tr>

                                <td class="px-6 py-4 whitespace-nowrap">
                                  <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                      <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60" alt="">
                                    </div>
                                    <div class="ml-4">
                                      <div class="text-sm font-medium text-gray-900">
                                        {{$bloodDonation->title}}
                                      </div>
                                      <div class="text-sm text-gray-500" style="word-break: break-all;" >
                                        <?php echo (wordwrap($bloodDonation->detail,30,"<br>\n"));?>
                                      </div>
                                    </div>
                                  </div>
                                </td>

                                 <td class="px-6 py-4 whitespace-nowrap">
                                  <div class="text-sm text-gray-700">{{$bloodDonation->hospital_name}}</div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                  <div class="text-sm text-gray-700">{{$bloodDonation->required_blood_group}}</div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                  <div class="text-sm text-gray-700"><b>Call:</b>{{$bloodDonation->mobile_no}}</div>
                                  <div class="text-sm text-gray-500"><b>Whtps:</b>{{$bloodDonation->whatsapp_no}}</div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                  <div class="text-sm text-gray-700">{{$bloodDonation->verified}}</div>
                                </td>

                                @if($bloodDonation->status=="yes")
                                <td class="px-6 py-4 whitespace-nowrap">
                                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Active
                                  </span>
                                </td>
                                @else
                                  <td class="px-6 py-4 whitespace-nowrap">
                                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Un-active
                                  </span>
                                </td>
                                @endif

                                <td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium">
                                  <a href="blooddonation/edit/{{$bloodDonation->id}}" class="text-indigo-600 hover:text-indigo-900 px-2">Edit</a>
                                  <a href="blooddonation/delete/{{$bloodDonation->id}}" class="text-indigo-600 hover:text-indigo-900 px-2">Delete</a>
                                  <a href="blooddonation/share/{{$bloodDonation->id}}" class="text-indigo-600 hover:text-indigo-900">Share</a>
                                </td>

                              </tr>
                            @endforeach
                              <!-- More items... -->
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</x-app-layout>