
<link rel="stylesheet" href="{{ asset('css/task1.css') }}">


<div class="spelling-task-wrapper">
    <!-- Chỉ để hiển thị thông báo -->
    <div class="spelling-task-message" style="display: none; margin-bottom: 10px;"></div>

    <div class="spelling-task-remaining">{{ $task->questions->count() }} items remaining</div>

    <h4 class="spelling-task-title">{{ $task->title }}</h4>
    <p class="spelling-task-instruction">{{ $task->instruction ?? 'Listen and put the letters in order.' }}</p>

    @foreach ($task->questions as $questionIndex => $question)
        <div class="spelling-task-question {{ $loop->first ? 'active' : '' }}"
            data-question-index="{{ $questionIndex }}">
            <div class="spelling-task-letters">
                @foreach ($question->options->shuffle() as $option)
                    <div class="spelling-task-letter" draggable="true"
                        id="letter-{{ $questionIndex }}-{{ strtolower($option->text) }}"
                        data-answer="{{ strtolower($option->text) }}">
                        {{ strtoupper($option->text) }}
                    </div>
                @endforeach
            </div>

            <div class="spelling-task-answer-row">
                <button class="spelling-task-audio" data-audio="{{ $question->audio }}">
                    <i class="fa fa-volume-up"></i>
                </button>
                @foreach ($question->options->sortBy('option_order') as $index => $option)
                    <div class="spelling-task-box" 
                         data-box="{{ $index + 1 }}" 
                         data-correct-letter="{{ strtolower($option->text) }}"></div>
                @endforeach
            </div>
        </div>
    @endforeach

    <div class="spelling-task-progress">
        @foreach ($task->questions as $index => $q)
            <div class="spelling-task-dot {{ $loop->first ? 'active' : '' }}"></div>
        @endforeach
    </div>

    <div class="spelling-task-bottom-controls">
        <div class="spelling-task-buttons">
            <button class="spelling-task-btn spelling-task-finish-btn">
                <i class="fa fa-flag"></i> Finish
            </button>
            <button class="spelling-task-btn spelling-task-retry-btn">
                <i class="fa fa-rotate-right"></i> Try again
            </button>
        </div>
        <div class="spelling-task-nav-arrows">
            <button class="spelling-task-arrow-btn spelling-task-prev-btn">
                <i class="fa fa-chevron-left"></i>
            </button>
            <button class="spelling-task-arrow-btn spelling-task-next-btn">
                <i class="fa fa-chevron-right"></i>
            </button>
        </div>
    </div>

    <div class="spelling-task-overlay" style="display: none;">
        <div class="spelling-task-modal">
            <div class="modal-text">Are you sure you want to finish this task?</div>
            <div class="modal-actions">
                <button class="modal-btn confirm-yes">Yes</button>
                <button class="modal-btn confirm-no">No</button>
            </div>
        </div>
    </div>

    <div class="spelling-task-overlay" style="display: none;">
        <div class="spelling-task-modal">
            <p class="modal-text">Are you sure you want to retry this task?</p>
            <div class="modal-actions">
                <button class="modal-btn modal-confirm">Yes</button>
                <button class="modal-btn modal-cancel">No</button>
            </div>
        </div>
    </div>

    
</div>

<script src="{{ asset('js/task1.js') }}"></script>
