<x-app-layout>
<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Blood Donation') }}
        </h2>
    </x-slot>

    <div>
        <!-- <form wire:submit.prevent="submit"> -->
            <form action="{{URL::to('blooddonation/update-blooddonation', $bloodDonation->id)}}" method="post">
                @csrf
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <x-section>
                <x-slot name="title">
                    {{ __('Blood Title and Detail') }}
                </x-slot>
            
                <x-slot name="description">
                    {{ __('Give case a meaningful title and provide as much detail as much as possible.') }}
                </x-slot>

                <x-slot name="content">
                    <div class="col-span-6 md:col-span-6 sm:col-span-4">
                        <x-jet-label for="title" value="{{ __('Title') }}" />
                        <x-jet-input id="title" type="text" name="title" class="mt-1 block w-full" value="{{$bloodDonation->title }}"/>
                        <x-jet-input-error for="title" class="mt-2" />
                    </div>
                    <div class="col-span-6 md:col-span-6 sm:col-span-4">
                        <x-jet-label for="detail" value="{{ __('Detail') }}" />
                        <textarea id="detail" name="detail" class="mt-1 block w-full" rows="5">
                            {{$bloodDonation->detail}}
                        </textarea>
                        <x-jet-input-error for="detail" class="mt-2" />
                    </div>
                </x-slot>
            </x-section>
            <x-section class="mt-6">
                <x-slot name="title">
                    {{ __('Hospital') }}
                </x-slot>
            
                <x-slot name="description">
                    {{ __('') }}
                </x-slot>

                <x-slot name="content">
                    <div class="col-span-6 md:col-span-6 sm:col-span-4">
                        <x-jet-label for="hospital_name" value="{{ __('Hospital Name') }}" />
                        <x-jet-input id="hospital_name" type="text" name="hospital_name" class="mt-1 block w-full" value="{{$bloodDonation->hospital_name }}" />
                        <x-jet-input-error for="hospital_name" class="mt-2" />
                    </div>
                    <div class="col-span-6 md:col-span-6 sm:col-span-4">
                        <x-jet-label for="required_blood_group" value="{{ __('Required Blood Group') }}" />
                        <x-jet-input id="required_blood_group" type="text" name="required_blood_group" class="mt-1 block w-full" value="{{$bloodDonation->required_blood_group}}"/>
                        <x-jet-input-error for="required_blood_group" class="mt-2" />
                    </div>
                </x-slot>
            </x-section>

            <x-section class="mt-6">
                <x-slot name="title">
                    {{ __('Contact Details') }}
                </x-slot>
            
                <x-slot name="description">
                    {{ __('Provide contact details of donation receiver if they have shared with us.') }}
                </x-slot>

                <x-slot name="content">
                    <div class="col-span-6 md:col-span-6 sm:col-span-4">
                        <x-jet-label for="mobile_no" value="{{ __('Mobile Number') }}" />
                        <x-jet-input id="mobile_no" type="number" name="mobile_no" class="mt-1 block w-full" value="{{$bloodDonation->mobile_no}}"/>
                        <x-jet-input-error for="mobile_no" class="mt-2" />
                    </div>
                    <div class="col-span-6 md:col-span-6 sm:col-span-4">
                        <x-jet-label for="whatsapp_no" value="{{ __('WhatsApp') }}" />
                        <x-jet-input id="whatsapp_no" type="number" name="whatsapp_no" class="mt-1 block w-full" value="{{$bloodDonation->whatsapp_no}}"/>
                        <x-jet-input-error for="whatsapp_no" class="mt-2" />
                    </div>
                </x-slot>
            </x-section>

            <x-section class="mt-6">
                <x-slot name="title">
                    {{ __('Verification') }}
                </x-slot>
            
                <x-slot name="description">
                    {{ __('Is case verified? Have you done your research and made sure?') }}
                </x-slot>

                <x-slot name="content">
                    <div class="col-span-6 md:col-span-6 sm:col-span-4">
                        <x-jet-label for="verified">
                            <div class="flex items-center">
                                @if($bloodDonation->verified=="on")
                                <x-jet-checkbox name="verified" id="verified" checked/>
                                @else
                                <x-jet-checkbox name="verified" id="verified"/>
                                @endif
                                <div class="ml-2">
                                    Verified?
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                </x-slot>
            </x-section>
                <div class="flex justify-end mt-8">
                <x-jet-button>Update</x-jet-button>
            </div>
        </div>
    </form>
    </div>
</div>
</x-app-layout>
