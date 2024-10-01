# Proyecto de Validación de Usuarios

Este proyecto ha sido desarrollado como parte del taller **"GA5-220501095-AA1-EV01 - Taller sobre construcción del prototipo del software de acuerdo al análisis de las características funcionales y de calidad"**. El objetivo es crear un sistema funcional que cumpla con los siguientes requerimientos:

## Requerimientos funcionales del sistema

1. **Validación de autenticidad de usuario**: Pantalla para que los usuarios puedan autenticarse.
2. **Ingreso de datos personales**: Pantalla que permita ingresar nombre, apellido, cédula y fecha de nacimiento.
3. **Manejo de errores**: Pantalla que muestre posibles errores en los procesos anteriores.
4. **Paleta de colores**: Utilización de una combinación de tres colores para los componentes.

---

## Integrantes del Proyecto

- **Diana María Lozano González** - CC. 1022400552
- **Juan Esteban Benjumea Correa** - CC. 1128164559

---

## Requisitos del Sistema

Este proyecto está desarrollado con las siguientes tecnologías:

- **Laravel 11** (Framework PHP)
- **Tailwind CSS** (Framework CSS)
- **MySQL** (Base de Datos)

### Requisitos Previos

- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL

---

## Instrucciones de Instalación

1. **Clonar el repositorio**:

```bash
git clone https://github.com/tu_usuario/tu_proyecto.git
```

2. **Navegar al directorio del proyecto**:

```bash
cd tu_proyecto
```

3. **Instalar las dependencias de PHP con Composer**:

```bash
composer install
```

4. **Instalar las dependencias de Node.js con NPM**:

```bash
npm install
```

5. **Configurar el archivo `.env`**:

   - Duplicar el archivo `.env.example` y renombrarlo como `.env`:

   ```bash
   cp .env.example .env
   ```

   - Abrir el archivo `.env` y configurar los siguientes parámetros para la conexión con la base de datos:

   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nombre_de_tu_base_de_datos
   DB_USERNAME=tu_usuario_de_mysql
   DB_PASSWORD=tu_contraseña_de_mysql
   ```

6. **Generar la clave de aplicación de Laravel**:

```bash
php artisan key:generate
```

7. **Migrar la base de datos**:

```bash
php artisan migrate
```

8. **Compilar los recursos estáticos con Tailwind CSS**:

```bash
npm run dev
```

9. **Levantar el servidor de desarrollo**:

```bash
php artisan serve
```

---

## Uso del Proyecto

Una vez el servidor esté corriendo, puedes acceder al sistema a través de la URL:

```
http://localhost:8000
```

- **Autenticación de usuario**: Dirígete a la pantalla principal para validar la autenticidad de un usuario.
- **Registro de datos**: En la pantalla de registro, podrás ingresar los datos de los usuarios.
- **Errores**: Cualquier error en los procesos de validación será notificado al usuario en las respectivas pantallas.

---

## Consideraciones de Diseño

- **Colores**: Se ha seleccionado una paleta de tres colores que mantiene consistencia visual en todas las pantallas.
- **Responsividad**: El diseño está optimizado para dispositivos móviles y de escritorio.
- **Tipografía**: Se utilizan fuentes consistentes en todos los componentes para mejorar la legibilidad.

---

## Contribuciones

Este proyecto fue realizado con fines educativos. No dudes en contribuir o utilizarlo como referencia para tus propios proyectos. 

---

## Licencia

Este proyecto está bajo la licencia MIT.