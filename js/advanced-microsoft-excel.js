// Advanced Microsoft Excel Day 1 JS (Specific Outcome 1: Create and Edit a Graph)

let currentSlideIndex = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;

// Lab completion tracking
let labResults = {
    graphMatcherLab: false,
    activity2Lab: false
};

// Quiz state management
let selectedQuizAnswers = {};
let quizAttempts = 0;
const maxQuizAttempts = 3;

document.addEventListener('DOMContentLoaded', function() {
    initializePresentation();
    setupInteractiveLabs();
    setupKeyboardNavigation();
    updateProgressBar();
});

function initializePresentation() {
    const totalEl = document.getElementById('totalSlides');
    if (totalEl) totalEl.textContent = totalSlides;
    showSlide(currentSlideIndex);
    initializeSpreadsheetSimulator();
}

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.remove('active');
        if (i === index) {
            slide.classList.add('active');
        }
    });

    document.getElementById('currentSlide').textContent = index + 1;
    document.getElementById('prevBtn').disabled = index === 0;
    document.getElementById('nextBtn').disabled = index === totalSlides - 1;

    updateProgressBar();
    updateNavigationButtons(index);
}

function changeSlide(direction) {
    currentSlideIndex += direction;
    if (currentSlideIndex < 0) currentSlideIndex = 0;
    if (currentSlideIndex >= totalSlides) currentSlideIndex = totalSlides - 1;
    showSlide(currentSlideIndex);
}

function updateProgressBar() {
    const progress = ((currentSlideIndex + 1) / totalSlides) * 100;
    const progressBar = document.querySelector('.slide-progress-fill');
    if (progressBar) {
        progressBar.style.width = progress + '%';
    }
}

