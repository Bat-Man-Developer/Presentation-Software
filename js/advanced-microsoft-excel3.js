// Advanced Microsoft Excel Day 3 JS (Specific Outcome 3: Insert & Edit Objects)

let currentSlideIndex = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;

let labResults = {
    objectLab1: false,
    shapeStudioLab: false,
    activity4Lab: false
};

let selectedQuizAnswers = {};
let quizAttempts = 0;
const maxQuizAttempts = 3;

document.addEventListener('DOMContentLoaded', function() {
    initializePresentation();
    setupInteractiveLabs();
    setupKeyboardNavigation();
});

function initializePresentation() {
    const totalEl = document.getElementById('totalSlides');
    if (totalEl) totalEl.textContent = totalSlides;
    showSlide(currentSlideIndex);
}

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.remove('active');
        if (i === index) slide.classList.add('active');
    });

    document.getElementById('currentSlide').textContent = index + 1;
    document.getElementById('prevBtn').disabled = index === 0;
    document.getElementById('nextBtn').disabled = index === totalSlides - 1;

    const printBtn = document.getElementById('printBtn');
    if (printBtn) {
        printBtn.style.display = index === totalSlides - 1 ? 'block' : 'none';
    }
}

function changeSlide(direction) {
    currentSlideIndex += direction;
    if (currentSlideIndex < 0) currentSlideIndex = 0;
    if (currentSlideIndex >= totalSlides) currentSlideIndex = totalSlides - 1;
    showSlide(currentSlideIndex);
}

function setupKeyboardNavigation() {
    document.addEventListener('keydown', function(e) {
        if (e.target.tagName === 'INPUT' || e.target.tagName === 'SELECT') return;
        switch (e.key) {
            case 'ArrowLeft':
                if (currentSlideIndex > 0) changeSlide(-1);
                break;
            case 'ArrowRight':
                if (currentSlideIndex < totalSlides - 1) changeSlide(1);
                break;
            case 'Home':
                currentSlideIndex = 0;
                showSlide(currentSlideIndex);
                break;
            case 'End':
                currentSlideIndex = totalSlides - 1;
                showSlide(currentSlideIndex);
                break;
        }
    });
}

/* =========================================
   LAB 1: LINKING & RESIZE MODIFIERS
   ========================================= */

function checkObjectLab1() {
    const l1 = document.getElementById('obj-link1').value;
    const k1 = document.getElementById('obj-key1').value;
    const m1 = document.getElementById('obj-multi').value;
    const e1 = document.getElementById('obj-exact').value;
    const resultBox = document.getElementById('obj-lab1-result');
    resultBox.style.display = 'block';

    let score = 0;
    if (l1 === 'correct') score += 25;
    if (k1 === 'correct') score += 25;
    if (m1 === 'correct') score += 25;
    if (e1 === 'correct') score += 25;

    if (score === 100) {
        resultBox.style.background = 'linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%)';
        resultBox.style.color = '#155724';
        resultBox.style.border = '2px solid #28a745';
        resultBox.innerHTML = '<strong>🎉 100% Correct!</strong> You mastered Insert and Link, CTRL+SHIFT proportional center resizing, CTRL multi-select, and Format Object sizing.';
        labResults.objectLab1 = true;
        markLabComplete('lab1-status', 'Lab 1: Picture Linking & Resize Modifiers');
    } else {
        resultBox.style.background = 'linear-gradient(135deg, #fff3cd 0%, #ffeaa7 100%)';
        resultBox.style.color = '#856404';
        resultBox.style.border = '2px solid #f39c12';
        resultBox.innerHTML = `<strong>Score: ${score}/100.</strong> Review Slides 4–6 and Slide 10 for exact image insertion and resizing controls.`;
    }
    updateLabProgress();
}

/* =========================================
   LAB 2: SHAPE DRAWING & STYLING STUDIO
   ========================================= */

