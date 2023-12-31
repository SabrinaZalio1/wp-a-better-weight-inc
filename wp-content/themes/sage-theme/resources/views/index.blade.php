
   @extends('app.blade.php')
   @section('content')
    <div id="loader" class="loader"></div>
    <div id="content" class="content">
      <section class="free-medical-checkup">
        <div class="circle10"></div>
        <div class="free-medical-checkup__container">
          <div class="free-medical-checkup__banner">
            <h1 class="primary-title z-index1">Chicago’s <span class="c-pink primary-title">Free</span> Medical
              Check-Up
              and
              Weight
              Loss
              Consultation</h1>
            <p class="free-medical-checkup__promo z-index1">Only <span class="c-pink">11</span> spots
              available!</p>
            <div class="countdown">
              <h4 class="countdown__title">Your offer ends in:</h4>
              <div class="countdown-container">
                <div class="countdown-item">
                  <p class="countdown-item-text">Days</p>
                  <span class="countdown-item-number" id="days">00</span>
                </div>
                <div class="countdown-item">
                  <p class="countdown-item-text">Hours</p>
                  <span class="countdown-item-number" id="hours">00</span>
                </div>
                <div class="countdown-item">
                  <p class="countdown-item-text">Minutes</p>
                  <span class="countdown-item-number" id="minutes">00</span>
                </div>
                <div class="countdown-item">
                  <p class="countdown-item-text">Seconds</p>
                  <span class="countdown-item-number" id="seconds">00</span>
                </div>
              </div>
            </div>
          </div>
          <div class="free-medical-checkup__info">
            <p class="free-medical-checkup__description z-index1">Limited spots available due to the Physicians
              schedule
              and the
              high demand for service. No credit card or
              insurance required.</p>
            <button class="m-auto primary-button z-index1">Book my appointment</button>
          </div>
        </div>
        <div class="circle9"></div>
        <div class="free-medical-checkup__yellow-bg"></div>
      </section>

      <section class="information">
        <div class="circle8"></div>
        <div class="information__cards-container">
          <div class="information__card">
            <div>
              <img src="./assets/icons/data-icons/briefcase.svg" alt="briefcase icon" class="information__card-icon">
              <div>
                <span class="hero-banner-number information__card-number" data-count="10">0</span>
                <span class="information__card-symbol">+</span>
              </div>
              <p class="information__card-text">years in business</p>
            </div>
          </div>
          <div class="information__card">
            <div>
              <img src="./assets/icons/data-icons/smile.svg" alt="smile icon" class="information__card-icon">
              <div>
                <span class="hero-banner-number information__card-number" data-count="2000">0</span>
                <span class="information__card-symbol">+</span>
              </div>
              <p class="information__card-text">positive reviews</p>
            </div>
          </div>
          <div class="information__card">
            <div>
              <img src="./assets/icons/data-icons/message-circle.svg" alt="message circle icon"
                class="information__card-icon">
              <div>
                <span class="hero-banner-number information__card-number" data-count="15000">0</span>
                <span class="information__card-symbol">+</span>
              </div>
              <p class="information__card-text">satisfied clients</p>
            </div>
          </div>
          <div class="information__card">
            <div>
              <img src="./assets/icons/data-icons/activity.svg" alt="activity icon" class="information__card-icon">
              <div>
                <span class="information__card-number">Many</span>
                <span class="information__card-symbol">+</span>
              </div>
              <p class="information__card-text">nurses and physician assistants on staff</p>
            </div>
          </div>
        </div>
        <button class="m-auto primary-button c-bg-yellow">Book my appointment</button>
      </section>
      <section class="consultation-for">
        <div class="circle3"></div>
        <div class="consultation-for__text-section">
          <div>
            <h2 class="consultation-for__title secondary-title">Who Is The Consultation For?</h2>
            <p class="consultation-for__description">Chicago’s free medical check-up and weight loss consultation is
              for
              Chicago residents who are looking to
              lose weight so they can live a long, vibrant and healthy life, while looking good and not breaking the
              bank.
            </p>
          </div>
          <div>
            <h2 class="consultation-for__title secondary-title">How Does It Work?</h2>
            <p class="consultation-for__description">In this exam a certified nurse or physician will do various tests
              to
              check your overall health level and
              find which easy-to-do physician-supervised weight loss program will work best for you.</p>
          </div>
          <button class="m-auto primary-button">Book my appointment</button>
        </div>
        <div class="img-container">
          <img src="./assets/girl.png" alt="sport happy girl" class="consultation-for__img">
          <div class="consultation-for__img-border"></div>
          <div class="consultation-for__img-border2"></div>
        </div>
        <div class="circle1"></div>
        <div class="circle2"></div>
      </section>

      <section class="help-you">
        <div class="help-you__container">
          <h2 class="secondary-title">We Can Help You</h2>
          <div class="circle4"></div>
          <p class="help-you__description">For those of us who struggle with our weight
            it’s easy to lose hope. We have seen so many tricks, gimmicks and weight loss programs that simply do not
            work for us.
            They want us to eat like a pigeon, avoid all the things we love to eat and work out till we cry. We are
            here to tell you that it doesn’t have to be that way. There is hope! Technology has advanced rapidly in
            recent years and now, with proper guidance... </p>
        </div>
        <img src="./assets/group-people-mobile.jpg" alt="group of people hugging" class="help-you__mobile-img">

        <div class="help-you__container">
          <p class="help-you__description">You can join the ranks of our over 15,000 satisfied clients who have lost
            weight, regained their
            confidence and are living happy exuberant lives with their family. They did this without: breaking the
            bank, sweating buckets in intense workout programs, and most importantly, without giving up ice-cream,
            bread, pizza, doughnuts and all their favorite foods.</p>
        </div>
        <div class="help-you__button-container">
          <button class="primary-button">Book my appointment</button>
        </div>

        <img src="./assets/group-people.jpg" alt="group of people hugging" class="help-you__desktop-img">
      </section>

      <section class="free-consultation">
        <h2 class="secondary-title text-center">What You’ll Get At Your <span
            class="secondary-title free-consultation__enhance-text">Free</span>
          Consultation</h2>
        <div class="circle5"></div>
        <div class="free-consultation__container">
          <div class="free-consultation__card">
            <h3 class="tertiary-title">Body Mass Index</h3>
            <ul class="free-consultation__card-list">
              <li>Complete understanding of your body composition</li>
              <li>A clear view of your weight loss goals</li>
              <li>Clear data to help you make an informed decision about your health</li>
            </ul>
          </div>
          <div class="free-consultation__card">
            <h3 class="tertiary-title c-pink c-border-pink ">Vital Signs Check</h3>
            <ul class="free-consultation__card-list">
              <li>Body temperature</li>
              <li>Pulse rate, heart's rate, rhythm and regularity</li>
              <li>Breathing rate</li>
              <li>Blood pressure</li>
            </ul>
          </div>
        </div>
        <div class="circle6"></div>
        <div class="circle7"></div>

        <div class="free-consultation__button-container">
          <button class="primary-button">Book my appointment</button>
        </div>
      </section>

      <section class="faqs">
        <div class="faqs__title-container">
          <h3 class="secondary-title">Frequently Asked Questions</h3>
        </div>
        <div class="circle11"></div>
        <div class="faq">
          <div class="question">
            <p>Why is it free?</p>
            <img src="./assets/icons/arrow.svg" alt="arrow icon">
          </div>
          <div class="answer">
            <p>Adipisicing elit. Maiores voluptas voluptatem magnam sequi!
              Incidunt,
              itaque aliquam saepe, blanditiis ab nam, dolore maxime et debitis voluptatem repellat ipsum eos rem
              quibusdam?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil necessitatibus facere aliquam nam ut at
              praesentium tempore aspernatur sit quisquam in optio, placeat nemo, tempora sapiente minus impedit
              obcaecati?
              Excepturi?
            </p>
          </div>
        </div>
        <div class="faq">
          <div class="question">
            <p>Do I need this if I’ve had my yearly medical check? What is the difference?</p>
            <img src="./assets/icons/arrow.svg" alt="arrow icon">
          </div>
          <div class="answer">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil necessitatibus facere aliquam nam ut at
              praesentium tempore aspernatur sit quisquam in optio, placeat nemo, tempora sapiente minus impedit
              obcaecati?
              Excepturi?</p>
          </div>
        </div>
        <div class="faq">
          <div class="question">
            <p>Can I bring another person to the appointment?</p>
            <img src="./assets/icons/arrow.svg" alt="arrow icon">
          </div>
          <div class="answer">
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil necessitatibus facere aliquam nam ut at
              praesentium tempore aspernatur sit quisquam in optio, Lorem ipsum dolor sit amet consectetur adipisicing
              elit.
              Nihil necessitatibus facere aliquam nam ut at
              praesentium tempore aspernatur sit quisquam in optio, p</p>
          </div>
        </div>
        <div class="faq">
          <div class="question">
            <p>What if I have to cancel or if I’m not sure I’ll be able to make it?</p>
            <img src="./assets/icons/arrow.svg" alt="arrow icon">
          </div>
          <div class="answer">
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil necessitatibus facere aliquam nam ut at
              praesentium tempore aspernatur sit quisquam in optio, Lorem ipsum dolor sit amet consectetur adipisicing
              elit.
              Nihil necessitatibus facere aliquam nam ut at
              praesentium tempore aspernatur sit quisquam in optio, p</p>
          </div>
        </div>
        <div class="faq">
          <div class="question">
            <p>Do I need to bring anything with me?</p>
            <img src="./assets/icons/arrow.svg" alt="arrow icon">
          </div>
          <div class="answer">
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil necessitatibus facere aliquam nam ut at
              praesentium tempore aspernatur sit quisquam in optio, Lorem ipsum dolor sit amet consectetur adipisicing
              elit.
              Nihil necessitatibus facere aliquam nam ut at
              praesentium tempore aspernatur sit quisquam in optio, p</p>
          </div>
        </div>
        <div class="faq">
          <div class="question">
            <p>What if I don’t have insurance?</p>
            <img src="./assets/icons/arrow.svg" alt="arrow icon">
          </div>
          <div class="answer">
            <p> Pmet consectetur adipisicing elit. Nihil necessitatibus facere aliquam nam ut at
              praesentium tempore aspernatur sit quisquam in optio, Lorem ipsum dolor sit amet consectetur adipisicing
              elit.
              Nihil necessitatibus facere aliquam nam ut at
              praesentium tempore aspernatur sit quisquam in optio, Lorem ipsum dolor sit amet consectetur adipisicing
              elit. Repudiandae vero provident aut et quam a, recusandae corporis consequatur totam voluptatum soluta
              sapiente doloremque unde porro quia</p>
          </div>
        </div>
        <div class="faq">
          <div class="question">
            <p>Do the weight loss programs you offer work?</p>
            <img src="./assets/icons/arrow.svg" alt="arrow icon">
          </div>
          <div class="answer">
            <p> Lorem, ipsum do ipsa beatae officia voluptates facere quibusdam, accusamus quod?
              Nihil necessitatibus facere aliquam nam ut at
              praesentium tempore aspernatur sit quisquam in optio, Lorem ipsum dolor sit amet consectetur adipisicing
              elit. Repudiandae vero provident aut et quam a, recusandae corporis consequatur totam voluptatum soluta
              sapiente doloremque unde porro quia</p>
          </div>
        </div>
        <div class="faq">
          <div class="question">
            <p>What's the catch?</p>
            <img src="./assets/icons/arrow.svg" alt="arrow icon">
          </div>
          <div class="answer">
            <p> Pptio, Lorem ipsum dolor sit amet consectetur adipisicing
              elit. Repudiandae vero provident aut et quam a, recusandae corporis consequatur totam voluptatum soluta
              sapiente doloremque unde porro quia</p>
          </div>
        </div>
        <div class="faq">
          <div class="question">
            <p>Will I have to exhaust myself in the gym to make it work?</p>
            <img src="./assets/icons/arrow.svg" alt="arrow icon">
          </div>
          <div class="answer">
            <p> Pptio, Lorem ipsum dolor sit amet consectetur adipisicing
              elit. Repudiandae vero provident aut et quam a, recusandae corporis consequatur totam voluptatum soluta
              sapiente doloremque unde porro quia</p>
          </div>
        </div>
        <div class="circle12"></div>
      </section>
      </div>
    @endsection