function updateNavigationButtons(index) {
    const printBtn = document.getElementById('printBtn');
    if (printBtn) {
        printBtn.style.display = index === totalSlides - 1 ? 'block' : 'none';
    }
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

function initializeSpreadsheetSimulator() {
    const cells = document.querySelectorAll('.grid-cell:not(.grid-header)');
    cells.forEach(cell => {
        cell.addEventListener('click', function() {
            cells.forEach(c => c.classList.remove('active'));
            this.classList.add('active');
        });
    });
}

/* =========================================
   LAB 1 (ACTIVITY 1): GRAPH TYPE MATCHER
   ========================================= */

function checkGraphMatcher() {
    const q1 = document.getElementById('match-pie').value;
    const q2 = document.getElementById('match-line').value;
    const q3 = document.getElementById('match-scatter').value;
    const q4 = document.getElementById('match-area').value;
    const resultBox = document.getElementById('graph-matcher-result');
    resultBox.style.display = 'block';

    let score = 0;
    if (q1 === 'pie') score += 25;
    if (q2 === 'line') score += 25;
    if (q3 === 'scatter') score += 25;
    if (q4 === 'area') score += 25;

    if (score === 100) {
        resultBox.style.background = 'linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%)';
        resultBox.style.color = '#155724';
        resultBox.style.border = '2px solid #28a745';
        resultBox.innerHTML = '<strong>🎉 100% Correct!</strong> You accurately matched Pie (part-to-whole), Line (scores over time), Scatter (correlation), and Area (cumulative totals).';
        labResults.graphMatcherLab = true;
        markLabComplete('lab1-status', 'Lab 1: Graph Type & Purpose Matcher');
    } else {
        resultBox.style.background = 'linear-gradient(135deg, #fff3cd 0%, #ffeaa7 100%)';
        resultBox.style.color = '#856404';
        resultBox.style.border = '2px solid #f39c12';
        resultBox.innerHTML = `<strong>Score: ${score}/100.</strong> Review Slides 3–7: Pie = parts of a whole, Line = trends over time, Scatter = correlation, Area = cumulative stacked series.`;
    }
    updateLabProgress();
}

function updateChart(type) {
    const display = document.getElementById('chart-display');
    const feedback = document.getElementById('chart-feedback');
    display.innerHTML = '';
    display.style.alignItems = 'flex-end';

    if (type === 'column') {
        const data = [
            { label: '7/2', h: '70px', val: '0.4 cm' },
            { label: '7/3', h: '120px', val: '0.7 cm' },
            { label: '7/4', h: '6px', val: '0.0 cm' },
            { label: '7/5', h: '185px', val: '1.1 cm' },
            { label: '7/6', h: '55px', val: '0.3 cm' }
        ];
        display.innerHTML = data.map(d =>
            `<div class="chart-bar" style="height:${d.h};" data-value="${d.label}: ${d.val}"></div>`
        ).join('');
        feedback.innerHTML = '<strong>Bar/Column Chart:</strong> Compares discrete categories (e.g., daily rainfall in cm).';
    } else if (type === 'line') {
        display.style.alignItems = 'center';
        display.innerHTML = `
            <svg width="100%" height="200" viewBox="0 0 500 200">
                <polyline fill="none" stroke="#217346" stroke-width="4" points="40,160 120,120 200,110 280,95 360,70 460,40" />
                <circle cx="40" cy="160" r="5" fill="#217346"/>
                <circle cx="120" cy="120" r="5" fill="#217346"/>
                <circle cx="200" cy="110" r="5" fill="#217346"/>
                <circle cx="280" cy="95" r="5" fill="#217346"/>
                <circle cx="360" cy="70" r="5" fill="#217346"/>
                <circle cx="460" cy="40" r="5" fill="#217346"/>
            </svg>`;
        feedback.innerHTML = '<strong>Line Graph:</strong> Connects independent (x-axis) and dependent (y-axis) points to show progression.';
    } else if (type === 'pie') {
        display.style.alignItems = 'center';
        display.innerHTML = `
            <div style="width:160px;height:160px;border-radius:50%;background:conic-gradient(#217346 0% 30%, #33c481 30% 60%, #107c41 60% 82%, #7fdca9 82% 100%);"></div>`;
        feedback.innerHTML = '<strong>Pie Chart:</strong> Displays part-to-whole slices totaling 100% with no axes.';
    }
    feedback.style.display = 'block';
    feedback.style.background = '#e6f4ea';
    feedback.style.color = '#155724';
}

/* =========================================
   LAB 2 (ACTIVITY 2): CHART WORKFLOW
   ========================================= */

function checkActivity2Lab() {
    const t = document.getElementById('act2-type').value;
    const m = document.getElementById('act2-move').value;
    const r = document.getElementById('act2-resize').value;
    const d = document.getElementById('act2-delete').value;
    const checks = [
        document.getElementById('el-title').checked,
        document.getElementById('el-axes').checked,
        document.getElementById('el-labels').checked,
        document.getElementById('el-bg').checked
    ].every(Boolean);

    const resultBox = document.getElementById('activity2-result');
    resultBox.style.display = 'block';

    if (t === 'correct' && m === 'correct' && r === 'correct' && d === 'correct' && checks) {
        resultBox.style.background = 'linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%)';
        resultBox.style.color = '#155724';
        resultBox.style.border = '2px solid #28a745';
        resultBox.innerHTML = '<strong>✅ Excellent!</strong> You mastered every Chart Tools command required for Activity 2 (AC 2–7).';
        labResults.activity2Lab = true;
        markLabComplete('lab2-status', 'Lab 2: Chart Editing & Management Simulator');
    } else {
        resultBox.style.background = 'linear-gradient(135deg, #f8d7da 0%, #f5c6cb 100%)';
        resultBox.style.color = '#721c24';
        resultBox.style.border = '2px solid #dc3545';
        resultBox.innerHTML = '<strong>⚠️ Review Needed:</strong> Ensure all 4 dropdowns use the exact Chart Tools paths (Design → Change Chart Type, Design → Move Chart → New sheet, Format → Size Group, Click chart + Delete) and check all 4 AC 3 elements.';
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
   DAY 1 QUIZ SYSTEM (10 QUESTIONS)
   ========================================= */

const quizQuestions = [
    { id: 'q1', correct: 1 },
    { id: 'q2', correct: 0 },
    { id: 'q3', correct: 2 },
    { id: 'q4', correct: 1 },
    { id: 'q5', correct: 1 },
    { id: 'q6', correct: 2 },
    { id: 'q7', correct: 1 },
    { id: 'q8', correct: 0 },
    { id: 'q9', correct: 2 },
    { id: 'q10', correct: 1 }
];

function setupInteractiveLabs() {
    initializeQuiz();
}

function initializeQuiz() {
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

    showQuizAnswers();
}

function showQuizAnswers() {
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