function updateDrawnShape() {
    const shape = document.getElementById('shape-select').value;
    const angle = document.getElementById('shape-rotate').value;
    const fill = document.getElementById('shape-fill').value;
    const outline = document.getElementById('shape-outline').value;

    document.getElementById('rotate-val').textContent = angle;
    const svg = document.getElementById('live-shape-svg');
    const stage = document.getElementById('shape-stage');

    let shapeMarkup = '';
    if (shape === 'rectangle') {
        shapeMarkup = `<rect x="20" y="35" width="140" height="110" fill="${fill}" stroke="${outline}" stroke-width="5" />`;
    } else if (shape === 'circle') {
        shapeMarkup = `<circle cx="90" cy="90" r="65" fill="${fill}" stroke="${outline}" stroke-width="5" />`;
    } else if (shape === 'triangle') {
        shapeMarkup = `<polygon points="25,25 25,155 155,155" fill="${fill}" stroke="${outline}" stroke-width="5" />`;
    }

    // Add green rotation handle indicator at top
    const handleMarkup = `
        <line x1="90" y1="25" x2="90" y2="8" stroke="#666" stroke-width="2" />
        <circle cx="90" cy="8" r="6" fill="#2ecc71" stroke="#146c43" stroke-width="2" />
    `;

    svg.innerHTML = handleMarkup + shapeMarkup;
    stage.style.transform = `rotate(${angle}deg)`;
}

function verifyShapeChallenge() {
    const shape = document.getElementById('shape-select').value;
    const angle = parseInt(document.getElementById('shape-rotate').value, 10);
    const fill = document.getElementById('shape-fill').value;
    const outline = document.getElementById('shape-outline').value;

    const resultBox = document.getElementById('shape-studio-result');
    resultBox.style.display = 'block';

    if (shape === 'triangle' && angle !== 0 && fill === '#ffeb3b' && outline === '#ffeb3b') {
        resultBox.style.background = 'linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%)';
        resultBox.style.color = '#155724';
        resultBox.style.border = '2px solid #28a745';
        resultBox.innerHTML = '<strong>🎨 Exercise Mastered!</strong> You drew a Right Triangle, rotated it using the green handle, and applied matching Yellow Shape Fill and Shape Outline!';
        labResults.shapeStudioLab = true;
        markLabComplete('lab2-status', 'Lab 2: Shape Drawing & Styling Studio');
    } else {
        resultBox.style.background = 'linear-gradient(135deg, #fff3cd 0%, #ffeaa7 100%)';
        resultBox.style.color = '#856404';
        resultBox.style.border = '2px solid #f39c12';
        resultBox.innerHTML = '<strong>⚠️ Almost there!</strong> Match Learner Guide Pages 37–39: select <strong>Right Triangle</strong>, rotate it away from 0°, and set both <strong>Shape Fill</strong> and <strong>Shape Outline</strong> to <strong>Yellow</strong>.';
    }
    updateLabProgress();
}

/* =========================================
   LAB 3 (ACTIVITY 4): PRACTICAL CHECKLIST
   ========================================= */

function checkActivity4Lab() {
    const boxes = document.querySelectorAll('.act4-chk');
    const allChecked = Array.from(boxes).every(b => b.checked);
    const resultBox = document.getElementById('act4-result');
    resultBox.style.display = 'block';

    if (allChecked) {
        resultBox.style.background = 'linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%)';
        resultBox.style.color = '#155724';
        resultBox.style.border = '2px solid #28a745';
        resultBox.innerHTML = '<strong>✅ Activity 4 Complete!</strong> All 7 practical spreadsheet object requirements from the Learner Guide have been verified.';
        labResults.activity4Lab = true;
        markLabComplete('lab3-status', 'Lab 3: Activity 4 Practical Checklist');
    } else {
        resultBox.style.background = 'linear-gradient(135deg, #f8d7da 0%, #f5c6cb 100%)';
        resultBox.style.color = '#721c24';
        resultBox.style.border = '2px solid #dc3545';
        resultBox.innerHTML = '<strong>⚠️ Incomplete:</strong> Complete and check off all 7 Activity 4 tasks in your Excel workbook.';
    }
    updateLabProgress();
}

