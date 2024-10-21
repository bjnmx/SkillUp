<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillUp</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="icono.ico" type="image/x-icon">

</head>
<body>

<!-- Header / Barra de navegación -->
<header>
    <nav class="navbar">
        <div class="logo">
            <img src="logo.png" alt="Logo de SkillUp" class="logo-img">
        </div>
        <ul class="nav-menu">
            <li><a href="#inicio">⌂ Inicio</a></li>
            <li><a href="#cursos">📚 Cursos</a></li>
            <li><a href="#nosotros">䷴ Nosotros</a></li>
            <li><a href="#contacto">🗳 Contacto</a></li>
        </ul>
        <div class="user-count">
            <h3> 👥 Usuarios que han aprendido en SkillUp:  <span style="background: #007bff!important;border-radius: 16px; padding: 5px;" id="userCounter">0</span></h3>
        </div>
    </nav>
    <div class="header-description">
        <h2>Aprende Habilidades Digitales Gratis</h2>
        <p>Inscríbete en cursos de uso básico de Internet, manejo de software, seguridad digital y más. Mejora tus habilidades y obtén tu certificación.</p>
    </div>
</header>




<!-- Hero Section -->
<section class="hero">
    <h1>Bienvenido a la Plataforma Educativa</h1>
    <p>Tu acceso a la educación digital en un solo lugar</p>
    <button class="btn-primary">✍ Explorar Cursos</button>
</section>

<!-- Contenido -->
<section id="cursos" class="content-section">
    <h2 style="color: #508d41;">Cursos Destacados</h2>
    <button class="scroll-btn left" id="scrollLeft" style="border-radius: 32px">
        <i>&lt;</i>
    </button>
    <div style="color: #508d41" class="scroll-container" id="scrollContainer">
        <div class="card">
            <h3>Introducción al Uso de Internet</h3>
            <p>Aprende a usar internet de manera eficiente y segura.</p>
            <button class="btn-secondary">Ver Curso</button>
        </div>
        <div class="card">
            <h3>Creación de Cuentas de Correo Electrónico</h3>
            <p>Guía completa para crear y manejar tu cuenta de correo.</p>
            <button class="btn-secondary">Ver Curso</button>
        </div>
        <!-- Añade más tarjetas de cursos aquí -->
        <div class="card">
            <h3>Navegación Segura en la Web</h3>
            <p>Cómo evitar sitios peligrosos y proteger tu privacidad.</p>
            <button class="btn-secondary">Ver Curso</button>
        </div>
        <div class="card">
            <h3>Seguridad en Redes Wi-Fi</h3>
            <p>Aprende a proteger tu red Wi-Fi de intrusos.</p>
            <button class="btn-secondary">Ver Curso</button>
        </div>
        <div class="card">
            <h3>Cómo Crear una Cuenta de Correo Electrónico</h3>
            <p>Aprende a crear y gestionar una cuenta de correo electrónico.</p>
            <button class="btn-secondary">Ver Curso</button>
        </div>
        <div class="card">
            <h3>Protección de tu Dispositivo contra Malware</h3>
            <p>Conoce las mejores prácticas para proteger tu dispositivo del malware.</p>
            <button class="btn-secondary">Ver Curso</button>
        </div>
        <div class="card">
            <h3>Bases de la Seguridad en Redes Sociales</h3>
            <p>Aprende a proteger tu privacidad en redes sociales.</p>
            <button class="btn-secondary">Ver Curso</button>
        </div>
        <div class="card">
            <h3>Introducción a Google Calendar</h3>
            <p>Organiza tus tareas y eventos con Google Calendar.</p>
            <button class="btn-secondary">Ver Curso</button>
        </div>
        <div class="card">
            <h3>Usando Google Maps para Navegación</h3>
            <p>Aprende a usar Google Maps para encontrar direcciones y ubicaciones.</p>
            <button class="btn-secondary">Ver Curso</button>
        </div>
        <div class="card">
            <h3>Cómo Crear Contraseñas Seguras</h3>
            <p>Conoce cómo generar contraseñas fuertes y seguras.</p>
            <button class="btn-secondary">Ver Curso</button>
        </div>
        <div class="card">
            <h3>Exploración de YouTube</h3>
            <p>Descubre cómo buscar y consumir contenido educativo en YouTube.</p>
            <button class="btn-secondary">Ver Curso</button>
        </div>
        <div class="card">
            <h3>Introducción a la Edición de Video con DaVinci Resolve</h3>
            <p>Aprende las bases para editar videos con DaVinci Resolve.</p>
            <button class="btn-secondary">Ver Curso</button>
        </div>
        <div class="card">
            <h3>Cómo Utilizar LinkedIn para Búsqueda de Empleo</h3>
            <p>Descubre cómo utilizar LinkedIn para mejorar tu perfil profesional y buscar trabajo.</p>
            <button class="btn-secondary">Ver Curso</button>
        </div>
        <div class="card">
            <h3>Usando Google Forms para Crear Encuestas</h3>
            <p>Crea y distribuye encuestas utilizando Google Forms.</p>
            <button class="btn-secondary">Ver Curso</button>
        </div>
        <div class="card">
            <h3>Introducción a Microsoft Word</h3>
            <p>Aprende a usar Microsoft Word para crear documentos básicos.</p>
            <button class="btn-secondary">Ver Curso</button>
        </div>
        <div class="card">
            <h3>Edición de Texto en Microsoft Word</h3>
            <p>Descubre cómo editar, dar formato y trabajar con texto en Word.</p>
            <button class="btn-secondary">Ver Curso</button>
        </div>
        <div class="card">
            <h3>Cómo Hacer Respaldo de tus Archivos</h3>
            <p>Aprende a hacer copias de seguridad de tus archivos importantes.</p>
            <button class="btn-secondary">Ver Curso</button>
        </div>
        <div class="card">
            <h3>Crear Blogs con WordPress</h3>
            <p>Aprende a crear y gestionar tu propio blog con WordPress.</p>
            <button class="btn-secondary">Ver Curso</button>
        </div>
        <div class="card">
            <h3>Introducción a la Programación con Python</h3>
            <p>Descubre los conceptos básicos de programación utilizando Python.</p>
            <button class="btn-secondary">Ver Curso</button>
        </div>
        <div class="card">
            <h3>Iniciación a la Fotografía Digital</h3>
            <p>Aprende a tomar fotos de alta calidad con cámaras digitales.</p>
            <button class="btn-secondary">Ver Curso</button>
        </div>
        <div class="card">
            <h3>Uso Básico de Microsoft Excel</h3>
            <p>Descubre cómo utilizar Excel para manejar datos y tablas.</p>
            <button class="btn-secondary">Ver Curso</button>
        </div>
        <div class="card">
            <h3>Cómo Configurar tu Correo Electrónico en el Celular</h3>
            <p>Aprende a configurar y gestionar tu correo electrónico desde tu celular.</p>
            <button class="btn-secondary">Ver Curso</button>
        </div>
        <div class="card">
            <h3>Cómo Mejorar la Velocidad de tu Computadora</h3>
            <p>Consejos para optimizar el rendimiento de tu computadora.</p>
            <button class="btn-secondary">Ver Curso</button>
        </div>
        <div class="card">
            <h3>Creación de Formularios Interactivos en Google Forms</h3>
            <p>Aprende a crear formularios interactivos y recopilar datos con Google Forms.</p>
            <button class="btn-secondary">Ver Curso</button>
        </div>

        <!-- ... Continuar con las demás tarjetas ... -->
    </div>
    <button class="scroll-btn right" id="scrollRight" style="border-radius: 32px">
        <i>&gt;</i>
    </button>
