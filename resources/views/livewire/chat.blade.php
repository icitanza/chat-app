<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        @foreach ($messages as $message)
                            <div wire:poll>
                                <div class="chat {{ $message->form_user_id == auth()->id() ? 'chat-end' : 'chat-start' }}">
                                    <div class="chat-image avatar">
                                        <div class="w-10 rounded-full">
                                            <img alt="Tailwind CSS chat bubble component"
                                                src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                                        </div>
                                    </div>
                                    <div class="chat-header">
                                        {{ $message->formUser->name }}
                                        <time class="text-xs opacity-50">{{ $message->created_at->diffForHumans() }}</time>
                                    </div>
                                    <div class="chat-bubble">{{ $message->message }}</div>
                                    <div class="chat-footer opacity-50">Delivered</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="form-control">
                        <form action="" wire:submit.prevent="sendMessage">
                            <textarea wire:model="message" class="input input-bordered w-full bg-white" placeholder="Your message..."></textarea>
                            <button class="btn btn-primary">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
