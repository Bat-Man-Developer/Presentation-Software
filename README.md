# Presentation Website

A professional presentation website showcasing various certification courses.

## Local Development

### Prerequisites
- PHP 8.1 or higher
- XAMPP or similar local development environment

### Setup

1. Clone the repository:
```bash
git clone https://github.com/YOUR_USERNAME/Presentation-Software.git
cd Presentation-Software
```

2. Start XAMPP and ensure Apache and MySQL are running

3. Access the site at `http://localhost/Presentation-Software/`

## Project Structure

- `*.php` - Main page files
- `assets/` - Images and stylesheets
- `js/` - JavaScript files
- `.github/workflows/` - CI/CD configuration

## CI/CD Pipeline

This project uses GitHub Actions for continuous integration. The pipeline:
- Runs on every push and pull request
- Validates PHP syntax across the codebase
- Tests against PHP 8.1 and 8.2
- Prepares deployment steps

## Deployment

To set up deployment:
1. Go to your GitHub repository Settings
2. Add deployment secrets (if needed)
3. Update `.github/workflows/ci-cd.yml` with your deployment commands

## Git Workflow

- Push to `main` branch for production
- Create feature branches for development
- Submit pull requests for review

## Contributing

1. Create a new branch for your feature
2. Make your changes
3. Commit with descriptive messages
4. Push to GitHub and create a pull request
