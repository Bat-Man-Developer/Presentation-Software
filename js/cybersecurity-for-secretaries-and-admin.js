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
// INTERACTIVE SIMULATIONS
// ===============================================

function checkEmailSecurity() {
    const resultDiv = document.getElementById('email-result');
    const isThreat = document.getElementById('email_threat').checked;
    
    if (!document.querySelector('input[name="emailPrompt"]:checked')) {
        resultDiv.innerHTML = '<p style="color: var(--primary-color);">Please select an assessment option.</p>';
        resultDiv.style.display = 'block';
        return;
    }

    if (isThreat) {
        resultDiv.innerHTML = `
            <h4 style="color: var(--accent-green);">[Correct Assessment] This is a phishing attempt.</h4>
            <p><strong>Security indicators identified:</strong></p>
            <ul>
                <li>Suspicious sender domain (company-systems-update.com is not legitimate).</li>
                <li>Urgent threatening language with artificial time pressure (2 hours).</li>
                <li>Generic greeting (Dear Team Member instead of your name).</li>
                <li>Suspicious verification URL (security-verification-portal.net).</li>
                <li>Threats of account suspension to create panic.</li>
            </ul>
        `;
    } else {
        resultDiv.innerHTML = `
            <h4 style="color: var(--accent-red);">[Incorrect Assessment] This is a dangerous phishing communication.</h4>
            <p>Legitimate IT departments do not request credential verification through external links with time-based threats. Always verify such requests through established internal communication channels.</p>
        `;
    }
    
    resultDiv.style.display = 'block';
}

function evaluatePassword() {
    const password = document.getElementById('password-input').value;
    const resultDiv = document.getElementById('password-result');

    if (!password) {
        resultDiv.innerHTML = '<p style="color: var(--primary-color);">Please enter a sample password for analysis.</p>';
        resultDiv.style.display = 'block';
        return;
    }

    let securityScore = 0;
    let recommendations = [];

    // Length evaluation
    if (password.length >= 14) {
        securityScore += 3;
    } else if (password.length >= 10) {
        securityScore += 2;
        recommendations.push("Consider using longer passphrases (14+ characters) for enhanced security.");
    } else if (password.length >= 8) {
        securityScore += 1;
        recommendations.push("Increase length significantly. Use passphrases or longer combinations.");
    } else {
        recommendations.push("Critical: Password too short. Minimum 12 characters recommended.");
    }

    // Character variety evaluation
    if (/[A-Z]/.test(password)) securityScore += 1;
    else recommendations.push("Include uppercase letters.");

    if (/[a-z]/.test(password)) securityScore += 1;
    else recommendations.push("Include lowercase letters.");

    if (/[0-9]/.test(password)) securityScore += 1;
    else recommendations.push("Include numeric characters.");

    if (/[^A-Za-z0-9]/.test(password)) securityScore += 1;
    else recommendations.push("Include special characters or symbols.");

    // Dictionary word check (basic)
    const commonWords = ['password', 'admin', 'user', 'login', 'welcome', 'company'];
    if (commonWords.some(word => password.toLowerCase().includes(word))) {
        securityScore -= 2;
        recommendations.push("Avoid common dictionary words in passwords.");
    }

    let assessmentHtml = '<h4>Security Assessment Results:</h4>';

    if (securityScore >= 6) {
        assessmentHtml += '<p style="color: var(--accent-green); font-weight: bold;">[Strong Security] This password provides excellent protection against automated attacks.</p>';
    } else if (securityScore >= 4) {
        assessmentHtml += '<p style="color: var(--accent-gold); font-weight: bold;">[Moderate Security] This password is acceptable but could be strengthened.</p>';
    } else {
        assessmentHtml += '<p style="color: var(--accent-red); font-weight: bold;">[Weak Security] This password is vulnerable to rapid compromise.</p>';
    }

    if (recommendations.length > 0) {
        assessmentHtml += '<p><strong>Security Enhancement Recommendations:</strong></p><ul>';
        recommendations.forEach(recommendation => {
            assessmentHtml += `<li>${recommendation}</li>`;
        });
        assessmentHtml += '</ul>';
    }

    resultDiv.innerHTML = assessmentHtml;
    resultDiv.style.display = 'block';
}

function evaluateConnectivity() {
    const resultDiv = document.getElementById('connectivity-result');
    const secureChoice = document.getElementById('conn_secure').checked;
    
    if (!document.querySelector('input[name="connPrompt"]:checked')) {
        resultDiv.innerHTML = '<p style="color: var(--primary-color);">Please select a connectivity option.</p>';
        resultDiv.style.display = 'block';
        return;
    }

    if (secureChoice) {
        resultDiv.innerHTML = `
            <h4 style="color: var(--accent-green);">[Optimal Security Choice]</h4>
            <p><strong>Excellent decision.</strong> Using an organization-approved VPN creates an encrypted tunnel that protects your communications even over untrusted public networks. This approach maintains confidentiality and integrity of sensitive business data.</p>
        `;
    } else {
        resultDiv.innerHTML = `
            <h4 style="color: var(--accent-red);">[Security Risk Identified]</h4>
            <p><strong>Suboptimal choice.</strong> Connecting to public networks without VPN protection exposes confidential business communications to potential interception. Always use organization-approved VPN solutions when accessing sensitive information outside the secure office environment.</p>
        `;
    }
    
    resultDiv.style.display = 'block';
}

// ===============================================
// ASSESSMENT QUIZ LOGIC
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
    const totalQuestions = 4;
    
    if (Object.keys(selectedAnswers).length < totalQuestions) {
        alert('Please complete all assessment questions before submitting.');
        return;
    }

    let correctAnswers = 0;

    // Evaluate and display results
    Object.keys(selectedAnswers).forEach(questionId => {
        const userAnswer = selectedAnswers[questionId];
        const questionElement = document.getElementById(questionId);
        const options = questionElement.querySelectorAll('.quiz-options li');
        
        if (userAnswer === 'correct') {
            correctAnswers++;
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

    // Generate assessment results
    const resultDiv = document.getElementById('quiz-final-result');
    const percentage = Math.round((correctAnswers / totalQuestions) * 100);
    
    let resultClass = 'needs-improvement';
    let assessmentMessage = `Assessment Complete: ${correctAnswers} of ${totalQuestions} correct (${percentage}%). `;

    if (percentage === 100) {
        resultClass = 'excellent';
        assessmentMessage += 'Excellent! You demonstrate strong cybersecurity awareness and professional security practices.';
    } else if (percentage >= 75) {
        resultClass = 'good';
        assessmentMessage += 'Good performance! Review the highlighted correct responses to strengthen your security knowledge.';
    } else {
        assessmentMessage += 'Additional study recommended. Please review the correct answers and consider revisiting key security concepts.';
    }

    resultDiv.className = `quiz-result ${resultClass}`;
    resultDiv.innerHTML = `<p>${assessmentMessage}</p>`;
    resultDiv.style.display = 'block';

    // Disable further interaction
    document.querySelectorAll('.quiz-options li').forEach(option => {
        option.style.pointerEvents = 'none';
    });
    
    document.querySelector('.submit-btn').disabled = true;
    document.querySelector('.submit-btn').textContent = 'Assessment Completed';
    document.querySelector('.submit-btn').style.background = 'var(--border-medium)';
}

// Initialize presentation when page loads
window.onload = initPresentation;