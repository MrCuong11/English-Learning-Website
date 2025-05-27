<link rel="stylesheet" href="{{ asset('css/preparation.css') }}">

<div class="preparation-task-wrapper">
    <div class="preparation-task-message" style="display: none; margin-bottom: 10px;"></div>

    <!-- Title, instruction, items remaining -->
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
        <div>
            <span class="preparation-task-title">{{ $task->title }}</span><br>
            <span class="preparation-task-instruction">{{ $task->instruction ?? 'Put the sentences in the correct group.' }}</span>
        </div>
        <div class="preparation-task-remaining preparation-items-remaining-badge">
            <span id="preparation-items-remaining"
                  data-total="{{ $task->questions->flatMap->options->count() }}">
                {{ $task->questions->flatMap->options->count() }} 
            </span> items remaining
        </div>
    </div>

    <!-- Draggable options -->
    <div class="preparation-task-options">
        @foreach ($task->questions as $question)  
            @foreach ($question->options->shuffle() as $option)
                <div class="prep-draggable" draggable="true"
                     data-question-id="{{ $question->id }}"
                     data-answer="{{ $option->text }}">
                    {{ $option->text }}
                </div>
            @endforeach
        @endforeach
    </div>

    <!-- Group dropzones -->
    <div class="preparation-task-groups">
        @foreach ($task->questions->sortBy('question_order') as $groupQuestion)
            <div class="prep-group">
                <div class="prep-group-title">{{ $groupQuestion->question }}</div>
                <div class="prep-dropzone"
                     data-group="{{ $groupQuestion->question }}"
                     data-question-id="{{ $groupQuestion->id }}">
                </div>
            </div>
        @endforeach
    </div>

    <!-- Bottom controls -->
    <div class="preparation-task-bottom-controls">
        <div class="preparation-task-buttons">
            <button class="preparation-task-btn preparation-task-finish-btn">
                <i class="fa fa-flag"></i> Finish
            </button>
            <button class="preparation-task-btn preparation-task-retry-btn">
                <i class="fa fa-rotate-right"></i> Try again
            </button>
        </div>
    </div>

    <!-- Finish confirmation overlay -->
    <div class="preparation-task-overlay finish-confirm" style="display: none;">
        <div class="preparation-task-modal">
            <div class="preparation-modal-text">Are you sure you want to finish this task?</div>
            <div class="preparation-modal-actions">
                <button class="preparation-modal-btn preparation-confirm-yes">Yes</button>
                <button class="preparation-modal-btn preparation-confirm-no">No</button>
            </div>
        </div>
    </div>

    <!-- Retry confirmation overlay -->
    <div class="preparation-task-overlay retry-confirm" style="display: none;">
        <div class="preparation-task-modal">
            <div class="preparation-modal-text">Are you sure you want to retry this task?</div>
            <div class="preparation-modal-actions">
                <button class="preparation-modal-btn preparation-modal-confirm">Yes</button>
                <button class="preparation-modal-btn preparation-modal-cancel">No</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/preparation.js') }}"></script>
