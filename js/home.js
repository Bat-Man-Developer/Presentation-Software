// Home JS

// Navigation function
function navigateToPresentation(url) {
    // Safely get the event object to prevent console errors
    const e = window.event;
    
    // Add a subtle loading effect
    if (e && e.currentTarget) {
        const clickedCard = e.currentTarget;
        clickedCard.style.transform = 'scale(0.95)';
    }
    
    setTimeout(() => {
        window.location.href = url;
    }, 200);
}

// Create floating particles
function createParticles() {
    const particlesContainer = document.getElementById('particles');
    if (!particlesContainer) return; // Safety check
    
    const colors = ['#00d4ff', '#ff006e', '#8338ec', '#3a86ff', '#ffc107', '#00e676'];
    
    // Adjust particle count based on screen size
    const isMobile = window.innerWidth <= 768;
    const particleCount = isMobile ? 20 : 40;
    
    for (let i = 0; i < particleCount; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';
        particle.style.left = Math.random() * 100 + '%';
        particle.style.color = colors[Math.floor(Math.random() * colors.length)];
        particle.style.background = 'currentColor';
        particle.style.animationDelay = Math.random() * 12 + 's';
        particle.style.animationDuration = (Math.random() * 8 + 12) + 's';
        particlesContainer.appendChild(particle);
    }
}

// Handle orientation changes
function handleOrientationChange() {
    const particlesContainer = document.getElementById('particles');
    if (particlesContainer) {
        particlesContainer.innerHTML = '';
        createParticles();
    }
}

// Add keyboard navigation (Mapped to all 10 presentations)
document.addEventListener('keydown', (e) => {
    // Prevent navigation if the user is typing in an input field (just in case you add search later)
    if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA') return;

    switch(e.key) {
        case '1': navigateToPresentation('hardware-analyst.php'); break;
        case '2': navigateToPresentation('software-analyst.php'); break;
        case '3': navigateToPresentation('network-analyst.php'); break;
        case '4': navigateToPresentation('ai-for-cybersecurity-analyst.php'); break;
        case '5': navigateToPresentation('ai-for-hr.php'); break;
        case '6': navigateToPresentation('data-analytics-for-hr.php'); break;
        case '7': navigateToPresentation('cybersecurity-for-hr.php'); break;
        case '8': navigateToPresentation('computer-literacy-and-ai.php'); break;
        case '9': navigateToPresentation('advanced-microsoft-excel.php'); break;
        case '0': navigateToPresentation('technical-support.php'); break;
    }
});

// Add visual feedback for card interactions
document.querySelectorAll('.presentation-card').forEach(card => {
    card.addEventListener('mouseenter', () => {
        card.style.borderWidth = '3px';
    });
    
    card.addEventListener('mouseleave', () => {
        card.style.borderWidth = '2px';
        card.style.transform = 'translateY(0) scale(1)';
    });
});

// Initialize particles when page loads
window.addEventListener('load', () => {
    createParticles();
});

// Handle orientation and resize events
window.addEventListener('orientationchange', () => {
    setTimeout(handleOrientationChange, 100);
});

window.addEventListener('resize', () => {
    handleOrientationChange();
});

// Add loading states for better UX
window.addEventListener('beforeunload', () => {
    document.body.style.opacity = '0.7';
});