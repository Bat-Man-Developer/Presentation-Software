// ===============================================
// AI For Secretaries & Administrators JS
// ===============================================

let currentSlideIndex = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;

// Initialize presentation
function initPresentation() {
    document.getElementById('totalSlides').textContent = totalSlides;
    showSlide(0);
    setupQuizListeners();
}

function showSlide(index) {
    // Hide all slides
    slides.forEach(slide => slide.classList.remove('active'));
    
    // Show current slide
    slides[index].classList.add('active');
    
    // Update counter
    document.getElementById('currentSlide').textContent = index + 1;
    
    // Manage buttons
    document.getElementById('prevBtn').disabled = index === 0;
    document.getElementById('nextBtn').disabled = index === totalSlides - 1;
    
    // Show print button only on the last slide
    const printBtn = document.getElementById('printBtn');
    if (index === totalSlides - 1) {
        printBtn.style.display = 'block';
    } else {
        printBtn.style.display = 'none';
    }
}

function changeSlide(direction) {
    currentSlideIndex += direction;
    
    if (currentSlideIndex < 0) {
        currentSlideIndex = 0;
    } else if (currentSlideIndex >= totalSlides) {
        currentSlideIndex = totalSlides - 1;
    }
    
    showSlide(currentSlideIndex);
}

// Keyboard navigation
document.addEventListener('keydown', function(event) {
    if (event.key === 'ArrowLeft') {
        changeSlide(-1);
    } else if (event.key === 'ArrowRight') {
        changeSlide(1);
    }
});

// ===============================================
// LAB SIMULATIONS
// ===============================================

function evaluatePrompt() {
    const input = document.getElementById('prompt-input-1').value.toLowerCase();
    const resultDiv = document.getElementById('prompt-result-1');
    
    if (!input.trim()) {
        resultDiv.innerHTML = '<p style="color: red;">Please enter a prompt first.</p>';
        resultDiv.style.display = 'block';
        return;
    }

    let feedback = '<h4>Prompt Analysis:</h4><ul>';
    let score = 0;

    if (input.includes('postpone') || input.includes('imbizo') || input.includes('meeting')) {
        feedback += '<li style="color: green;">Context provided: Yes.</li>';
        score++;
    } else {
        feedback += '<li style="color: orange;">Context missing: Mention the specific event (imbizo/meeting) being postponed.</li>';
    }

    if (input.includes('department heads') || input.includes('manager')) {
        feedback += '<li style="color: green;">Audience defined: Yes.</li>';
        score++;
    } else {
        feedback += '<li style="color: orange;">Audience missing: Tell the AI who the email is for (Department Heads).</li>';
    }

    if (input.includes('apologetic') || input.includes('professional') || input.includes('tone')) {
        feedback += '<li style="color: green;">Tone defined: Yes.</li>';
        score++;
    } else {
        feedback += '<li style="color: orange;">Tone missing: Instruct the AI to be professional and apologetic.</li>';
    }

    feedback += '</ul>';

    if (score === 3) {
        feedback += '<p style="color: green; font-weight: bold;">Excellent prompt! The AI has enough specific information to generate a great draft.</p>';
    } else {
        feedback += '<p>Try adding the missing elements to get a better result from the AI.</p>';
    }

    resultDiv.innerHTML = feedback;
    resultDiv.style.display = 'block';
}

function runSummarization() {
    const resultDiv = document.getElementById('summarization-result');
    
    const output = `
        <h4>AI Extraction Result:</h4>
        <div style="background: white; padding: 15px; border-radius: 5px; border: 1px solid #d7d1c5;">
            <strong>Action Items:</strong>
            <ul>
                <li><strong>Thabo:</strong> Compile data for budget report (Due: Wednesday)</li>
                <li><strong>Nomsa:</strong> Book boardroom for review meeting (Due: Friday morning)</li>
                <li><strong>Nomsa:</strong> Arrange catering for review meeting (Due: Friday morning)</li>
            </ul>
        </div>
        <p style="margin-top: 10px; font-weight: bold; color: var(--secondary-color);">Notice how AI automatically associated the tasks with the correct individuals and deadlines.</p>
    `;
    
    resultDiv.innerHTML = output;
    resultDiv.style.display = 'block';
}

