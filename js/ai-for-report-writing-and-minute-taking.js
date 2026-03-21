// ===============================================
// AI For Report Writing & Minute Taking JS
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

function runActionExtraction() {
    const resultDiv = document.getElementById('extraction-result');
    
    const output = `
        <h4>AI Extraction Result:</h4>
        <div style="background: white; padding: 15px; border-radius: 5px; border: 1px solid #d7d1c5;">
            <table style="width:100%; text-align:left; border-collapse: collapse;">
                <tr style="background-color: var(--bg-tertiary);">
                    <th style="padding: 8px; border: 1px solid var(--border-medium);">Task</th>
                    <th style="padding: 8px; border: 1px solid var(--border-medium);">Assignee</th>
                    <th style="padding: 8px; border: 1px solid var(--border-medium);">Deadline</th>
                </tr>
                <tr>
                    <td style="padding: 8px; border: 1px solid var(--border-medium);">Contact suppliers & update pricing</td>
                    <td style="padding: 8px; border: 1px solid var(--border-medium);">Zandile</td>
                    <td style="padding: 8px; border: 1px solid var(--border-medium);">Thursday</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border: 1px solid var(--border-medium);">Download compliance certificates</td>
                    <td style="padding: 8px; border: 1px solid var(--border-medium);">Lunga</td>
                    <td style="padding: 8px; border: 1px solid var(--border-medium);">This afternoon</td>
                </tr>
            </table>
        </div>
        <p style="margin-top: 10px; font-weight: bold; color: var(--secondary-color);">[Success] The AI successfully filtered out the conversational filler and formatted the data perfectly.</p>
    `;
    
    resultDiv.innerHTML = output;
    resultDiv.style.display = 'block';
}

function generateReportOutline() {
    const topic = document.getElementById('report-topic').value;
    const resultDiv = document.getElementById('report-outline-result');

    if (!topic.trim()) {
        resultDiv.innerHTML = '<p style="color: var(--primary-color);">Please enter a report topic first.</p>';
        resultDiv.style.display = 'block';
        return;
    }

    const outline = `
        <h4>Suggested Outline for: "${topic}"</h4>
        <div style="background: white; padding: 15px; border-radius: 5px; border: 1px solid #d7d1c5; text-align: left;">
            <ol>
                <li><strong>Executive Summary</strong> (High-level overview)</li>
                <li><strong>Introduction & Objectives</strong> (Why this report matters)</li>
                <li><strong>Methodology / Data Collection</strong> (How information was gathered)</li>
                <li><strong>Key Findings & Analysis</strong> (The core data)</li>
                <li><strong>Challenges & Risk Factors</strong> (Obstacles encountered)</li>
                <li><strong>Strategic Recommendations</strong> (Actionable next steps)</li>
                <li><strong>Conclusion</strong></li>
            </ol>
        </div>
        <p style="margin-top: 10px; font-weight: bold; color: var(--secondary-color);">[Tip] You can now prompt the AI to draft Section 2 based on your specific notes.</p>
    `;

    resultDiv.innerHTML = outline;
    resultDiv.style.display = 'block';
}

function checkTonePrompt() {
    const resultDiv = document.getElementById('tone-result');
    const tone2 = document.getElementById('tone2').checked;
    
    if (!document.querySelector('input[name="tonePrompt"]:checked')) {
        resultDiv.innerHTML = '<p style="color: var(--primary-color);">Please select an option.</p>';
        resultDiv.style.display = 'block';
        return;
    }

    if (tone2) {
        resultDiv.innerHTML = '<h4 style="color: var(--secondary-color);">[Correct]</h4><p>Prompting for a warm, professional, and reassuring tone aligns perfectly with the Ubuntu culture of mutual respect in the workplace, softening the robotic AI output.</p>';
    } else {
        resultDiv.innerHTML = '<h4 style="color: var(--primary-color);">[Incorrect]</h4><p>That prompt will either make the response too aggressive and legalistic, or too abrupt. Aim for warm and professional.</p>';
    }
    
    resultDiv.style.display = 'block';
}

function revealHallucinations() {
    const resultDiv = document.getElementById('hallucination-result');
    
    const output = `
        <h4>Errors Identified:</h4>
        <div style="background: white; padding: 15px; border-radius: 5px; border: 1px solid var(--primary-color);">
            <ul>
                <li style="color: var(--primary-color); font-weight: bold;">"showed a 15% increase in revenue."</li>
                <p>The original text never mentioned any percentages or revenue increases. The AI invented this.</p>
                <li style="color: var(--primary-color); font-weight: bold;">"the CEO approved the finalized document."</li>
                <p>The original text never mentioned a CEO or a finalized document. The AI assumed this was the next logical step.</p>
            </ul>
        </div>
        <p style="margin-top: 10px; font-weight: bold;">[Warning] Always review AI output against your own knowledge and source material.</p>
    `;
    
    resultDiv.innerHTML = output;
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
        message += '[Excellent] You fully understand the principles of AI in documentation.';
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