<x-app-layout>
<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Copy Case') }}
        </h2>
    </x-slot>

    <div>
        <!-- <form wire:submit.prevent="submit"> -->
          <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <x-section>
                <x-slot name="title">
                    {{ __('Case Title and Detail') }}
                </x-slot>
            
                <x-slot name="description">
                    {{ __('Please Copy this Detail and Share on facebook') }}
                </x-slot>

                <x-slot name="content">
                    <div class="col-span-6 md:col-span-6 sm:col-span-4">
                        <x-jet-label for="detail" value="{{ __('Copy Detail') }}" />
                        <textarea id="detail" name="detail" class="mt-1 block w-full" rows="9">{{$fundraiser->title}}
{{$fundraiser->detail}}
Req. Amount : {{$fundraiser->required_amount}}
Rem. Amount : {{$fundraiser->remaining_amount}}
Mobile Number : {{$fundraiser->mobile_no}}
Whatsapp Number : {{$fundraiser->whatsapp_no}}
Verify : {{$fundraiser->status}}</textarea>
                        <x-jet-input-error for="detail" class="mt-2" />
                    </div>


                </x-slot>
            </x-section>
                <div class="flex justify-end mt-8">
                <x-jet-button onclick="copyBoard()">Copy</x-jet-button>
                <a href="https://www.facebook.com/profile" target="_blank" style="margin-left: 5px"><x-jet-button>Facebook</x-jet-button></a> 
            </div>
        </div>
    </div>
</div>
</x-app-layout>

<script>
function copyBoard() {
  var copyText = document.getElementById("detail");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
}
</script>
