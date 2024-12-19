# portfolio

# Varun Kumar Kumaravel Portfolio

A responsive personal portfolio website for showcasing projects, skills, and professional journey.

## Features

- **Interactive Navigation**: Smooth navigation with a dynamic hamburger menu.
- **Projects Section**: Highlights key projects including:
    - Diabetes Prediction Analysis.
    - Impact of COVID-19 on NYC 311 Analysis.
    - Finger Vein-Based Biometric Identification System Using CNN.
- **Contact Form**: Integrated form for visitors to send messages via email using PHPMailer.
- **Responsive Design**: Optimized for devices of all screen sizes.

---

## Project Structure

```
project/
├── index.html            # Main HTML file for the portfolio
├── index.js              # JavaScript for interactivity
├── new.php               # PHP backend for handling requests
├── process1.php          # PHP script for sending emails using PHPMailer
├── package.json          # Node.js dependencies
├── package-lock.json     # Exact versions of Node.js dependencies
```

---

## Installation and Setup

### Prerequisites
- [Node.js](https://nodejs.org/) installed.
- A web server like Apache or Nginx with PHP enabled.
- [Composer](https://getcomposer.org/) for managing PHP dependencies.

### Steps to Run Locally

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/yourusername/portfolio.git
   cd portfolio
   ```

2. **Install Node.js Dependencies**:
   ```bash
   npm install
   ```

3. **Install PHP Dependencies**:
   Download [PHPMailer](https://github.com/PHPMailer/PHPMailer) and place it in your project directory. Update paths in `process1.php` if necessary.

4. **Update Email Credentials**:
   Edit `process1.php` with your SMTP server credentials:
    - SMTP Host
    - SMTP Username
    - SMTP Password

5. **Run the Website**:
    - If using PHP's built-in server:
      ```bash
      php -S localhost:8000
      ```
    - Open the website in a browser: `http://localhost:8000/index.html`

---

## Contact Form Setup

The contact form is powered by `process1.php` using PHPMailer for email handling. Ensure you:
- Use a valid SMTP server.
- Enable access for less secure apps or create an app password for Gmail.

---

## Technologies Used

- **Frontend**:
    - HTML, CSS, JavaScript
    - Responsive design
- **Backend**:
    - PHP
    - PHPMailer for email handling
- **Tools**:
    - Node.js, Composer

---

## About Varun Kumar Kumaravel

Hi, I'm Varun Kumar Kumaravel, a data enthusiast and Masters student at Northeastern University, Boston. I merge SQL fluency with Python storytelling to transform data into strategic narratives. My hobbies include playing chess, cricket, and exploring the elegance of mathematics through Olympiads.

Feel free to connect with me!

- **Email**: [varunk0816101@gmail.com](mailto:varunk0816101@gmail.com)

---

## License

This project is open-source and available under the [MIT License](LICENSE).
