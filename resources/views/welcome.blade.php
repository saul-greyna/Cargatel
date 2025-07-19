<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

            <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>


    </head>

    <body>
        <header role="banner" class="flex flex-col items-center relative top-4">
  <nav class="w-[90%] absolute flex flex-row justify-around items-center rounded-[45px] backdrop-blur-sm bg-white/10 border border-white/20">
    <a href="index.html" aria-label="Ir al inicio">
      <img src="resources/icon/Cargatel-logo-horizontal.svg" alt="Logo horizontal de Cargatel" width="350" height="75" class=""/>
    </a>
    <ul class="flex flex-row gap-4 list-none">
      <li><a href="index.html" class="text-[#1c3462] text-base" title="Inicio de Cargatel, fletes y mudanzas">Inicio</a></li>
      <li><a href="cotizacion.html" class="text-[#1c3462] text-base" title="Solicita tu cotización de flete o mudanza en León">Cotización</a></li>
      <li><a href="#flota" class="text-[#1c3462] text-base" title="Conoce nuestra flota de transporte">Flota</a></li>
      <li><a href="#contact" class="text-[#1c3462] text-base" title="Servicios de mudanza y flete local o foráneo">Servicios</a></li>
      <li><a href="nosotros.html" class="text-[#1c3462] text-base" title="Quiénes somos en Cargatel">Nosotros</a></li>
      <li><a href="#contacto" class="text-[#1c3462] text-base" title="Formulario de contacto para tu envío">Contacto</a></li>
    </ul>
    <button type="button" class="backdrop-blur-sm bg-[#111928]/15 text-[#1c3462] border border-white/20 rounded-[45px] px-4 py-2 text-[1.1rem] font-semibold cursor-pointer">Cotizar</button>
  </nav>
</header>

<main>
  <section id="first-section" class="flex flex-col items-center justify-center w-full h-screen relative text-center">
    <img src="resources/img/IMG-20250614-01.jpg" alt="Personal de Cargatel cargando muebles durante una mudanza"
         class="absolute inset-0 w-full h-full object-cover opacity-70 -z-10" />
    <h2 class="text-[#1c3462] w-[70%] text-[clamp(1.5rem,6vw,5.4rem)] font-bold px-4 py-16">Solucionamos tus mudanzas y fletes en todo el país</h2>
    <p class="text-[#eeeeee] text-[clamp(1rem,3.5vw,1.6rem)] w-[60%] font-medium px-4 py-16">
      Más de 25 años de experiencia nos respaldan como especialistas en mudanzas locales y foráneas, fletes
      económicos, volado de muebles y renta de unidades con operador en toda la República Mexicana.
    </p>
    <button type="button" class="backdrop-blur-sm bg-[#111928]/15 text-[#eeeeee] border border-white/20 rounded-[45px] px-4 py-2 text-[clamp(0.9rem,2.5vw,1.1rem)] cursor-pointer m-4">Solicita tu cotización gratuita</button>
  </section>
  <section id="second-section" class="flex flex-col items-center justify-center w-full h-[50vh] text-center">
  <h2 class="text-[#58570E] text-[clamp(11px,6vw,1rem)] py-4">Nuestra solución</h2>
  <p class="text-[#1c3462] text-[clamp(0.9rem,2.2vw,3.5rem)] w-[80%] px-4 py-4">
    Cotiza tu mudanza o flete desde la comodidad de tu hogar con nuestro<br>
    cotizador en línea, uno de nuestros asesores revisará <br>
    tu solicitud y se pondrá en contacto contigo.
  </p>
  <a href="#about" class="backdrop-blur-sm bg-[#111928]/15 text-[#1c3462] border border-white/20 rounded-[45px] px-4 py-2 text-[1.1rem] font-semibold cursor-pointer m-4" role="button" aria-label="Ir al formulario para cotizar tu mudanza o flete">
    Cotizar ahora
  </a>
