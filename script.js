document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});



var selectedSymptoms = [];

function selectSymptom(button) {
   
    selectedSymptoms.push(button.textContent);

   
    button.classList.add('selected');
}

function submitForm() {

    fetch('/backend', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ symptoms: selectedSymptoms })
    })
    .then(response => response.json())
    .then(data => {
    
        document.getElementById('result').innerHTML = `<h2>Possible Diseases:</h2><ul>${data.diseases.map(disease => `<li>${disease}</li>`).join('')}</ul>`;
    })
    .catch(error => console.error('Error:', error));
}

function selectSymptom(button) {
    var symptom = button.textContent;

   
    var index = selectedSymptoms.indexOf(symptom);
    if (index > -1) {
        // If the symptom is already selected, deselect it
        selectedSymptoms.splice(index, 1);
        button.classList.remove('selected');
    } else {
        // If the symptom is not selected, select it
        selectedSymptoms.push(symptom);
        button.classList.add('selected');
    }
}

// BMI Calculator
document.getElementById('bmi-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission

    // Get input values
    var height = parseFloat(document.getElementById('height').value);
    var weight = parseFloat(document.getElementById('weight').value);
    var age = parseFloat(document.getElementById('age').value);
    var gender = document.getElementById('gender').value;

    // Calculate BMI
    var bmi = calculateBMI(height, weight);

    // Display BMI result
    document.getElementById('bmi-result').textContent = bmi.toFixed(2);
});

// Function to calculate BMI
function calculateBMI(height, weight) {
    return weight / ((height / 100) * (height / 100));
}


// BMR Calculator
document.getElementById('bmr-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission

    // Get input values
    var height = parseFloat(document.getElementById('bmr-height').value);
    var weight = parseFloat(document.getElementById('bmr-weight').value);
    var age = parseFloat(document.getElementById('bmr-age').value);
    var gender = document.getElementById('bmr-gender').value;
    var activityLevel = document.getElementById('activity-level').value;

    // Calculate BMR
    var bmr = calculateBMR(height, weight, age, gender, activityLevel);

    // Display BMR result
    document.getElementById('bmr-result').textContent = bmr.toFixed(2);
});

// Function to calculate BMR
function calculateBMR(height, weight, age, gender, activityLevel) {
    var bmr;

    if (gender === 'male') {
        bmr = 88.362 + (13.397 * weight) + (4.799 * height) - (5.677 * age);
    } else if (gender === 'female') {
        bmr = 447.593 + (9.247 * weight) + (3.098 * height) - (4.330 * age);
    }

    // Adjust for activity level
    switch (activityLevel) {
        case 'sedentary':
            bmr *= 1.2;
            break;
        case 'lightly-active':
            bmr *= 1.375;
            break;
        case 'moderately-active':
            bmr *= 1.55;
            break;
        case 'very-active':
            bmr *= 1.725;
            break;
        case 'extra-active':
            bmr *= 1.9;
            break;
        default:
            break;
    }

    return bmr;
}

// Calories Converter
document.getElementById('energy-converter').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission

    // Get input values
    var value = parseFloat(document.getElementById('value').value);
    var inputUnit = document.getElementById('input-unit').value;
    var outputUnit = document.getElementById('output-unit').value;

    // Convert input value to calories
    var calories = convertToCalories(value, inputUnit);

    // Convert calories to output unit
    var result = convertFromCalories(calories, outputUnit);

    // Display conversion result
    document.getElementById('conversion-result').textContent = result.toFixed(2);
});

// Function to convert input value to calories
function convertToCalories(value, inputUnit) {
    switch (inputUnit) {
        case 'cal':
            return value;
        case 'kcal':
            return value * 1000;
        case 'kj':
            return value * 0.239;
        case 'j':
            return value * 0.001 * 0.239;
        default:
            return NaN;
    }
}

// Function to convert calories to output unit
function convertFromCalories(calories, outputUnit) {
    switch (outputUnit) {
        case 'cal':
            return calories;
        case 'kcal':
            return calories * 0.001;
        case 'kj':
            return calories * 4.184;
        case 'j':
            return calories * 4.184 * 1000;
        default:
            return NaN;
    }
}

// function calculateBMR() {
//     console.log('Calculate BMR button clicked');
//     // Rest of the function code...
// }




// function calculateBMR() {
//     // Get input values
//     const age = document.getElementById('age').value;
//     const weight = document.getElementById('weight').value;
//     const height = document.getElementById('height').value;
//     const gender = document.querySelector('input[name="gender"]:checked').value;
//     const activityLevel = document.getElementById('activity-level').value;

//     // Calculate BMR based on formula
//     let bmr;
//     if (gender === 'male') {
//         bmr = 10 * weight + 6.25 * height - 5 * age + 5;
//     } else {
//         bmr = 10 * weight + 6.25 * height - 5 * age - 161;
//     }

//     // Adjust BMR based on activity level
//     switch (activityLevel) {
//         case 'sedentary':
//             bmr *= 1.2;
//             break;
//         case 'lightly-active':
//             bmr *= 1.375;
//             break;
//         case 'moderately-active':
//             bmr *= 1.55;
//             break;
//         case 'very-active':
//             bmr *= 1.725;
//             break;
//         case 'extra-active':
//             bmr *= 1.9;
//             break;
//     }

//     // Display the result
//     document.getElementById('bmr-result').textContent = bmr.toFixed(2) + ' kcal/day';
// }