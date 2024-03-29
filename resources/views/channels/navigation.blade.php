<!-- Inspired by slack ui clone https://tailwindcomponents.com/component/slack-clone-1 -->
<div class="bg-gray-800 text-purple-lighter flex-none pb-6 hidden md:block w-[400px]">


    <div class="text-white py-4 px-4 flex justify-between shadow-xl">
        <div class="flex-auto">
            <h1 class="font-semibold text-xl leading-tight truncate">{{ $channel->name }}</h1>
        </div>
        <div>
            {{-- gear icon --}}
            <i class="fas fa-cog text-white fa-sm fa-fw"></i>
        </div>
    </div>





    <div class="p-4">

        @foreach ($conversations as $conversation)
        <a class="flex flex-row items-center hover:bg-gray-700 rounded-2xl p-4 bg-gray-900 w-full mb-4" href="{{ route('channels.conversation.show',
        [
            'channel' => $channel->name,
            'conversation' => $conversation->id
            ]) }}">
            <div class="flex items-center justify-center h-14 w-14 bg-indigo-200 rounded-full">
                M
            </div>

            <div class="text-left ml-3">
                <div class="font-semibold text-lg text-md text-white">{{ $conversation->name }}</div>
                <div class="text-white">
                    {{ $conversation->messages?->last()->content }}
                </div>
            </div>
        </a>
        @endforeach
    </div>



</div>
