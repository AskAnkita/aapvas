<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Virtual Assistant Services</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background-color: #f9f9f9; /* offwhite */
      color: #1a2a44; /* dark navy blue */
    }

    header {
      text-align: center;
      padding: 50px 20px;
      background-color: #f9f9f9;
    }

    header h1 {
      font-size: 2.5rem;
      margin-bottom: 10px;
      color: #1a2a44;
    }

    header p {
      font-size: 1.1rem;
      color: #444;
    }

    .btn {
      background-color: #ff6600; /* orange */
      color: white;
      padding: 12px 25px;
      border: none;
      border-radius: 6px;
      font-size: 1rem;
      cursor: pointer;
      margin-top: 20px;
      transition: 0.3s;
    }

    .btn:hover {
      background-color: #e65500;
    }

    section {
      padding: 60px 20px;
      text-align: center;
    }

    h2 {
      font-size: 2rem;
      margin-bottom: 40px;
    }

    /* Services */
    .services {
      display: flex;
      justify-content: center;
      gap: 50px;
      flex-wrap: wrap;
    }

    .service {
      width: 180px;
    }

    .service img {
      width: 50px;
      margin-bottom: 15px;
    }

    /* Testimonials */
    .testimonials {
      display: flex;
      justify-content: center;
      gap: 30px;
      flex-wrap: wrap;
    }

    .testimonial {
      background: #fff;
      border-radius: 10px;
      padding: 20px;
      width: 250px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      text-align: center;
    }

    .testimonial img {
      width: 70px;
      height: 70px;
      border-radius: 50%;
      margin-bottom: 15px;
    }

    /* Pricing */
    .pricing {
      display: flex;
      justify-content: center;
      gap: 30px;
      flex-wrap: wrap;
    }

    .plan {
      background: #fff;
      border-radius: 10px;
      padding: 30px;
      width: 250px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .plan h3 {
      margin-bottom: 10px;
    }

    .price {
      font-size: 1.5rem;
      margin: 15px 0;
      color: #ff6600;
    }

    footer {
      text-align: center;
      padding: 20px;
      background: #1a2a44;
      color: #fff;
    }
  </style>
</head>
<body>

  <header>
    <h1>Virtual Assistant Services for Your Business</h1>
    <p>Our skilled virtual assistants are here to help you with what matters most.</p>
    <button class="btn">Get Started</button>
  </header>

  <section>
    <h2>Our Services</h2>
    <div class="services">
      <div class="service">
        <img src="https://img.icons8.com/ios-filled/100/1a2a44/administrator-male.png" alt="Admin Support">
        <p>Administrative Support</p>
      </div>
      <div class="service">
        <img src="https://img.icons8.com/ios-filled/100/1a2a44/customer-support.png" alt="Customer Service">
        <p>Customer Service</p>
      </div>
      <div class="service">
        <img src="https://img.icons8.com/ios-filled/100/1a2a44/data-configuration.png" alt="Data Entry">
        <p>Data Entry</p>
      </div>
      <div class="service">
        <img src="https://img.icons8.com/ios-filled/100/1a2a44/research.png" alt="Research">
        <p>Research</p>
      </div>
    </div>
  </section>

  <section>
    <h2>What Our Clients Say</h2>
    <div class="testimonials">
      <div class="testimonial">
        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Surah">
        <h4>Surah J.</h4>
        <p>"Excellent support! Saved me so much time."</p>
      </div>
      <div class="testimonial">
        <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="John">
        <h4>John D.</h4>
        <p>"Great communication and reliable service."</p>
      </div>
      <div class="testimonial">
        <img src="https://randomuser.me/api/portraits/women/46.jpg" alt="Emily">
        <h4>Emily R.</h4>
        <p>"Professional and efficient virtual assistants."</p>
      </div>
    </div>
  </section>

  <section>
    <h2>Pricing Plans</h2>
    <div class="pricing">
      <div class="plan">
        <h3>Basic</h3>
        <p class="price">$200/month</p>
        <p>✔ Feature 1</p>
        <p>✔ Feature 2</p>
        <p>✔ Feature 3</p>
        <button class="btn">Select Plan</button>
      </div>
      <div class="plan">
        <h3>Standard</h3>
        <p class="price">$400/month</p>
        <p>✔ Feature 1</p>
        <p>✔ Feature 2</p>
        <p>✔ Feature 3</p>
        <button class="btn">Select Plan</button>
      </div>
      <div class="plan">
        <h3>Premium</h3>
        <p class="price">$500/month</p>
        <p>✔ Feature 1</p>
        <p>✔ Feature 2</p>
        <p>✔ Feature 3</p>
        <button class="btn">Select Plan</button>
      </div>
    </div>
  </section>

  <footer>
    <p>&copy; 2025 AAPVAS. All rights reserved.</p>
  </footer>

</body>
</html>
