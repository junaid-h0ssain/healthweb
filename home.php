<?php
  include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"/>
</head>
<body>

<section class="hero_section">
        <div class="content">
            <h1><span>Get Appointment</span><br />Easy and Fast</h1>
            <p>
                Ready to take control of your health and wellness journey? Contact us today to schedule
                an appointment or learn more about our services. Together, 
                we can work towards a healthier, happier you!
            </p>
            <a href="symptoms.php">
              <button class="hero_button"><h1> Symptoms</h1></button>
            </a>
          </div>
    
          <div class="image">
            
            <img src="img/hero.png" alt="header image" />
            <div class="image__content image__content__1">
              <span><i class="ri-user-3-line"></i></span>
              <div class="details">
                <h4>10000+</h4>
                <p>Active Clients</p>
              </div>
            </div>
            <div class="image__content image__content__2">
              <ul>
                <li>
                  <span><i class="ri-check-line"></i></span>
                  Get your Appointment Today
                </li>
                <li>
                  <span><i class="ri-check-line"></i></span>
                  Expert Doctors
                </li>
              </ul>
            </div>
          </div>
        </header>
     
    
    </section>
    
<section class="hello1">

    <div class="image-container">
        <img src="img/hello1.jpg" alt="Welcome Image">
    </div>

    <div class="content">
        <div class="text-wrap">

        <h1><span>WELCOME TO</span><br/>HEALTH CARE GUIDENCE</h1>
        <marquee bgcolor="#ccc" loop="-1" scrollamount="10">"Empowering Health: our Guidance page, where you will find every solution"</marquee>


        </div>
      
      <a href="#" class="btn">Explore Now</a>
       
    </div>
</section>

<section class="health-resources">
  <div class="container">
      <h2>Health Resources</h2>
      <div class="resource-grid">
          <div class="resource-card">
              <img src="img/n1.jpg" alt="Nutrition">
              <h3 id="sentence">Nutrition</h3>
              <p>Explore articles, recipes, and tips to maintain a healthy diet.</p>
              <a href="#">Learn More</a>
          </div>
          <div class="resource-card">
              <img src="img/f1.jpg" alt="Fitness">
              <h3 id="sentence" >Fitness</h3>
              <p>Discover workouts, exercise routines, and training plans for all fitness levels.</p>
              <a href="#">Learn More</a>
          </div>

          <div class="resource-card">
            <img src="img/m1.jpg" alt="Mental Health">
            <h3>Mental Health</h3>
            <p>Learn about stress management, mindfulness, and mental wellness strategies.</p>
            <a href="#">Learn More</a>
        </div>
        <div class="resource-card">
            <img src="img/c1.jpg" alt="Chronic Conditions">
            <h3>Chronic Conditions</h3>
            <p>Find information and support for managing chronic illnesses and conditions.</p>
            <a href="#">Learn More</a>
        </div>
          
      </div>
  </div>
</section>

<section id="calculator" class="calculator-section">
  <div class="container">
      <h2>Health Calculators</h2>
      <div class="calculator-grid">
          <div class="calculator">
              <h3>BMI Calculator</h3>
              <form id="bmi-form">
                  <div class="form-group">
                      <label for="height">Height (cm):</label>
                      <input type="number" id="height" name="height" required>
                  </div>
                  <div class="form-group">
                      <label for="weight">Weight (kg):</label>
                      <input type="number" id="weight" name="weight" required>
                  </div>
                  <div class="form-group">
                      <label for="age">Age:</label>
                      <input type="number" id="age" name="age" required>
                  </div>
                  <div id="b1" class="form-group">
                      <label for="gender">Gender:</label>
                      <select id="gender" name="gender" required>
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                      </select>
                  </div>
                  <button  type="submit">Calculate BMI</button>
              </form>
              <div class="result">
                  <p>Your BMI is: <span id="bmi-result"></span></p>
              </div>
          </div>
          



          <div class="calculator">
            <h3>BMR Calculator</h3>
  <form id="bmr-form">
    <div class="form-group">
        <label for="height">Height (cm):</label>
        <input type="number" id="bmr-height" name="height" required>
    </div>
    <div class="form-group">
        <label for="weight">Weight (kg):</label>
        <input type="number" id="bmr-weight" name="weight" required>
    </div>
    <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" id="bmr-age" name="age" required>
    </div>
    <div class="form-group">
        <label for="gender">Gender:</label>
        <select id="bmr-gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
    </div>
    <div class="form-group">
        <label for="activity-level">Select your activity level:</label>
        <select id="activity-level">
            <option value="sedentary">Sedentary (little or no exercise)</option>
            <option value="lightly-active">Lightly Active (light exercise/sports 1-3 days/week)</option>
            <option value="moderately-active">Moderately Active (moderate exercise/sports 3-5 days/week)</option>
            <option value="very-active">Very Active (hard exercise/sports 6-7 days a week)</option>
            <option value="extra-active">Extra Active (very hard exercise/sports & physical job or 2x training)</option>
        </select>
    </div>
    <button type="submit" onclick="calculateBMR()">Calculate BMR</button>
