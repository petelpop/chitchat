<div>
    
    <div class="chatlist_header">
        <div class="title">
            Chat
        </div>

        <div class="img_container">
            <img src="https://picsum.photos/id/237/200/300" alt="">
        </div>
    </div>

    @if (count($conversations) > 0)

    @foreach ($conversations as $conversation)
 
    <div class="chatlist_body">
        <div class="chatlist_item">
            <div class="chatlist_img_container">
                <img src="https://picsum.photos/id/{{ $this->getChatUserInstance($conversation, $name = 'id') }}/200/300" alt="">
            </div>
            
            <div class="chatlist_info">
                <div class="top_row">
                    <div class="list_username">{{ $this->getChatUserInstance($conversation, $name = 'name') }}</div>
                    <span class="date">{{ $conversation->messages->last()->created_at->shortAbsoluteDiffForHumans() }}</span>
                </div>
                <div class="bottom_row">
                    <div class="message_body text-truncate">
                        {{ $conversation->messages->last()->body }}
                    </div>

                    <div class="unread_count">
                        100
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endforeach
    @else 
        You have no conversations
    @endif

</div>
