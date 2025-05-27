let scoreTask2 = 0;
let completedQuestionsTask2 = [];
let selectedOptionTask2 = null;
let isDragDropLockedTask2 = false;

const totalTask2 = document.getElementById('preparation-items-remaining');
const totalQuestionsTask2 = parseInt(totalTask2.dataset.total, 10);

const finishBtnTask2 = document.querySelector('.preparation-task-finish-btn');
const retryBtnTask2 = document.querySelector('.preparation-task-retry-btn');
const overlayTask2 = document.querySelector('.preparation-task-overlay');
const modalTextTask2 = document.querySelector('.preparation-modal-text');
const modalActionsTask2 = document.querySelector('.preparation-modal-actions');
const optionContainerTask2 = document.querySelector('.preparation-task-options');
const itemsRemainingTask2 = document.getElementById('preparation-items-remaining');

function showModal(text, actionsHTML) {
    if (overlayTask2 && modalTextTask2 && modalActionsTask2) {
        modalTextTask2.textContent = text;
        modalActionsTask2.innerHTML = actionsHTML;
        overlayTask2.style.display = 'flex';
    }
}

function hideModal() {
    if (overlayTask2) overlayTask2.style.display = 'none';
}

function updateRemaining() {
    const ungroupedOptions = optionContainerTask2.querySelectorAll('.prep-draggable').length;
    if (itemsRemainingTask2) itemsRemainingTask2.textContent = ungroupedOptions;
}

document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.prep-draggable').forEach(option => {
        option.addEventListener('click', function (e) {
            if (isDragDropLockedTask2) return;
            e.stopPropagation();
            if (this.parentElement.classList.contains('prep-dropzone')) {
                optionContainerTask2.appendChild(this);
                this.classList.remove('selected');
                selectedOptionTask2 = null;
                updateRemaining();
                return;
            }
            if (!selectedOptionTask2) {
                selectedOptionTask2 = this;
                this.classList.add('selected');
            }
        });
    });

    document.querySelectorAll('.prep-dropzone').forEach(zone => {
        zone.addEventListener('click', function (e) {
            if (isDragDropLockedTask2) return;
            e.stopPropagation();
            if (selectedOptionTask2) {
                this.appendChild(selectedOptionTask2);
                selectedOptionTask2.classList.remove('selected');
                selectedOptionTask2 = null;
                updateRemaining();
            }
        });
    });

    optionContainerTask2.addEventListener('click', function (e) {
        if (isDragDropLockedTask2) return;
        if (selectedOptionTask2 && !e.target.classList.contains('prep-draggable')) {
            selectedOptionTask2.classList.remove('selected');
            selectedOptionTask2 = null;
        }
    });

    updateRemaining();
});

finishBtnTask2?.addEventListener('click', () => {
    if (isDragDropLockedTask2) return;

    showModal(
        'Do you want to finish?',
        '<button class="preparation-modal-btn preparation-confirm-yes">Yes</button><button class="preparation-modal-btn preparation-confirm-no">No</button>'
    );

    setTimeout(() => {
        document.querySelector('.preparation-confirm-yes')?.addEventListener('click', () => {
            hideModal();
            scoreTask2 = 0;

            document.querySelectorAll('.prep-dropzone').forEach(dropzone => {
                const dropzoneQuestionId = dropzone.getAttribute('data-question-id');

                dropzone.querySelectorAll('.prep-draggable').forEach(option => {
                    const optionQuestionId = option.getAttribute('data-question-id');
                    if (dropzoneQuestionId === optionQuestionId) {
                        scoreTask2++;
                        option.style.backgroundColor = '#d4edda';
                        option.style.borderColor = '#28a745';
                    } else {
                        option.style.backgroundColor = '#f8d7da';
                        option.style.borderColor = '#dc3545';
                    }
                });
            });

            const percentage = (scoreTask2 / totalQuestionsTask2) * 100;
            showModal(
                `Your score: ${scoreTask2} out of ${totalQuestionsTask2} (${percentage.toFixed(2)}%)`,
                '<button class="preparation-modal-btn preparation-modal-ok">OK</button>'
            );

            setTimeout(() => {
                document.querySelector('.preparation-modal-ok')?.addEventListener('click', hideModal);
            }, 0);

            finishBtnTask2.disabled = true;
            finishBtnTask2.classList.add('locked');
            isDragDropLockedTask2 = true;
        });

        document.querySelector('.preparation-confirm-no')?.addEventListener('click', hideModal);
    }, 0);
});

retryBtnTask2?.addEventListener('click', () => {
    showModal(
        'Are you sure you want to try again?',
        '<button class="preparation-modal-btn preparation-modal-confirm">Yes</button><button class="preparation-modal-btn preparation-modal-cancel">No</button>'
    );

    setTimeout(() => {
        document.querySelector('.preparation-modal-confirm')?.addEventListener('click', () => {
            hideModal();

            document.querySelectorAll('.prep-draggable').forEach(option => {
                option.style.backgroundColor = '';
                option.style.borderColor = '';
                optionContainerTask2.appendChild(option);
            });

            finishBtnTask2.disabled = false;
            finishBtnTask2.classList.remove('locked');
            isDragDropLockedTask2 = false;
            updateRemaining();
        });

        document.querySelector('.preparation-modal-cancel')?.addEventListener('click', hideModal);
    }, 0);
});
