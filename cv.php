<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php include("gtm.head.php"); ?>

    <style>
        /* Grundläggande stil för CV-sektionerna */
        body {
            font-family: "Times New Roman", Times, serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        #cv {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .cv-section {
            margin-bottom: 20px;
        }

        .cv-section h3 {
            color: #333;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .cv-section p {
            color: #666;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <?php include("gtm.body.php"); ?>

    <?php include("header2.php"); ?>

    <main>

 <section id="cv" class="cv-section">
     <h2 class="section-title">Curriculum Vitae</h2>

     <div class="Personal Information">
         <h3>Personal Information</h3>
         <p><strong>Name:</strong> Ottilia pettersson</p>
         <p><strong>Address:</strong> Santa's Workshop, North Pole</p>
         <p><strong>Phone:</strong> North Pole Phone Code: 123-456 78 88</p>
         <p><strong>E-post:</strong> ottilia.pettersson@christmas.com</p>
     </div>

     <div class="Education">
         <h3>Education</h3>
         <p><strong>Graduation Year:</strong> 2019</p>
         <p><strong>Field of Study:</strong> Toy Making & Christmas Craftsmanship</p>
         <p><strong>School/University:</strong> Elf Academy, North Pole</p>
     </div>

     <div class="Work Experience">
     <h3>Work Experience</h3>
         <p><strong>Job Title:</strong> Lead Toy Maker</p>
         <p><strong>Employer:</strong> Santa Claus & Co.</p>
         <p><strong>Work Period:</strong> 2020 - Current</p>
     </div>

     <div class="Responsibilities and Achievements">
     <h3>Responsibilities and Achievements:</h3>
     <p>Managed a team of toy-making elves, ensuring timely production of high-quality toys for children worldwide.</p>
     <p>Streamlined toy production processes, increasing efficiency by 30% and meeting tight delivery deadlines for Christmas Eve.</p>
     <p>Collaborated with Santa's workshop team to develop innovative toy designs that captivated children's imagination.</p>

     <div class="Skills and Competencies">
         <h3>Skills and Competencies</h3>
        <p>Toy Making Mastery</p>
        <p>Efficiency Optimization</p>
        <p>Creativity and Innovation</p>

     </div>

     <div class="Language Proficiency">
     <h3>Language Proficiency</h3>
         <p><strong>North Pole Elf Language:</strong> Fluent</p>
         <p><strong>Other Languages:</strong>Basic proficiency in Reindeer Speak and Penguin Communicative Gestures</p>
        
     </div>

     <div class="References">
         <h3>References</h3>
         <p>References available upon request.</p>
     </div>
    </section>
    </mail>
    
    <div class="social_nav">
            <a class="socials">
            <a href="https://www.vinge.se/medarbetare/ottilia-pettersson/" target="_blank"><img src="linkedin.bild" alt="linkedIn" style="width: 30px;"></a>
            <a href="https://www.instagram.com/ottiliapetterssonn/" target="_blank"><img src="ny.instagram.bild" alt="instagram" style="width: 30px;"></a>
            <a href="share" target="_blank"><img src="shareicon.svg" alt="Share-icon.bild" style="width: 30px;"></a>
    </div>

    <div id="cookie-popup" class="cookie-popup">
        <p>By clicking on "Close and accept", you confirm that you have read our cookie policy and that you comply with our use of cookies. You can read more in our c​ookie policy​.
        <button onclick="closeCookiePopup()">Close and accept</button>
        <script src="java.js" defer></script>
    </div>

    <footer>
    <p> Copyright © Ottilia Pettersson. We use cookies - read more<a href="/cookiepolicy"> here.</a></p>
    </footer>
</body>
</html>