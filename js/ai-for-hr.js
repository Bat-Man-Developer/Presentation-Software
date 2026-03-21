// AI For HR JS
let currentSlideIndex = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;
let quizCompleted = false;

document.getElementById('totalSlides').textContent = totalSlides;

function showSlide(index) {
    slides.forEach(slide => slide.classList.remove('active'));
    slides[index].classList.add('active');
    
    document.getElementById('currentSlide').textContent = index + 1;
    
    // Update navigation buttons
    document.getElementById('prevBtn').disabled = index === 0;
    document.getElementById('nextBtn').disabled = index === totalSlides - 1;
    
    // Show print button on last slide
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

function printPresentation() {
    window.print();
}

// Quiz functionality
let selectedAnswers = {};

// Add click listeners to quiz options
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

function submitQuiz() {
    if (Object.keys(selectedAnswers).length < 20) {
        alert('Please answer all 20 questions before submitting.');
        return;
    }

    let correctCount = 0;
    const corrections = [];

    // Extended question data with all 20 questions
    const questionData = {
        'q1': {
            correct: 'Streamlining processes and reducing time-to-hire by 50-70%',
            explanation: 'AI in recruitment primarily streamlines workflows and reduces time-to-hire significantly, while humans remain essential for final decisions.'
        },
        'q2': {
            correct: 'Addressing algorithmic bias and ensuring fairness',
            explanation: 'Algorithmic bias is the most crucial ethical consideration, as it can perpetuate or amplify existing discrimination in hiring and HR decisions.'
        },
        'q3': {
            correct: '96%',
            explanation: 'According to the IBM case study, Watson AI chatbot handles 96% of routine HR queries autonomously.'
        },
        'q4': {
            correct: 'Start with pilot programs and gradually expand',
            explanation: 'Best practice is to begin with pilot programs to prove value and build confidence before scaling to other HR functions.'
        },
        'q5': {
            correct: 'Predictive analytics for flight risk assessment',
            explanation: 'Predictive analytics uses historical data and patterns to identify employees who are at risk of leaving the organization.'
        },
        'q6': {
            correct: '50%',
            explanation: 'According to the AI adoption personas, 50% of organizations are skeptical about AI implementation and require extensive proof of benefits.'
        },
        'q7': {
            correct: 'Natural Language Processing',
            explanation: 'NLP (Natural Language Processing) is AI\'s ability to understand and generate human language, used in chatbots and text analysis.'
        },
        'q8': {
            correct: 'Botpress',
            explanation: 'Botpress was mentioned as a free AI chatbot builder that can be used for HR applications.'
        },
        'q9': {
            correct: 'AI will transform HR but not replace it - human skills remain irreplaceable',
            explanation: 'AI augments HR capabilities but cannot replace human skills in empathy, strategic thinking, and relationship building.'
        },
        'q10': {
            correct: 'Assessment and Strategy (3 months)',
            explanation: 'The implementation roadmap starts with Assessment and Strategy phase to evaluate readiness and plan the approach.'
        },
        'q11': {
            correct: 'OpenCATS',
            explanation: 'OpenCATS is the free open source Applicant Tracking System mentioned for resume management and parsing.'
        },
        'q12': {
            correct: 'Reduced hiring time from 4 months to 4 weeks',
            explanation: 'The Unilever case study showed they reduced hiring time from 4 months to 4 weeks while improving diversity by 16%.'
        },
        'q13': {
            correct: 'VADER Sentiment Analysis',
            explanation: 'VADER Sentiment Analysis was mentioned as a free open source tool for analyzing employee feedback sentiment.'
        },
        'q14': {
            correct: 'Resistance to change and technology adoption fears',
            explanation: 'The presentation identifies resistance to change as the primary challenge in AI adoption across organizations.'
        },
        'q15': {
            correct: '50-70% reduction in time-to-hire',
            explanation: 'This metric indicates successful automation and efficiency gains while maintaining quality hiring processes.'
        },
        'q16': {
            correct: '1990s databases → 2000s HRIS → 2010s cloud → 2020s AI',
            explanation: 'This timeline shows the evolution from basic databases to modern AI-powered HR systems over three decades.'
        },
        'q17': {
            correct: 'Jitsi Meet',
            explanation: 'Jitsi Meet was mentioned as a free video conferencing solution that requires no registration and supports screen sharing.'
        },
        'q18': {
            correct: '$100M+ savings',
            explanation: 'IBM achieved over $100 million in annual HR operational cost savings through their AI implementation.'
        },
        'q19': {
            correct: 'LimeSurvey',
            explanation: 'LimeSurvey was mentioned as a free open source tool for creating employee engagement surveys and assessments.'
        },
        'q20': {
            correct: 'Maintain human oversight and ensure transparency',
            explanation: 'Ethical AI implementation requires maintaining human oversight and transparent decision-making processes.'
        }
    };

    // Grade the quiz and collect corrections
    Object.keys(selectedAnswers).forEach(questionId => {
        const userAnswer = selectedAnswers[questionId];
        const questionElement = document.getElementById(questionId);
        const options = questionElement.querySelectorAll('.quiz-options li');
        
        if (userAnswer === 'correct') {
            correctCount++;
            // Highlight correct answer
            options.forEach(option => {
                if (option.dataset.answer === 'correct') {
                    option.classList.add('correct');
                }
            });
        } else {
            // Highlight wrong answer and correct answer
            options.forEach(option => {
                if (option.classList.contains('selected')) {
                    option.classList.add('incorrect');
                }
                if (option.dataset.answer === 'correct') {
                    option.classList.add('correct');
                }
            });
            
            corrections.push({
                question: questionId,
                correct: questionData[questionId].correct,
                explanation: questionData[questionId].explanation
            });
        }
    });

    // Display results
    const percentage = (correctCount / 20) * 100;
    const resultDiv = document.getElementById('quiz-result');
    const correctionsDiv = document.getElementById('corrections');
    
    let resultClass = 'needs-improvement';
    let resultMessage = `You scored ${correctCount}/20 (${percentage}%). `;
    
    if (percentage >= 85) {
        resultClass = 'excellent';
        resultMessage += 'Outstanding! You have mastered AI in HR concepts and are ready for implementation.';
    } else if (percentage >= 70) {
        resultClass = 'good';
        resultMessage += 'Good work! You understand most concepts but may benefit from reviewing some areas.';
    } else {
        resultMessage += 'Consider reviewing the training materials to strengthen your understanding of AI in HR.';
    }

    resultDiv.className = `quiz-result ${resultClass}`;
    resultDiv.textContent = resultMessage;
    resultDiv.style.display = 'block';

    // Show corrections if there are any wrong answers
    if (corrections.length > 0) {
        let correctionsHTML = '';
        corrections.forEach((correction, index) => {
            const questionNum = correction.question.replace('q', '');
            correctionsHTML += `
                <div class="correction-item">
                    <strong>Question ${questionNum}:</strong><br>
                    <span class="correct-answer">Correct Answer: ${correction.correct}</span><br>
                    <em>Explanation: ${correction.explanation}</em>
                </div>
            `;
        });
        
        document.getElementById('correction-content').innerHTML = correctionsHTML;
        correctionsDiv.style.display = 'block';
    }

    // Disable further quiz interaction
    document.querySelectorAll('.quiz-options li').forEach(option => {
        option.style.pointerEvents = 'none';
    });
    
    document.querySelector('.submit-btn').disabled = true;
    document.querySelector('.submit-btn').textContent = 'Assessment Completed';
    
    quizCompleted = true;
}

// Keyboard navigation
document.addEventListener('keydown', function(event) {
    if (event.key === 'ArrowLeft') {
        changeSlide(-1);
    } else if (event.key === 'ArrowRight') {
        changeSlide(1);
    }
});

// Touch/swipe support for mobile devices
let touchStartX = 0;
let touchEndX = 0;

document.addEventListener('touchstart', function(event) {
    touchStartX = event.changedTouches[0].screenX;
});

document.addEventListener('touchend', function(event) {
    touchEndX = event.changedTouches[0].screenX;
    handleSwipe();
});

function handleSwipe() {
    const swipeThreshold = 50;
    const swipeLength = touchEndX - touchStartX;
    
    if (Math.abs(swipeLength) > swipeThreshold) {
        if (swipeLength > 0) {
            changeSlide(-1); // Swipe right = previous slide
        } else {
            changeSlide(1); // Swipe left = next slide
        }
    }
}

// Progress indicator
function updateProgress() {
    const progress = ((currentSlideIndex + 1) / totalSlides) * 100;
    document.querySelector('.slide-counter').style.background = 
        `linear-gradient(90deg, rgba(52, 152, 219, 0.2) ${progress}%, rgba(255, 255, 255, 0.9) ${progress}%)`;
}

// Update progress on slide change
const originalShowSlide = showSlide;
showSlide = function(index) {
    originalShowSlide(index);
    updateProgress();
};

// Initialize
showSlide(0);
updateProgress();