</section>
<section id="contacto" class="contact-section">
    <h2>Contáctanos</h2>
    <p>Si tienes preguntas o comentarios, no dudes en contactarnos. Estaremos encantados de ayudarte.</p>
    <form id="contactForm">
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">Mensaje:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn-primary">Enviar</button>
    </form>
</section>
<footer>
    <p>© SkillUp 2024</p>
</footer>

<!-- Script para scroll -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const scrollContainer = document.getElementById('scrollContainer');
        const scrollLeftBtn = document.getElementById('scrollLeft');
        const scrollRightBtn = document.getElementById('scrollRight');

        // Configura el valor de desplazamiento
        const scrollAmount = 300;

        // Mover el scroll hacia la derecha
        scrollRightBtn.addEventListener('click', () => {
            scrollContainer.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        });

        // Mover el scroll hacia la izquierda
        scrollLeftBtn.addEventListener('click', () => {
            scrollContainer.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        });

        // Mostrar/ocultar los botones según el desplazamiento
        scrollContainer.addEventListener('scroll', () => {
            scrollLeftBtn.style.display = scrollContainer.scrollLeft > 0 ? 'block' : 'none'; // Mostrar botón izquierdo
            scrollRightBtn.style.display = scrollContainer.scrollLeft < (scrollContainer.scrollWidth - scrollContainer.clientWidth) ? 'block' : 'none'; // Mostrar botón derecho
        });

        // Inicialmente verificar el estado de los botones
        scrollContainer.dispatchEvent(new Event('scroll'));
    });

</script>
<script>
    document.querySelector('.btn-primary').addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector('#cursos').scrollIntoView({ behavior: 'smooth' });
    });
</script>
<script>
    // Genera un número aleatorio entre 1 y 100 para simular usuarios
    const userCount = Math.floor(Math.random() * 100) + 1; // Cambia el 100 por el rango que prefieras
    document.getElementById('userCounter').innerText = userCount; // Actualiza el texto del contador
</script>


</body>
</html>
