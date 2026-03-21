// Computer Literacy & AI-Powered Productivity with ChatGPT JS

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

    // Quiz data specifically for Computer Literacy
    const questionData = {
        'q1': {
            correct: 'What You See Is What You Get',
            explanation: 'WYSIWYG means that the content displayed on the screen during editing appears very similar to the final printed output.'
        },
        'q2': {
            correct: 'Home',
            explanation: 'The Home tab usually contains the most frequently used commands like Font, Paragraph alignment, and Clipboard options.'
        },
        'q3': {
            correct: 'It can draft, summarize, and edit text',
            explanation: 'ChatGPT excels at text generation and manipulation, helping create drafts or refine existing text.'
        },
        'q4': {
            correct: 'File',
            explanation: 'The File menu (or Backstage view) handles file-level operations like Save As, Export to PDF, and Print.'
        },
        'q5': {
            correct: 'It helps the AI generate more relevant and accurate responses',
            explanation: 'Providing context allows the AI to understand the specific situation and tailor the output to your needs.'
        },
        'q6': {
            correct: 'Cell',
            explanation: 'A cell is the fundamental unit of a spreadsheet where a row and column intersect.'
        },
        'q7': {
            correct: '=',
            explanation: 'All formulas in Excel and Google Sheets must begin with an equals (=) sign.'
        },
        'q8': {
            correct: '=SUM(A1:A10)',
            explanation: '=SUM() is the function for addition, and A1:A10 represents the range of cells.'
        },
        'q9': {
            correct: '"Write an Excel formula to calculate [Action] for data in [Column]."',
            explanation: 'Being specific about the action and location of data gives the best AI results for formulas.'
        },
        'q10': {
            correct: 'Adds a currency symbol (e.g., $) and decimals',
            explanation: 'Formatting a cell as Currency applies the monetary symbol and standardizes decimal places.'
        },
        'q11': {
            correct: 'For typing both specific URLs and search queries',
            explanation: 'Modern browsers use an Omnibox that functions as both an address bar for URLs and a search engine input.'
        },
        'q12': {
            correct: 'Open a new Tab',
            explanation: 'Tabs allow you to view multiple webpages within a single browser window.'
        },
        'q13': {
            correct: 'filetype:',
            explanation: 'The "filetype:" operator limits search results to specific files like PDFs, XLS, or DOCs.'
        },
        'q14': {
            correct: 'It synthesizes information from multiple angles into a summary',
            explanation: 'Unlike a list of links, AI can read and combine information to provide a direct answer or summary.'
        },
        'q15': {
            correct: 'A saved shortcut to a specific webpage',
            explanation: 'Bookmarks allow users to save the URL of a webpage for quick access in the future.'
        },
        'q16': {
            correct: 'Word Processing Application',
            explanation: 'Word processors are designed specifically for text formatting and document creation.'
        },
        'q17': {
            correct: 'Spreadsheet Application',
            explanation: 'Spreadsheets are designed for numerical data, calculations, and financial planning.'
        },
        'q18': {
            correct: 'Crafting effective inputs to get the best output from AI',
            explanation: 'Prompt engineering is the skill of designing inputs that guide Generative AI models to produce optimal results.'
        },
        'q19': {
            correct: 'Refine your prompt with more specific details and constraints',
            explanation: 'Iterating on the prompt by adding details is the standard way to improve AI output.'
        },
        'q20': {
            correct: 'AI can sometimes hallucinate or provide outdated information',
            explanation: 'AI models can make confident errors (hallucinations), so checking facts against reliable sources is critical.'
        }
    };

    // Grade the quiz and collect corrections
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
        resultMessage += 'Outstanding! You are ready to use these tools professionally.';
    } else if (percentage >= 70) {
        resultClass = 'good';
        resultMessage += 'Great job! You have a solid grasp of the basics.';
    } else {
        resultMessage += 'Review the hands-on sections and try again!';
    }

    resultDiv.className = `quiz-result ${resultClass}`;
    resultDiv.textContent = resultMessage;
    resultDiv.style.display = 'block';

    if (corrections.length > 0) {
        let correctionsHTML = '';
        corrections.forEach((correction) => {
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

    // Disable further interaction
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

// Touch/swipe support
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
            changeSlide(-1);
        } else {
            changeSlide(1);
        }
    }
}

// Progress indicator
function updateProgress() {
    const progress = ((currentSlideIndex + 1) / totalSlides) * 100;
    document.querySelector('.slide-counter').style.background = 
        `linear-gradient(90deg, rgba(0, 119, 182, 0.2) ${progress}%, rgba(255, 255, 255, 0.9) ${progress}%)`;
}

const originalShowSlide = showSlide;
showSlide = function(index) {
    originalShowSlide(index);
    updateProgress();
};

showSlide(0);
updateProgress();