</section>
<section id="third-section" class="flex items-center justify-center w-full h-screen">
  <section class="w-[90%] h-[90%] bg-cover bg-center rounded-[45px] overflow-hidden flex items-center justify-start"
           style="background-image: url('resources/img/IMG-20250614-05.jpg');">
    <div class="w-full max-w-[1100px] h-full bg-gradient-to-r from-[#1c346280] to-transparent flex items-center justify-start p-20">
      <div class="text-[#eeeeee] max-w-[700px] max-h-[900px]">
        <p class="text-[clamp(.9rem,2.2vw,1rem)] opacity-90 p-4">Conoce nuestra flota de unidades y elige la que mejor se adapte a tus necesidades</p>
        <h2 class="text-[#1c3462] text-[2.5rem] font-bold p-4">Flota</h2>
        <p class="text-[#eeeeee] text-[1.1rem] leading-relaxed p-4">
          En Cargatel contamos con una amplia gama de vehículos diseñados para satisfacer todo tipo de servicio:
          desde cargas ligeras hasta mudanzas industriales.
        </p>
        <button class="backdrop-blur-sm bg-[#111928]/15 text-[#eeeeee] border border-white/20 rounded-[45px] px-4 py-2 text-[clamp(0.9rem,2.5vw,1.1rem)] cursor-pointer m-4">Conoce nuestra flota</button>
        <div class="mt-4">
          <ul class="text-[#eeeeee] font-light">
            <li class="text-[clamp(.9rem,2.9vw,1.7rem)] py-2">Vehículos modernos y seguros</li>
            <li class="text-[clamp(.9rem,2.9vw,1.7rem)] py-2">Operadores profesionales</li>
            <li class="text-[clamp(.9rem,2.9vw,1.7rem)] py-2">Soluciones a la medida</li>
            <li class="text-[clamp(.9rem,2.9vw,1.7rem)] py-2">Cobertura nacional</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</section>
<section id="fourth-section" class="w-full h-[75vh] flex flex-col items-center justify-center text-center">
  <h2 class="text-[clamp(1.2rem,3.3vw,2.5rem)] text-[#58570E] py-2">Conoce nuestros servicios</h2>
  <article class="flex flex-row items-center justify-center gap-[50px] p-12">
    <!-- Servicio 1 -->
    <div class="w-1/4 h-[440px] backdrop-saturate-200 bg-[#eeeeee]/75 border border-white/20 rounded-[45px] flex flex-col justify-center items-center p-2">
      <img src="resources/img/IMG-20250614-10.jpg" alt="Personal logístico de Cargatel organizando carga"
           class="w-full object-cover rounded-[45px]" width="383" height="200" loading="lazy">
      <h3 class="text-[1.4rem] text-[#1c3462] py-2">Logística</h3>
      <p class="text-[1rem] text-[#58570E] p-2">
        La logística planifica, implementa y controla de forma eficiente el flujo de bienes,
        servicios e información desde el origen hasta el consumidor, optimizando costos y tiempos.
      </p>
      <button class="backdrop-blur-sm bg-[#111928]/15 text-[#1c3462] border border-white/20 rounded-[45px] px-4 py-2 text-[1.1rem] font-semibold cursor-pointer m-2" aria-label="Solicitar servicio de logística">
        Solicitar Logística
      </button>
    </div>

    <!-- Servicio 2 -->
    <div class="w-1/4 h-[440px] backdrop-saturate-200 bg-[#eeeeee]/75 border border-white/20 rounded-[45px] flex flex-col justify-center items-center p-2">
      <img src="resources/img/IMG-20250614-11.jpg" alt="Repartidor de Cargatel entregando paquete a domicilio"
           class="w-full object-cover rounded-[45px]" width="383" height="200" loading="lazy">
      <h3 class="text-[1.4rem] text-[#1c3462] py-2">Última milla</h3>
      <p class="text-[1rem] text-[#58570E] p-2">
        La entrega de última milla es el tramo final del envío, desde el centro de distribución hasta el
        cliente, garantizando que el producto llegue en tiempo y en perfectas condiciones.
      </p>
      <button class="backdrop-blur-sm bg-[#111928]/15 text-[#1c3462] border border-white/20 rounded-[45px] px-4 py-2 text-[1.1rem] font-semibold cursor-pointer m-2" aria-label="Solicitar servicio de logística">
        Solicitar Última Milla
      </button>
    </div>

    <!-- Servicio 3 -->
    <div class="w-1/4 h-[440px] backdrop-saturate-200 bg-[#eeeeee]/75 border border-white/20 rounded-[45px] flex flex-col justify-center items-center p-2">
      <img src="resources/img/IMG-20250614-09.jpg" alt="Camión de Cargatel trasladando maquinaria pesada"
           class="w-full object-cover rounded-[45px]" width="383" height="200" loading="lazy">
      <h3 class="text-[1.4rem] text-[#1c3462] py-2">Traslado de equipo y maquinaria</h3>
      <p class="text-[1rem] text-[#58570E] p-2">
        Movemos maquinaria industrial o equipo de producción, ya sea dentro de una planta, entre
        instalaciones o hacia un nuevo sitio, con la seguridad y cuidado necesarios.
      </p>
      <button class="backdrop-blur-sm bg-[#111928]/15 text-[#1c3462] border border-white/20 rounded-[45px] px-4 py-2 text-[1.1rem] font-semibold cursor-pointer m-2" aria-label="Solicitar servicio de logística">
        Solicitar traslado de equipo
      </button>
    </div>
  </article>
