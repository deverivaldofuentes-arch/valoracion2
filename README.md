# Taller Automotriz - Segundo Examen Parcial

## Descripción del Proyecto
Este proyecto es un sistema de autenticación manual y un módulo de Servicios para un Taller Automotriz, desarrollado en Laravel. Cumple con todos los requerimientos del Segundo Examen Parcial:
- Autenticación manual (`Auth::attempt()`).
- Módulo Servicios (CRUD).
- Relaciones de base de datos uno a muchos (User -> Servicio).
- Vistas implementadas con Bootstrap.
- Base de datos PostgreSQL (configurado según credenciales proporcionadas).

## Pruebas Obligatorias (Funcionamiento)

A continuación se detallan las pruebas realizadas que demuestran el correcto funcionamiento del sistema:

1. **El Login es la primera pantalla:** Al ingresar a `http://127.0.0.1:8000`, el sistema redirige automáticamente a la vista de Login en lugar de `welcome.blade.php`.
2. **Existen al menos dos usuarios:** Se crearon `User One (user1@test.com)` y `User Two (user2@test.com)` con contraseñas encriptadas con Hash. (Contraseña para ambos: `123123`)
3. **Ambos usuarios pueden iniciar sesión:** Funciona el inicio de sesión manual para ambos usuarios.
4. **Cada usuario registra servicios:** Desde el formulario en `/servicios/create`, el usuario puede registrar un servicio.
5. **Los servicios se almacenan en la base de datos:** El registro en PostgreSQL es exitoso.
6. **La tabla muestra correctamente el usuario que registró cada servicio:** En `/servicios`, la columna "Registrado por" muestra el nombre del propietario (`$servicio->user->name`).
7. **Logout funciona correctamente:** Al presionar "Logout", la sesión se destruye y se redirige al Login.
8. **Protección de rutas:** No es posible acceder a `/servicios` sin autenticación gracias al middleware `auth`.

*(Nota para el alumno: Adjuntar capturas de pantalla de las vistas aquí antes de enviar el enlace al docente)*

---
*Desarrollo completo realizado siguiendo los requerimientos del examen práctico.*