function markLabComplete(elementId, label) {
    const el = document.getElementById(elementId);
    if (el) {
        el.style.background = '#d4edda';
        el.style.borderLeftColor = '#28a745';
        el.innerHTML = `✅ <strong>${label}</strong> — Completed`;
    }
}

function updateLabProgress() {
    const completed = Object.values(labResults).filter(Boolean).length;
    const total = Object.keys(labResults).length;
    const pct = (completed / total) * 100;
    const bar = document.querySelector('.lab-progress-fill');
    const txt = document.querySelector('.lab-progress-text');
    if (bar) bar.style.width = pct + '%';
    if (txt) txt.textContent = `Labs Completed: ${completed}/${total}`;
}

/* =========================================
   DAY 3 QUIZ SYSTEM (10 QUESTIONS)
   ========================================= */

const quizQuestions = [
    { id: 'q1', correct: 1 },
    { id: 'q2', correct: 0 },
    { id: 'q3', correct: 1 },
    { id: 'q4', correct: 2 },
    { id: 'q5', correct: 0 },
    { id: 'q6', correct: 1 },
    { id: 'q7', correct: 2 },
    { id: 'q8', correct: 1 },
    { id: 'q9', correct: 0 },
    { id: 'q10', correct: 1 }
];

function setupInteractiveLabs() {
    document.querySelectorAll('.quiz-options li').forEach(option => {
        option.addEventListener('click', function() {
            const siblings = this.parentElement.children;
            for (let sib of siblings) sib.classList.remove('selected');
            this.classList.add('selected');
            const questionId = this.closest('.question').id;
            selectedQuizAnswers[questionId] = Array.from(siblings).indexOf(this);
        });
    });
}

function submitQuiz() {
    quizAttempts++;
    let score = 0;
    let answered = 0;

    quizQuestions.forEach(q => {
        if (selectedQuizAnswers[q.id] !== undefined) {
            answered++;
            if (selectedQuizAnswers[q.id] === q.correct) score++;
        }
    });

    const feedback = document.getElementById('quiz-feedback');
    feedback.style.display = 'block';

    if (answered < quizQuestions.length) {
        feedback.style.background = '#f8d7da';
        feedback.style.color = '#721c24';
        feedback.innerHTML = `<strong>⚠️ Incomplete:</strong> Please answer all ${quizQuestions.length} questions (${answered}/${quizQuestions.length} answered).`;
        return;
    }

    const percentage = Math.round((score / quizQuestions.length) * 100);
    const passed = percentage >= 70;
    feedback.style.background = passed ? '#d4edda' : '#f8d7da';
    feedback.style.color = passed ? '#155724' : '#721c24';
    feedback.style.border = `2px solid ${passed ? '#28a745' : '#dc3545'}`;
    feedback.innerHTML = `
        <strong>${passed ? '🏆 Passed!' : '📚 Review Required'}</strong> — Score: ${score}/${quizQuestions.length} (${percentage}%) | Attempt ${quizAttempts}/${maxQuizAttempts}
        ${!passed && quizAttempts < maxQuizAttempts ? '<br><button class="action-btn" onclick="resetQuiz()" style="width:160px;margin-top:10px;">Try Again</button>' : ''}
    `;

    quizQuestions.forEach(q => {
        const qEl = document.getElementById(q.id);
        if (!qEl) return;
        const options = qEl.querySelectorAll('.quiz-options li');
        options.forEach((opt, idx) => {
            opt.classList.remove('correct', 'incorrect');
            if (idx === q.correct) opt.classList.add('correct');
            else if (opt.classList.contains('selected')) opt.classList.add('incorrect');
        });
    });
}

function resetQuiz() {
    selectedQuizAnswers = {};
    document.querySelectorAll('.quiz-options li').forEach(opt => {
        opt.classList.remove('selected', 'correct', 'incorrect');
    });
    document.getElementById('quiz-feedback').style.display = 'none';
}