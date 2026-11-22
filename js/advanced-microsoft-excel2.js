// Advanced Microsoft Excel Day 2 JS (Specific Outcome 2: External Data Sources)

let currentSlideIndex = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;

let labResults = {
    importWizardLab: false,
    wordImportLab: false
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
   LAB 1: TEXT IMPORT WIZARD SIMULATOR
   ========================================= */

function checkImportWizard() {
    const type = document.getElementById('wiz-type').value;
    const delim = document.getElementById('wiz-delim').value;
    const col = document.getElementById('wiz-col').value;
    const adv = document.getElementById('wiz-adv').value;
    const resultBox = document.getElementById('wizard-result');
    resultBox.style.display = 'block';

    let score = 0;
    if (type === 'correct') score += 25;
    if (delim === 'correct') score += 25;
    if (col === 'correct') score += 25;
    if (adv === 'correct') score += 25;

    if (score === 100) {
        resultBox.style.background = 'linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%)';
        resultBox.style.color = '#155724';
        resultBox.style.border = '2px solid #28a745';
        resultBox.innerHTML = `
            <strong>🎉 Import Successful (100/100)!</strong><br>
            Row 1 was skipped, semicolon delimiters split columns cleanly while quotes protected <em>"Cape Tech; Ltd"</em>, AccountCode kept leading zeros as Text, and <code>1250,50</code> converted cleanly into a number!
        `;
        labResults.importWizardLab = true;
        markLabComplete('lab1-status', 'Lab 1: Text Import Wizard Simulator');
    } else {
        resultBox.style.background = 'linear-gradient(135deg, #fff3cd 0%, #ffeaa7 100%)';
        resultBox.style.color = '#856404';
        resultBox.style.border = '2px solid #f39c12';
        resultBox.innerHTML = `<strong>Score: ${score}/100.</strong> Hints: Start at Row 2 (skip banner), use Semicolon + Double-quote qualifier, set AccountCode to Text, and set Decimal separator to Comma (,).`;
    }
    updateLabProgress();
}

/* =========================================
   LAB 2 (ACTIVITY 3): WORD TABLE IMPORT
   ========================================= */

function checkWordImportLab() {
    const allChecked = [
        document.getElementById('w-check1').checked,
        document.getElementById('w-check2').checked,
        document.getElementById('w-check3').checked,
        document.getElementById('w-check4').checked
    ].every(Boolean);

    const resultBox = document.getElementById('word-import-result');
    resultBox.style.display = 'block';

    if (allChecked) {
        resultBox.style.background = 'linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%)';
        resultBox.style.color = '#155724';
        resultBox.style.border = '2px solid #28a745';
        resultBox.innerHTML = '<strong>✅ Activity 3 Verified!</strong> All four compatibility and validation steps are essential before and after importing a Word table into Excel.';
        labResults.wordImportLab = true;
        markLabComplete('lab2-status', 'Lab 2: Word Table Import Validator (Activity 3)');
    } else {
        resultBox.style.background = 'linear-gradient(135deg, #f8d7da 0%, #f5c6cb 100%)';
        resultBox.style.color = '#721c24';
        resultBox.style.border = '2px solid #dc3545';
        resultBox.innerHTML = '<strong>⚠️ Incomplete:</strong> Every single checklist step is required to guarantee a compatible Word table import.';
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
   DAY 2 QUIZ SYSTEM (10 QUESTIONS)
   ========================================= */

const quizQuestions = [
    { id: 'q1', correct: 0 },
    { id: 'q2', correct: 1 },
    { id: 'q3', correct: 2 },
    { id: 'q4', correct: 1 },
    { id: 'q5', correct: 0 },
    { id: 'q6', correct: 1 },
    { id: 'q7', correct: 2 },
    { id: 'q8', correct: 2 },
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