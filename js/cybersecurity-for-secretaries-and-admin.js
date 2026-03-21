// ====================================================
// Cybersecurity For Secretaries & Administrators JS
// ====================================================

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

function checkPhishing() {
    const resultDiv = document.getElementById('phishing-result');
    const isPhish = document.getElementById('phish_scam').checked;
    
    if (!document.querySelector('input[name="phishPrompt"]:checked')) {
        resultDiv.innerHTML = '<p style="color: var(--primary-color);">Please select an option.</p>';
        resultDiv.style.display = 'block';
        return;
    }

    if (isPhish) {
        resultDiv.innerHTML = `
            <h4 style="color: var(--accent-green);">[Correct] It is a phishing attempt.</h4>
            <p>Good catch! Red flags include:</p>
            <ul>
                <li>Suspicious sender domain (company-admin-portal.com is fake).</li>
                <li>Urgent, threatening language (access terminated at 5:00 PM).</li>
                <li>Generic greeting (Dear Staff Member).</li>
                <li>Suspicious URL (secure-login-update.net).</li>
            </ul>
        `;
    } else {
        resultDiv.innerHTML = `
            <h4 style="color: var(--accent-red);">[Incorrect] This is a dangerous phishing email.</h4>
            <p>Notice the fake sender domain, the urgent threat of account termination, and the generic greeting. IT departments do not threaten immediate termination via generic emails.</p>
        `;
    }
    
    resultDiv.style.display = 'block';
}

function testPassword() {
    const password = document.getElementById('password-input').value;
    const resultDiv = document.getElementById('password-result');

    if (!password) {
        resultDiv.innerHTML = '<p style="color: var(--primary-color);">Please enter a sample password.</p>';
        resultDiv.style.display = 'block';
        return;
    }

    let score = 0;
    let feedback = [];

    if (password.length >= 12) {
        score += 2;
    } else if (password.length >= 8) {
        score += 1;
        feedback.push("Make it longer (12+ characters or use a passphrase).");
    } else {
        feedback.push("Way too short. Use at least 12 characters.");
    }

    if (/[A-Z]/.test(password)) score += 1;
    else feedback.push("Add uppercase letters.");

    if (/[a-z]/.test(password)) score += 1;
    else feedback.push("Add lowercase letters.");

    if (/[0-9]/.test(password)) score += 1;
    else feedback.push("Add numbers.");

    if (/[^A-Za-z0-9]/.test(password)) score += 1;
    else feedback.push("Add special characters.");

    let outputHtml = '<h4>Analysis Results:</h4>';

    if (score >= 5) {
        outputHtml += '<p style="color: var(--accent-green); font-weight: bold;">[Strong] This password would take a very long time to crack.</p>';
    } else if (score >= 3) {
        outputHtml += '<p style="color: var(--accent-gold); font-weight: bold;">[Moderate] This password is okay, but could be stronger.</p>';
    } else {
        outputHtml += '<p style="color: var(--accent-red); font-weight: bold;">[Weak] This password could be cracked instantly.</p>';
    }

    if (feedback.length > 0) {
        outputHtml += '<ul>';
        feedback.forEach(item => {
            outputHtml += `<li>${item}</li>`;
        });
        outputHtml += '</ul>';
    }

    resultDiv.innerHTML = outputHtml;
    resultDiv.style.display = 'block';
}

function checkNetwork() {
    const resultDiv = document.getElementById('network-result');
    const useVpn = document.getElementById('net_vpn').checked;
    
    if (!document.querySelector('input[name="netPrompt"]:checked')) {
        resultDiv.innerHTML = '<p style="color: var(--primary-color);">Please select an option.</p>';
        resultDiv.style.display = 'block';
        return;
    }

    if (useVpn) {
        resultDiv.innerHTML = `
            <h4 style="color: var(--accent-green);">[Correct] Safe Choice.</h4>
            <p>Using a company-approved VPN encrypts your traffic, creating a secure tunnel even over an unsecured public Wi-Fi network.</p>
        `;
    } else {
        resultDiv.innerHTML = `
            <h4 style="color: var(--accent-red);">[Incorrect] Unsafe Choice.</h4>
            <p>Connecting to public Wi-Fi without a VPN exposes your data to interception. Never send sensitive corporate information over an open, unencrypted network.</p>
        `;
    }
    
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
        message += '[Excellent] You have a strong grasp of cybersecurity fundamentals.';
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