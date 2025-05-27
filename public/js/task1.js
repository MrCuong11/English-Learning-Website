let score = 0; // Biến lưu trữ điểm
let totalQuestions = 0; // Biến lưu trữ tổng số câu hỏi
let completedQuestions = []; // Mảng lưu các câu hỏi đã hoàn thành
let currentIndex = 0; // Chỉ số câu hỏi hiện tại
let isDragDropLockedTask1 = false; // Biến theo dõi trạng thái khóa kéo-thả

const finishBtn = document.querySelector('.spelling-task-finish-btn');
const overlay = document.querySelector('.spelling-task-overlay');
const modalText = document.querySelector('.modal-text');
const modalActions = document.querySelector('.modal-actions');

// Hàm hiển thị modal với nội dung và nút tùy chỉnh
function showSpellingModal(text, actionsHTML) {
    if (overlay && modalText && modalActions) {
        modalText.textContent = text;
        modalActions.innerHTML = actionsHTML;
        overlay.style.display = 'flex';
    }
}

// Hàm ẩn modal
function hideSpellingModal() {
    if (overlay) overlay.style.display = 'none';
}

// Hàm cập nhật số "items remaining"
function updateRemainingItems() {
    const totalQuestions = document.querySelectorAll(".spelling-task-question").length;
    const remaining = totalQuestions - completedQuestions.length;
    const remainingElement = document.querySelector(".spelling-task-remaining");
    if (remainingElement) remainingElement.textContent = `${remaining} items remaining`;
}

// Hàm hiển thị điểm trong modal
function displayScore(percentage) {
    const resultMessage = `Your score: ${score} out of ${totalQuestions} questions. (${percentage.toFixed(2)}%)`;
    showSpellingModal(resultMessage, '<button class="modal-btn modal-ok">OK</button>');
    const okBtn = document.querySelector('.modal-ok');
    if (okBtn) okBtn.addEventListener('click', hideSpellingModal);
}

// Hàm kiểm tra xem câu hỏi đã hoàn thành chưa
function isQuestionCompleted(question) {
    const boxes = question.querySelectorAll(".spelling-task-box");
    let allFilled = true;
    boxes.forEach(box => {
        if (!box.querySelector(".spelling-task-letter")) allFilled = false;
    });
    return allFilled;
}

// Hàm khóa kéo-thả
function lockDragAndDropTask1() {
    const letters = document.querySelectorAll(".spelling-task-letter");
    const boxes = document.querySelectorAll(".spelling-task-box");

    letters.forEach(letter => {
        letter.setAttribute("draggable", "false");
        letter.style.cursor = "default";
        letter.classList.add("no-arrow");
        letter.replaceWith(letter.cloneNode(true));
    });

    boxes.forEach(box => {
        box.replaceWith(box.cloneNode(true));
    });

    isDragDropLockedTask1 = true;
}

// Hàm khởi tạo drag and drop
function initDragAndDropTask1() {
    if (isDragDropLockedTask1) return; // Không khởi tạo nếu kéo-thả đang bị khóa

    const activeQuestion = document.querySelector(".spelling-task-question.active");
    if (!activeQuestion) return;

    const letters = activeQuestion.querySelectorAll(".spelling-task-letter");
    const boxes = activeQuestion.querySelectorAll(".spelling-task-box");
    const letterContainer = activeQuestion.querySelector(".spelling-task-letters");

    letters.forEach((letter) => {
        letter.setAttribute("draggable", "true");
        letter.style.cursor = "grab";
        letter.classList.remove("no-arrow");

        letter.addEventListener("dragstart", (e) => {
            e.dataTransfer.setData("text/plain", letter.id);
        });
    });

    boxes.forEach((box) => {
        box.addEventListener("dragover", (e) => e.preventDefault());
        box.addEventListener("drop", (e) => {
            e.preventDefault();
            const letterId = e.dataTransfer.getData("text/plain");
            const letterEl = document.getElementById(letterId);

            if (!box.hasChildNodes() && letterEl) {
                box.appendChild(letterEl);
                letterEl.setAttribute("draggable", "false");
                letterEl.style.cursor = "default";
                letterEl.classList.add("no-arrow");

                letterEl.addEventListener("click", () => {
                    letterContainer.appendChild(letterEl);
                    letterEl.setAttribute("draggable", "true");
                    letterEl.style.cursor = "grab";
                    letterEl.classList.remove("no-arrow");

                }, { once: true });
            }
        });
    });
}

// Hàm hiển thị câu hỏi
function showQuestion(index) {
    const questions = document.querySelectorAll(".spelling-task-question");
    const dots = document.querySelectorAll(".spelling-task-dot");
    if (index >= 0 && index < questions.length) {
        questions.forEach((q, i) => q.classList.toggle("active", i === index));
        dots.forEach((dot, i) => dot.classList.toggle("active", i === index));
        currentIndex = index;
        initDragAndDropTask1();
    }
}