function checkPrivacyPrompt() {
    const resultDiv = document.getElementById('privacy-result');
    const promptB = document.getElementById('promptB').checked;
    
    if (!document.querySelector('input[name="privacyPrompt"]:checked')) {
        resultDiv.innerHTML = '<p style="color: red;">Please select an option.</p>';
        resultDiv.style.display = 'block';
        return;
    }

    if (promptB) {
        resultDiv.innerHTML = '<h4 style="color: green;">Correct!</h4><p>Prompt B contains no sensitive personal information or internal financial data. It is a general business request, making it safe for public AI tools.</p>';
    } else {
        resultDiv.innerHTML = '<h4 style="color: red;">Incorrect.</h4><p>This prompt contains Personally Identifiable Information (PII) or sensitive internal financials. You must never put this data into public AI tools.</p>';
    }
    
    resultDiv.style.display = 'block';
}

function generateOutline() {
    const t1 = document.getElementById('topic1').value;
    const t2 = document.getElementById('topic2').value;
    const t3 = document.getElementById('topic3').value;
    const resultDiv = document.getElementById('outline-result');

    if (!t1 && !t2 && !t3) {
        resultDiv.innerHTML = '<p style="color: red;">Please enter at least one topic.</p>';
        resultDiv.style.display = 'block';
        return;
    }

    let outline = `
        <h4>Generated Report Outline:</h4>
        <div style="background: white; padding: 15px; border-radius: 5px; border: 1px solid #d7d1c5; text-align: left;">
            <p><strong>1. Executive Summary</strong></p>
            <p><strong>2. Key Administrative Updates</strong></p>
            <ul>
                ${t1 ? `<li>Update on: ${t1}</li>` : ''}
                ${t2 ? `<li>Update on: ${t2}</li>` : ''}
                ${t3 ? `<li>Update on: ${t3}</li>` : ''}
            </ul>
            <p><strong>3. Challenges & Resolutions</strong></p>
            <p><strong>4. Action Items for Next Month</strong></p>
        </div>
    `;

    resultDiv.innerHTML = outline;
    resultDiv.style.display = 'block';
}

// ===============================================
// QUIZ LOGIC
// ===============================================

let selectedAnswers = {};

function setupQuizListeners() {
    document.querySelectorAll('.quiz-options li').forEach(option => {
        option.addEventListener('click', function() {
            const questionId = this.closest('.question').id;
            const questionOptions = this.closest('.quiz-options').querySelectorAll('li');
            
            // Remove previous selections
            questionOptions.forEach(opt => opt.classList.remove('selected'));
            
            // Add selection to clicked option
            this.classList.add('selected');
            
            // Store the answer
            selectedAnswers[questionId] = this.dataset.answer;
        });
    });
}

function submitAssessment() {
    const totalQuestions = 3;
    
    if (Object.keys(selectedAnswers).length < totalQuestions) {
        alert('Please answer all questions before submitting.');
        return;
    }

    let correctCount = 0;

    // Grade answers
    Object.keys(selectedAnswers).forEach(questionId => {
        const userAnswer = selectedAnswers[questionId];
        const questionElement = document.getElementById(questionId);
        const options = questionElement.querySelectorAll('.quiz-options li');
        
        if (userAnswer === 'correct') {
            correctCount++;
            options.forEach(option => {
                if (option.dataset.answer === 'correct') {
                    option.classList.add('correct');
                }
            });
        } else {
            options.forEach(option => {
                if (option.classList.contains('selected')) {
                    option.classList.add('incorrect');
                }
                if (option.dataset.answer === 'correct') {
                    option.classList.add('correct');
                }
            });
        }
    });

    // Display result
    const resultDiv = document.getElementById('quiz-final-result');
    const percentage = Math.round((correctCount / totalQuestions) * 100);
    
    let resultClass = 'needs-improvement';
    let message = `You scored ${correctCount} out of ${totalQuestions} (${percentage}%). `;

    if (percentage === 100) {
        resultClass = 'excellent';
        message += 'Excellent! You are ready to integrate AI securely and effectively into your workflow.';
    } else {
        message += 'Please review the highlighted correct answers above.';
    }

    resultDiv.className = `quiz-result ${resultClass}`;
    resultDiv.innerHTML = `<p>${message}</p>`;
    resultDiv.style.display = 'block';

    // Disable further clicking
    document.querySelectorAll('.quiz-options li').forEach(option => {
        option.style.pointerEvents = 'none';
    });
    
    document.querySelector('.submit-btn').disabled = true;
    document.querySelector('.submit-btn').textContent = 'Assessment Completed';
}

// Start presentation on load
window.onload = initPresentation;