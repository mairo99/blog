@auth
    <x-panel>
        <form method="POST" action="/posts/{{ $post->slug }}/comments">
            @csrf


            <header class="flex items-center">
                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="40" height="40" class="rounded-full">
                <h2 class="ml-4">Want to participate?</h2>
            </header>
            <div class="mt-6">
                <div>
                                <textarea name="body" class="w-full text-sm focus:outline-none focus:ring" rows="5"
                                          placeholder="Quick, think of something to say!"></textarea>

                    @error('body')
                    <span class="text-xs text-red-500">{{$message}}</span>
                    @enderror

                </div>
                <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                    <x-submit-button>POST</x-submit-button>
                </div>
            </div>
        </form>
    </x-panel>
@endauth