// Sự kiện "Next"
document.querySelector(".spelling-task-next-btn")?.addEventListener("click", () => {
    const currentQuestion = document.querySelector(".spelling-task-question.active");
    if (!currentQuestion) return;

    const currentIdx = parseInt(currentQuestion.getAttribute("data-question-index"));
    if (!isDragDropLockedTask1 && isQuestionCompleted(currentQuestion)    && !completedQuestions.includes(currentIdx)) {
        completedQuestions.push(currentIdx);
        updateRemainingItems();
    }

    const questions = document.querySelectorAll(".spelling-task-question");
    if (currentIdx < questions.length - 1) showQuestion(currentIdx + 1);
});

// Sự kiện "Previous"
document.querySelector(".spelling-task-prev-btn")?.addEventListener("click", () => {
    if (currentIndex > 0) showQuestion(currentIndex - 1);
});

// Sự kiện "Finish"
finishBtn?.addEventListener("click", () => {
    showSpellingModal(
        'Do you want to finish?',
        '<button class="modal-btn confirm-yes">Yes</button><button class="modal-btn confirm-no">No</button>'
    );

    const yesBtn = document.querySelector('.confirm-yes');
    const noBtn = document.querySelector('.confirm-no');

    if (yesBtn) {
        yesBtn.addEventListener('click', () => {
            const questions = document.querySelectorAll(".spelling-task-question");
            questions.forEach((_, index) => {
                if (!completedQuestions.includes(index)) completedQuestions.push(index);
            });
            updateRemainingItems();

            score = 0;
            totalQuestions = questions.length;

            questions.forEach((question) => {
                const boxes = question.querySelectorAll(".spelling-task-box");
                let questionCorrect = true;

                boxes.forEach((box) => {
                    const letter = box.querySelector(".spelling-task-letter");
                    const correctLetter = box.getAttribute("data-correct-letter");
                    let boxCorrect = false;

                    if (letter) {
                        // Nếu ô có chữ cái, kiểm tra xem chữ cái có đúng không
                        if (letter.textContent.trim().toLowerCase() === correctLetter) {
                            boxCorrect = true;
                        }
                        // Thêm lớp correct hoặc incorrect cho chữ cái
                        letter.classList.remove('correct', 'incorrect');
                        if (boxCorrect) {
                            letter.classList.add('correct');
                        } else {
                            letter.classList.add('incorrect');
                            questionCorrect = false;
                        }
                    } else {
                        // Nếu ô trống, đánh dấu ô là incorrect
                        box.classList.remove('correct', 'incorrect');
                        box.classList.add('incorrect');
                        questionCorrect = false;
                    }
                });

                // Thêm lớp correct/incorrect cho câu hỏi
                question.classList.remove('correct', 'incorrect');
                if (questionCorrect) {
                    score += 1;
                    question.classList.add("correct");
                } else {
                    question.classList.add("incorrect");
                }
            });

            const percentage = (score / totalQuestions) * 100;
            displayScore(percentage);

            // Khóa nút Finish, thêm lớp locked để làm đậm màu, và khóa kéo-thả
            finishBtn.disabled = true;
            finishBtn.classList.add('locked');
            lockDragAndDropTask1();
        });
    }

    if (noBtn) noBtn.addEventListener('click', hideSpellingModal);
});

// Sự kiện "Try again"
document.querySelector(".spelling-task-retry-btn")?.addEventListener("click", () => {
    showSpellingModal(
        'Are you sure you want to try again ?',
        '<button class="modal-btn modal-confirm">Yes</button><button class="modal-btn modal-cancel">No</button>'
    );

    const confirmBtn = document.querySelector('.modal-confirm');
    const cancelBtn = document.querySelector('.modal-cancel');

    if (confirmBtn) {
        confirmBtn.addEventListener('click', () => {
            const questions = document.querySelectorAll(".spelling-task-question");
            questions.forEach((question) => {
                question.classList.remove("correct", "incorrect");
                const letterContainer = question.querySelector(".spelling-task-letters");
                const boxes = question.querySelectorAll(".spelling-task-box");

                boxes.forEach((box) => {
                    box.classList.remove("correct", "incorrect"); // Xóa lớp màu của ô
                    const letter = box.querySelector(".spelling-task-letter");
                    if (letter) {
                        letter.classList.remove("correct", "incorrect"); // Xóa lớp màu của chữ cái
                        letter.setAttribute("draggable", "true");
                        letter.style.cursor = "grab";
                        letter.classList.remove("no-arrow");
                        letterContainer.appendChild(letter);
                    }
                });
            });

            completedQuestions = [];
            updateRemainingItems();
            showQuestion(0);
            hideSpellingModal();

            // Kích hoạt lại nút Finish và kéo-thả
            finishBtn.disabled = false;
            finishBtn.classList.remove('locked');
            isDragDropLockedTask1 = false;
            initDragAndDropTask1();
        });
    }

    if (cancelBtn) cancelBtn.addEventListener('click', hideSpellingModal);
});

document.querySelectorAll('.spelling-task-audio').forEach(btn => {
    btn.addEventListener('click', () => {
        const audio = new Audio(btn.dataset.audio);
        audio.play();
    });
});


// Khởi tạo khi trang tải
document.addEventListener("DOMContentLoaded", () => {
    showQuestion(currentIndex);
    updateRemainingItems();
});

