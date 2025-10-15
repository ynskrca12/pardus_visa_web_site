<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yunus Kırca - Full Stack Developer</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background: #fff;
            padding: 40px 20px;
        }
        
        .container {
            max-width: 850px;
            margin: 0 auto;
            background: white;
        }
        
        header {
            border-bottom: 3px solid #2c3e50;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        
        h1 {
            font-size: 32px;
            color: #2c3e50;
            margin-bottom: 5px;
            font-weight: 700;
        }
        
        .title {
            font-size: 18px;
            color: #7f8c8d;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .contact-info {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 15px;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #555;
        }
        
        .contact-item strong {
            color: #2c3e50;
        }
        
        section {
            margin-bottom: 30px;
        }
        
        h2 {
            font-size: 22px;
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 8px;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .summary {
            text-align: justify;
            color: #555;
            line-height: 1.8;
        }
        
        .experience-item, .education-item {
            margin-bottom: 25px;
        }
        
        .job-header {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            margin-bottom: 5px;
            flex-wrap: wrap;
        }
        
        .job-title {
            font-size: 18px;
            font-weight: 600;
            color: #2c3e50;
        }
        
        .job-date {
            color: #7f8c8d;
            font-size: 14px;
        }
        
        .company-name {
            color: #3498db;
            font-weight: 600;
            margin-bottom: 10px;
        }
        
        ul {
            margin-left: 20px;
            margin-top: 10px;
        }
        
        li {
            margin-bottom: 6px;
            color: #555;
        }
        
        .skills-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
        }
        
        .skill-category {
            background: #f8f9fa;
            padding: 15px;
            border-left: 3px solid #3498db;
        }
        
        .skill-category h3 {
            font-size: 16px;
            color: #2c3e50;
            margin-bottom: 10px;
        }
        
        .skill-list {
            list-style: none;
            margin: 0;
        }
        
        .skill-list li {
            padding: 5px 0;
            color: #555;
        }
        
        .skill-list li:before {
            content: "▪";
            color: #3498db;
            font-weight: bold;
            margin-right: 8px;
        }
        
        .references {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        
        .reference-card {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
        }
        
        .reference-card h3 {
            color: #2c3e50;
            margin-bottom: 5px;
        }
        
        .reference-card .role {
            color: #7f8c8d;
            font-size: 14px;
            margin-bottom: 10px;
        }
        
        .reference-card .contact {
            font-size: 14px;
            color: #555;
        }
        
        .languages {
            display: flex;
            gap: 30px;
            flex-wrap: wrap;
        }
        
        .language-item {
            background: #f8f9fa;
            padding: 10px 20px;
            border-radius: 5px;
        }
        
        @media print {
            body {
                padding: 0;
            }
            .container {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>YUNUS KIRCA</h1>
            <div class="title">Full Stack Developer</div>
            <div class="contact-info">
                <div class="contact-item">
                    <strong>Email:</strong> yunuskirca34@gmail.com
                </div>
                <div class="contact-item">
                    <strong>Phone:</strong> +90 534 234 64 81
                </div>
                <div class="contact-item">
                    <strong>Location:</strong> Pendik, İstanbul, Türkiye
                </div>
                <div class="contact-item">
                    <strong>GitHub:</strong> github.com/ynskrca12
                </div>
            </div>
        </header>

        <section>
            <h2>Professional Summary</h2>
            <p class="summary">
               Full-stack developer with 3+ years of experience building scalable web applications. Core expertise in PHP Laravel and React.js ecosystem. Specialized in API development, system integration, and ERP module implementation. Proven track record in e-commerce platforms, payment systems, and real-time communication architecture.
            </p>
        </section>

        <section>
            <h2>Professional Experience</h2>
            
            <div class="experience-item">
                <div class="job-header">
                    <div class="job-title">Full Stack Developer</div>
                    <div class="job-date">February 2025 - September 2025</div>
                </div>
                <div class="company-name">Green Holding - GCode İleri Teknoloji A.Ş</div>
                <ul>
                    <li>Developed and maintained full-stack applications using PHP Laravel framework</li>
                    <li>Created responsive user interfaces with HTML, CSS, JavaScript, and jQuery</li>
                    <li>Designed and implemented RESTful APIs for system integration</li>
                    <li>Developed control panels for electric vehicle charging stations</li>
                    <li>Built and enhanced ERP project modules for business process automation</li>
                    <li>Implemented real-time monitoring and management features for charging infrastructure</li>
                </ul>
            </div>

            <div class="experience-item">
                <div class="job-header">
                    <div class="job-title">Full Stack Developer</div>
                    <div class="job-date">October 2023 - December 2024</div>
                </div>
                <div class="company-name">EMLAKSEPETTE.COM</div>
                <ul>
                    <li>Debugged and troubleshooted complex system issues to ensure platform stability</li>
                    <li>Enhanced CRM module functionalities to improve customer relationship management</li>
                    <li>Developed comprehensive listing and publishing panel using React.js</li>
                    <li>Designed and implemented RESTful APIs for mobile application integration using PHP</li>
                    <li>Built automated SMS and email dispatch systems with PHP</li>
                    <li>Created user interfaces utilizing HTML, CSS, Bootstrap, JavaScript, and jQuery</li>
                    <li>Integrated Excel data into the system using Google Sheets API</li>
                    <li>Utilized socket programming for real-time communication between systems</li>
                    <li>Applied Repository Design Pattern for scalable and maintainable code architecture</li>
                </ul>
            </div>

            <div class="experience-item">
                <div class="job-header">
                    <div class="job-title">Backend Developer</div>
                    <div class="job-date">June 2023 - October 2023</div>
                </div>
                <div class="company-name">RAVENSOFT</div>
                <ul>
                    <li>Developed admin panels using PHP Laravel framework</li>
                    <li>Implemented frontend solutions with HTML, CSS, Bootstrap, and jQuery</li>
                    <li>Designed and wrote APIs for seamless frontend integration</li>
                    <li>Collaborated with cross-functional teams to deliver project requirements</li>
                </ul>
            </div>

            <div class="experience-item">
                <div class="job-header">
                    <div class="job-title">Backend Developer</div>
                    <div class="job-date">November 2022 - May 2023</div>
                </div>
                <div class="company-name">IQ MONEY</div>
                <ul>
                    <li>Developed comprehensive admin panels with PHP Laravel</li>
                    <li>Built accounting modules for financial management</li>
                    <li>Implemented corporate wallet features for payment processing</li>
                    <li>Created RESTful APIs for mobile application functionality</li>
                    <li>Developed third-party system integrations</li>
                </ul>
            </div>
        </section>

        <section>
            <h2>Education</h2>
            <div class="education-item">
                <div class="job-header">
                    <div class="job-title">Bachelor of Computer Engineering</div>
                    <div class="job-date">2018 - 2024</div>
                </div>
                <div class="company-name">Yalova University</div>
                <p style="color: #555; margin-top: 5px;">30% English instruction program</p>
            </div>
            <div class="education-item">
                <div class="job-header">
                    <div class="job-title">English Preparatory Program</div>
                    <div class="job-date">2017 - 2018</div>
                </div>
                <div class="company-name">Yalova University</div>
            </div>
        </section>

        <section>
            <h2>Technical Skills</h2>
            <div class="skills-container">
                <div class="skill-category">
                    <h3>Backend Development</h3>
                    <ul class="skill-list">
                        <li>PHP - Laravel</li>
                        <li>C# - ASP.NET</li>
                        <li>RESTful API</li>
                        <li>SOAP API</li>
                    </ul>
                </div>
                <div class="skill-category">
                    <h3>Frontend Development</h3>
                    <ul class="skill-list">
                        <li>React.js</li>
                        <li>JavaScript</li>
                        <li>jQuery</li>
                        <li>HTML - CSS</li>
                        <li>Bootstrap</li>
                    </ul>
                </div>
                <div class="skill-category">
                    <h3>Tools & Technologies</h3>
                    <ul class="skill-list">
                        <li>GitHub</li>
                        <li>Plesk - cPanel</li>
                        <li>Socket Programming</li>
                        <li>System Integration</li>
                    </ul>
                </div>
            </div>
        </section>

        <section>
            <h2>Languages</h2>
            <div class="languages">
                <div class="language-item">
                    <strong>English:</strong> B2 (Upper Intermediate)
                </div>
                <div class="language-item">
                    <strong>Russian:</strong> A1 (Beginner)
                </div>
                <div class="language-item">
                    <strong>Turkish:</strong> Native
                </div>
            </div>
        </section>

        <section>
            <h2>References</h2>
            <div class="references">
                <div class="reference-card">
                    <h3>Zafer Yıldız</h3>
                    <div class="role">Team Leader</div>
                    <div class="contact">Phone: +90 539 314 19 74</div>
                </div>
                <div class="reference-card">
                    <h3>Abdurrahman İslamoğlu</h3>
                    <div class="role">Team Leader</div>
                    <div class="contact">Phone: +90 551 108 36 52</div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>