</form>
<div class="result">
    <p>Your BMR is: <span id="bmr-result"></span></p>
</div>
        </div>




        <div class="calculator">
          <h3>Calories Converter</h3>
          
          <form id="energy-converter">
            <div class="form-group">
              <label for="value">Value:</label>
              <input type="number" id="value" name="value" placeholder="Enter value" required>
            </div>
            <div class="form-group">
              <label for="input-unit">Input Unit:</label>
              <select id="input-unit" name="input-unit">
                <option value="cal">Calorie (cal)</option>
                <option value="kcal">Calorie (kcal)</option>
                <option value="kj">Kilojoules (kJ)</option>
                <option value="j">Joules (J)</option>
              </select>
            </div>
            <div id="b2" class="form-group">
              <label for="output-unit">Output Unit:</label>
              <select id="output-unit" name="output-unit">
                <option value="cal">Calorie (cal)</option>
                <option value="kcal">Calorie (kcal)</option>
                <option value="kj">Kilojoules (kJ)</option>
                <option value="j">Joules (J)</option>
              </select>
            </div>
            <button type="submit">Convert</button>
          </form>
          <div class="result">
            <p>Your calories is: <span id="conversion-result"></span></p>
          </div>
  </div>
</section>
 
<section class="tips-section">
  <div class="container">
    <h2>Tips of the Day</h2>
    <div class="tip-cards">
      <div class="tip-card">
        <img src="img/Healthy-diet-.jpg" alt="Tip 1">
        <h3>Healthy Eating</h3>
        <p>Boost your nutrition by adding a v
          ariety of colorful vegetables to your meals. Vegetables are packed with essential vitamins, minerals, and antioxidants that 
          support overall health. Aim to fill half your plate with veggies at every meal for optimal nutrition..</p>
        <a href="#">Read More</a>
      </div>
      <div class="tip-card">
        <img src="img/stay-hydrated.jpg" alt="Tip 2">
        <h3>Stay Hydrated</h3>
        <p><span> Hydration is essential for overall heal
          th and well-being. Aim to drink at least 8 glasses of water per day, and more if you're active or in hot we
          ather. Carry a reusable water
           bottle with you to stay hydrated on the go, and opt for water over sugary beverages to quench your thirst.</span></p>
        <a href="#">Read More</a>
      </div>
    </div>
  </div>
</section>

<section class="success-stories">
  <div class="container">
    <h2>Success Stories</h2>
    <div class="story-grid">
      <div class="story">
        <div class="story-image">
          <img src="img/patientt1.jpg" alt="Success Story 1">
        </div>
        <div class="story-content">
          <h3>John Doe</h3>
          <p>"Thanks to the healthcare guidance system, I've lost 30 pounds and feel better than ever before!"</p>
          <a href="#">Read John's Full Story</a>
        </div>
      </div>
      <div class="story">
        <div class="story-image">
          <img src="img/patientt2.jpg" alt="Success Story 2">
        </div>
        <div class="story-content">
          <h3>Jane Smith</h3>
          <p>"With the support of the healthcare guidance system, I've successfully managed my chronic condition and improved my quality of life."</p>
          <a href="#">Read Jane's Full Story</a>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="script.js"></script>

    
    
</body>
</html>

<?php
  include 'footer.php';
?>