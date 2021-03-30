<x-app-layout>
<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Case') }}
        </h2>
    </x-slot>

    <div>
        <!-- <form wire:submit.prevent="submit"> -->
            <form action="{{URL::to('fundraisers/update-fundraisers', $fundraiser->id)}}" method="post">
                @csrf
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <x-section>
                <x-slot name="title">
                    {{ __('Case Title and Detail') }}
                </x-slot>
            
                <x-slot name="description">
                    {{ __('Give case a meaningful title and provide as much detail as much as possible.') }}
                </x-slot>

                <x-slot name="content">
                    <div class="col-span-6 md:col-span-6 sm:col-span-4">
                        <x-jet-label for="title" value="{{ __('Title') }}" />
                        <x-jet-input id="title" type="text" name="title" class="mt-1 block w-full" value="{{$fundraiser->title }}"/>
                        <x-jet-input-error for="title" class="mt-2" />
                    </div>
                    <div class="col-span-6 md:col-span-6 sm:col-span-4">
                        <x-jet-label for="detail" value="{{ __('Detail') }}" />
                        <textarea id="detail" name="detail" class="mt-1 block w-full" rows="5" value="{{$fundraiser->detail}}">{{$fundraiser->detail}}</textarea>
                        <x-jet-input-error for="detail" class="mt-2" />
                    </div>
                </x-slot>
            </x-section>
            <x-section class="mt-6">
                <x-slot name="title">
                    {{ __('Amount') }}
                </x-slot>
            
                <x-slot name="description">
                    {{ __('Manage required amount and remaining amount.') }}
                </x-slot>

                <x-slot name="content">
                    <div class="col-span-6 md:col-span-6 sm:col-span-4">
                        <x-jet-label for="required_amount" value="{{ __('Required Amount') }}" />
                        <x-jet-input id="required_amount" type="number" name="required_amount" class="mt-1 block w-full"  value="{{$fundraiser->required_amount }}" />
                        <x-jet-input-error for="required_amount" class="mt-2" />
                    </div>
                    <div class="col-span-6 md:col-span-6 sm:col-span-4">
                        <x-jet-label for="remaining_amount" value="{{ __('Remaining Amount') }}" />
                        <x-jet-input id="remaining_amount" type="number" name="remaining_amount" class="mt-1 block w-full" value="{{$fundraiser->remaining_amount}}"/>
                        <x-jet-input-error for="remaining_amount" class="mt-2" />
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
                        <x-jet-input id="mobile_no" type="number" name="mobile_no" class="mt-1 block w-full" value="{{$fundraiser->mobile_no}}"/>
                        <x-jet-input-error for="mobile_no" class="mt-2" />
                    </div>
                    <div class="col-span-6 md:col-span-6 sm:col-span-4">
                        <x-jet-label for="whatsapp_no" value="{{ __('WhatsApp') }}" />
                        <x-jet-input id="whatsapp_no" type="number" name="whatsapp_no" class="mt-1 block w-full" value="{{$fundraiser->whatsapp_no}}"/>
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
                                @if($fundraiser->status=="on")
                                <x-jet-checkbox wire:model.defer="verified" name="status" id="verified" checked/>
                                @else
                                <x-jet-checkbox wire:model.defer="verified" name="status" id="verified"/>
                                @endif
                                <div class="ml-2">
                                    Verified?
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                </x-slot>
            </x-section>
<!-- 
             <x-section class="mt-6">
                <x-slot name="title">
                    {{ __('Account Information') }}
                </x-slot>
            
                <x-slot name="description">
                    {{ __('You Can Add Multiple Account.') }}
                </x-slot>

            <x-slot name="content">
                <div class="col-span-6 md:col-span-6 sm:col-span-4 field_wrapper">
                    <x-jet-label for="bank_name" value="{{ __('Bank Name') }}" />
                    <x-jet-input id="bank_name" type="text" name="bank_name[]" class="mt-1 block w-full" wire:model.defer="state.bank_name" />
                    <x-jet-input-error for="bank_name" class="mt-2" />

                    <x-jet-label for="account_no" value="{{ __('Account No') }}" />
                    <x-jet-input id="account_no" type="number" name="account_no[]" class="mt-1 block w-full" wire:model.defer="state.account_no" />
                    <x-jet-input-error for="account_no" class="mt-2" />
                </div>
                <a href="javascript:void(0);" class="add_button" title="Add field"><img src="/add.png" style="width: 40px;height: 40px" /></a>
                </x-slot>
            </x-section> -->
            
            <div class="flex justify-end mt-8">
                <x-jet-button>Save</x-jet-button>
            </div>
        </div>
    </form>
    </div>
</div>
</x-app-layout>

