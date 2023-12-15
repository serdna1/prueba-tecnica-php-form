<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prueba Técnica PHP Form</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <section>
    <h1>Contacta con nosotros</h1>
    
    <form id="contact-form">
      <div class="input-pair-container">
        <input 
          type="text"
          id="name"
          name="name"
          placeholder="Nombre*"
        >
    
        <input 
          type="email"
          id="email"
          name="email"
          placeholder="Email*"
        >
      </div>
  
      <div class="input-pair-container">
        <input 
          type="tel"
          id="phone"
          name="phone"
          placeholder="Teléfono"
        >
    
        <input 
          type="text"
          id="subject"
          name="subject"
          placeholder="Asunto"
        >
      </div>
  
      <textarea
        name="comments"
        id="comments"
        rows="8"
        placeholder="Comentarios*"
      ></textarea>
  
      <div class="checkbox-container">
        <input 
          type="checkbox"
          id="policy"
          name="policy"
        >
        <label for="policy">
          He leído y acepto 
          <a
            class="policy-anchor"
            href="policy.php"
            target="_blank"
            rel="noopener noreferrer"
          >
            la política de privacidad
          </a>
        </label>
    
      </div>
  
      <div class="submit-loader-container">
        <input
          type="submit"
          value="Enviar"
        >
        <div id="loader"></div>
      </div>
    </form>
    
    <p 
      class="message error"
      id="error-message"
    >
      Rellene los campos obligatorios y marque el check de la política de privacidad
    </p>
    <p 
      class="message success"
      id="success-message"
    >
      Formulario enviado con éxito
    </p>
  </section>
  <script src="main.js"></script>
</body>
</html>