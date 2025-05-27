<div class="comment-card" style="display: flex; background: #f4f4f4; border: 1px solid #e0e0e0; border-radius: 8px; margin-bottom: 18px;">
    <!-- Comment content -->
    <div style="min-width: 90px; max-width: 90px; background: #2b0060; display: flex; align-items: center; justify-content: center; border-radius: 8px 0 0 8px;">
        <img src="{{ $comment->user->avatar ?? asset('images/favicons/profile.png') }}" alt="Avatar" style="width: 48px; height: 48px; border-radius: 50%;">
    </div>
    <div style="flex: 1; padding: 14px 18px; background: #fff; border-radius: 0 8px 8px 0;">
        <div style="font-size: 1rem; color: #333; margin-bottom: 6px;">
            <span>Submitted by <strong>{{ $comment->user->name ?? 'Anonymous' }}</strong> on
                <strong>
                    @if ($comment->created_at->diffInDays(\Carbon\Carbon::now()) > 7)
                        {{ $comment->created_at->format('D, d/m/Y - H:i') }}
                    @else
                        {{ $comment->created_at->diffForHumans() }}
                    @endif
                </strong>
            </span>
        </div>
        <div style="margin-bottom: 12px; color: #222; font-size: 1.02rem; line-height: 1.7;">
            {!! $comment->comment !!}
        </div>
        <hr style="margin:14px 0; border:none; border-top:1px solid #e0e0e0" />
        <div style="font-size: 0.96rem; color: #333;">
            @auth
            <a href="#" class="reply-btn text-success" data-comment-id="{{ $comment->id }}" style="color: #43B02A;">Reply</a>
            <div class="reply-form" id="reply-form-{{ $comment->id }}" style="display: none; margin-top: 15px;">
                <textarea class="reply-textarea" rows="3" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;"></textarea>
                <button class="submit-reply" data-comment-id="{{ $comment->id }}" style="margin-top: 10px; background: #2b0060; color: #fff; border: none; padding: 8px 20px; border-radius: 4px; cursor: pointer;">Submit Reply</button>
            </div>
            @endauth
        </div>
    </div>
</div>

<!-- Replies -->
@if($comment->replies->count() > 0)
    <div class="replies-container" style="margin-left: 50px;">
        @foreach($comment->replies as $reply)
            @include('partial.comment', ['comment' => $reply])
        @endforeach
    </div>
@endif