</section>
<section id="fifth-section" class="bg-[#eeeeee] flex flex-col justify-center items-center w-full h-[75vh] text-center">
  <h2 class="text-[2rem] font-bold leading-snug text-[#58570E] p-4">¿Nuestro proceso?</h2>
  <h3 class="text-[1rem] text-[#1c3462] p-2">Conócenos</h3>

  <article class="flex flex-row items-center justify-center w-full">
    <!-- Card texto -->
    <div class="w-[460px] p-8">
      <h4 class="text-[clamp(1.5rem,3.5vw,2rem)] font-bold leading-tight text-[#58570E] p-2 text-center">
        Cárgate de confianza... cargamos tu esfuerzo
      </h4>
      <p class="text-[1.2rem] p-2 text-[#1c3462]">
        Contáctanos y uno de nuestros especialistas se comunicará contigo para resolver tus dudas o ayudarte a elegir el mejor servicio.
      </p>
    </div>

    <!-- Card imagen -->
    <div class="w-[460px] p-8">
      <img src="resources/img/IMG-20250614-03.webp"
           alt="Especialista de Cargatel atendiendo a cliente"
           width="640" height="480"
           class="rounded-[45px] w-full h-auto">
    </div>
  </article>
</section>
<section id="sixth-section" class="w-full h-screen flex flex-col items-stretch justify-evenly">
  <h2 class="text-[clamp(1.5rem,3.5vw,2rem)] font-bold leading-tight text-[#58570E] text-center p-2">
    Ubícanos fácilmente
  </h2>

  <article class="flex flex-col items-start w-1/2 pl-40">
    <h3 class="text-[1.5rem] text-[#8f956e] p-2">Tres sucursales, un mismo compromiso.</h3>
    <p class="text-[1.2rem] text-[#1c3462] p-2">
      En Cargatel contamos con sucursales en León, Aguascalientes y Querétaro para ofrecerte un
      servicio más cercano y personalizado. Cada una de nuestras sucursales está equipada para
      atender tus necesidades de fletes y mudanzas de manera eficiente y profesional.
    </p>
  </article>

  <div class="flex flex-row justify-center gap-8">
    <!-- Mapa León -->
    <div class="bg-[#eeeeee] border border-[#eeeeee] rounded-[45px] p-4 shadow-md w-[500px] h-[460px]">
      <h1 class="text-[2rem] text-[#1c3462] p-4">León</h1>
      <iframe class="w-full h-[360px] border-none rounded-[45px]"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.052992026745!2d-101.6846092!3d21.1502893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c718ad4b8fd317%3A0x5748ca9c1ad0448!2sCargatel%20S.A.%20de%20C.V.!5e0!3m2!1sen!2smx!4v1750872933970!5m2!1sen!2smx"
        title="Mapa de la sucursal Cargatel León" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
    </div>

    <!-- Mapa Aguascalientes -->
    <div class="bg-[#eeeeee] border border-[#eeeeee] rounded-[45px] p-4 shadow-md w-[500px] h-[460px]">
      <h1 class="text-[2rem] text-[#1c3462] p-4">Aguascalientes</h1>
      <iframe class="w-full h-[360px] border-none rounded-[45px]"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3700.873411516842!2d-102.26266172401328!3d21.93941745587794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429efde9b96b9fb%3A0x9d51615d6bc6ec7e!2sFrancisco%20L%C3%B3pez%20Medrano%20117%2C%20Villas%20de%20Ntra.%20Sra.%20de%20la%20Asunci%C3%B3n%2C%2020126%20Aguascalientes%2C%20Ags.!5e0!3m2!1sen!2smx!4v1750877160659!5m2!1sen!2smx"
        title="Mapa de la sucursal Cargatel Aguascalientes" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
    </div>

    <!-- Mapa Querétaro -->
    <div class="bg-[#eeeeee] border border-[#eeeeee] rounded-[45px] p-4 shadow-md w-[500px] h-[460px]">
      <h1 class="text-[2rem] text-[#1c3462] p-4">Querétaro</h1>
      <iframe class="w-full h-[360px] border-none rounded-[45px]"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7472.619390246211!2d-100.43953192403909!3d20.53450580456949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d34580df3139fd%3A0x22818d15577e774d!2sAv.%20Paseo%20Constituyentes%201637%2C%20Los%20Pajaros%2C%2076904%20El%20Pueblito%2C%20Qro.!5e0!3m2!1sen!2smx!4v1750877543910!5m2!1sen!2smx"
        title="Mapa de la sucursal Cargatel Querétaro" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
    </div>
  </div>
