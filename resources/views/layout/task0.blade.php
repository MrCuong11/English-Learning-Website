<link rel="stylesheet" href="{{ asset('css/task0.css') }}">

<div class="drag-task-wrapper">
    <!-- Thông báo -->
    <div class="drag-task-message" ></div>

    <h4 class="drag-task-title">{{ $task->title }}</h4>
    <p class="drag-task-instruction">{{ $task->instruction ?? 'Match the words and pictures.' }}</p>

    <!-- Drag options -->
    <div class="drag-options">
        @foreach ($task->questions as $question)
            @foreach ($question->options as $option)
                <div class="drag-option" draggable="true">{{ $option->text }}</div>
            @endforeach
        @endforeach
    </div>

    <!-- Image grid -->
    <div class="image-grid">
    @foreach ($task->questions as $question)
        <div class="image-box" data-correct="{{ $question->question }}">
            <img src="{{ asset($question->image) }}" alt="Image for question">
            <button class="play-audio-btn" data-audio="{{ asset($question->audio) }}">
                <i class="fas fa-volume-up"></i>
            </button>
            <div class="drop-box"></div>
        </div>
    @endforeach
</div>


    <!-- Buttons -->
    <div class="buttons-container">
        <button class="action-btn" id="finish-btn">
            <i class="fas fa-flag"></i> Finish
        </button>
        <button class="action-btn" id="try-again-btn">
            <i class="fas fa-sync-alt"></i> Try again
        </button>
    </div>
</div>
<script src="{{ asset('js/task0.js') }}"></script>
