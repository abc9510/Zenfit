<?php include('component\navbar.html');
  ?>

   <link rel="stylesheet" href="css/calculate.css">
 <!--==================== CALCULATE ====================-->
 <section class="calculate section">
            <div class="calculate__container container grid">
                <div class="calculate__content">
                    <div class="section__titles">
                        <h1 class="section__title-border">CALCULATE</h1>
                        <h1 class="section__title">YOUR BMI</h1>
                    </div>

                    <p class="calculate__description">
                        The body mass index (BMI) calculator calculates
                        body mass index from your weight and height.
                    </p>

                    <form action="" class="calculate__form" id="calculate-form">
                        <div class="calculate__box">
                            <input type="number" placeholder="Height" class="calculate__input" id="calculate-cm">
                            <label for="" class="calculate__label">cm</label>
                        </div>
                        <div class="calculate__box">
                            <input type="number" placeholder="Weight" class="calculate__input" id="calculate-kg">
                            <label for="" class="calculate__label">kg</label>
                        </div>

                        <button type="submit" class="button button__flex">
                            Calculate Now <i class="ri-arrow-right-line"></i>
                        </button>
                    </form>

                    <p class="calculate__message" id="calculate-message"></p>
                </div>

                <img src="assets/YOGASTRONG_AMO06_040_073_V03_ORANGE_300DPI_FINAL-lpr.webp" alt="calculate image" class="calculate__img">
            </div>
        </section>
    </main>
    <section class="program section" id="program">
            <div class="container">
                <div class="section__data">
                    <h2 class="section__subtitle">Our Program</h2>
                    <div class="section__titles">
                        <h1 class="section__title-border">BUILD YOUR</h1>
                        <h1 class="section__title">BEST BODY</h1>
                    </div>
                </div>

                <div class="program__container grid">
                    <article class="program__card">
                        <div class="program__shape">
                            <img src="assets/program1.png" alt="program image" class="program__img">
                        </div>

                        <h3 class="program__title">Flex Muscle</h3>

                        <p class="program__description">
                            Creating tension that's temporarily making the muscle
                            fibers smaller or contracted.
                        </p>

                        <a href="#" class="program__button">
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </article>

                    <article class="program__card">
                        <div class="program__shape">
                            <img src="assets/program2.png" alt="program image" class="program__img">
                        </div>

                        <h3 class="program__title">Cardio Exercise</h3>

                        <p class="program__description">
                            Exercise your heart rate up and keeps it
                            up for a prolonged period of time.
                        </p>

                        <a href="#" class="program__button">
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </article>

                    <article class="program__card">
                        <div class="program__shape">
                            <img src="assets/program3.png" alt="program image" class="program__img">
                        </div>

                        <h3 class="program__title">Basic Yoga</h3>

                        <p class="program__description">
                            Diaphragmatic this is the most common breathing
                            technique you'll find in yoga.
                        </p>

                        <a href="#" class="program__button">
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </article>

                    <article class="program__card">
                        <div class="program__shape">
                            <img src="assets/program4.png" alt="program image" class="program__img">
                        </div>

                        <h3 class="program__title">Weight Lifting</h3>

                        <p class="program__description">
                            Attempts a maximum weight single lift of a
                            barbell loaded with weight plates.
                        </p>

                        <a href="#" class="program__button">
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </article>
                </div>
            </div>
        </section>
        <script>
            const calculateForm = document.getElementById('calculate-form'),
    calculateCm = document.getElementById('calculate-cm'),
    calculateKg = document.getElementById('calculate-kg'),
    calculateMessage = document.getElementById('calculate-message')

const calculateBmi = (e) => {
    e.preventDefault()

    // Check if the fields have a value
    if (calculateCm.value === '' || calculateKg.value === '') {
        // Add and remove color
        calculateMessage.classList.remove('color-green')
        calculateMessage.classList.add('color-red')

        // Show message
        calculateMessage.textContent = 'Fill in the Height and Weight 👨‍💻'

        // Remove message three seconds
        setTimeout(() => {
            calculateMessage.textContent = ''
        }, 3000)
    } else {
        // BMI Formula
        const cm = calculateCm.value / 100,
            kg = calculateKg.value,
            bmi = Math.round(kg / (cm * cm))

        // Show your health status
        if (bmi < 18.5) {
            // Add color and display message
            calculateMessage.classList.add('color-green')
            calculateMessage.textContent = `Your BMI is ${bmi} and you are skinny 😔`
        } else if (bmi < 25) {
            calculateMessage.classList.add('color-green')
            calculateMessage.textContent = `Your BMI is ${bmi} and you are healthy 🥳`
        } else {
            calculateMessage.classList.add('color-green')
            calculateMessage.textContent = `Your BMI is ${bmi} and you are overweight 😔`
        }

        // To clear the input field
        calculateCm.value = ''
        calculateKg.value = ''

        // Remove message four seconds
        setTimeout(() => {
            calculateMessage.textContent = ''
        }, 4000)
    }
}

calculateForm.addEventListener('submit', calculateBmi)
            </script>
<br>
<br>

 