</section>
</main>
<footer role="contentinfo" class="flex flex-col items-stretch justify-evenly p-12 w-full bg-[#eeeeee]">
  <div class="flex justify-around flex-wrap">
    <!-- Enlaces útiles -->
    <nav aria-label="Enlaces útiles">
      <h2 class="text-[1.9rem] font-bold text-[#1c3462] py-2">Enlaces útiles</h2>
      <ul>
        <li class="py-2"><a href="#" class="text-[#58570E] hover:underline">Servicios</a></li>
        <li class="py-2"><a href="#" class="text-[#58570E] hover:underline">Cobertura</a></li>
        <li class="py-2"><a href="#" class="text-[#58570E] hover:underline">Comparativa</a></li>
      </ul>
    </nav>

    <!-- Empresa -->
    <nav aria-label="Empresa">
      <h2 class="text-[1.9rem] font-bold text-[#1c3462] py-2">Empresa</h2>
      <ul>
        <li class="py-2"><a href="#" class="text-[#58570E] hover:underline">Nosotros</a></li>
        <li class="py-2"><a href="#" class="text-[#58570E] hover:underline">Equipo</a></li>
      </ul>
    </nav>

    <!-- Soporte -->
    <nav aria-label="Soporte">
      <h2 class="text-[1.9rem] font-bold text-[#1c3462] py-2">Soporte</h2>
      <ul>
        <li class="py-2"><a href="#" class="text-[#58570E] hover:underline">Contacto</a></li>
        <li class="py-2"><a href="#" class="text-[#58570E] hover:underline">Recursos</a></li>
        <li class="py-2"><a href="#" class="text-[#58570E] hover:underline">Preguntas frecuentes</a></li>
      </ul>
    </nav>

    <!-- Contacto -->
    <section aria-label="Información de contacto">
      <h2 class="text-[1.9rem] font-bold text-[#1c3462] py-2">Contáctanos</h2>
      <address class="flex flex-col items-start justify-around">
        <a href="tel:+524772170049" class="text-[#58570E] hover:underline">+52 (477) 217-00-49</a><br>
        <a href="mailto:contacto@cargatel.com" class="text-[#58570E] hover:underline">contacto@cargatel.com</a>
      </address>

      <h2 class="text-[1.9rem] font-bold text-[#1c3462] py-4">Síguenos</h2>
      <ul class="flex flex-row gap-4 items-center text-[#58570E]">
        <!-- Facebook -->
        <li>
          <a href="https://www.facebook.com/p/Cargatel-SA-de-CV-100063975362978/" target="_blank" rel="noopener noreferrer" aria-label="Facebook de Cargatel">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" class="bi bi-facebook" viewBox="0 0 16 16" fill="currentColor">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
            </svg>
          </a>
        </li>
        <!-- Instagram -->
        <li>
          <a href="https://www.instagram.com/cargatel.mx" target="_blank" rel="noopener noreferrer" aria-label="Instagram de Cargatel">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" class="bi bi-instagram" viewBox="0 0 16 16" fill="currentColor">
              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
            </svg>
          </a>
        </li>
      </ul>
    </section>
  </div>

  <!-- Logotipo -->
  <figcaption class="text-left text-[4rem] text-[#1c3462] flex flex-row items-center mt-8">
    <img src="resources/icon/Cargatel-imagen.svg" alt="Logotipo institucional de Cargatel" width="550" height="375">
    <h2 class="ml-4">Cargatel</h2>
  </figcaption>
</footer>        
    </body>
</html>
