# Currency Converter API - Laravel

Este proyecto es una API REST construida con Laravel que permite obtener tasas de cambio entre dos monedas. Utiliza la API externa [Exchangerate-API](https://www.exchangerate-api.com/) para obtener los datos actualizados.

## 🚀 Características

- Endpoint REST para obtener el tipo de cambio entre dos monedas.
- Posibilidad de convertir montos usando un parámetro opcional.
- Estructura profesional con buenas prácticas.
- Integración de servicios externos.
- Preparado para ser desplegado o probado en distintos entornos.

## 🛠️ Tecnologías

- PHP 8+
- Laravel 10+
- HTTP Client de Laravel
- Exchangerate-API
- PHPUnit (próximamente)
- Swagger / OpenAPI (próximamente)

## 📦 Instalación

1. Clona el repositorio:
   ```bash
   git clone https://github.com/tu-usuario/currency_converter_laravel_api.git
   cd currency_converter_laravel_api

2. Instala las dependencias:
   ```bash
   composer install
   
3. Copia el archivo .env:
   ```bash
   cp .env.example .env

4. Configura tu archivo .env con tus datos de base de datos y tu API key de https://www.exchangerate-api.com/:
   ```bash
   EXCHANGE_API_KEY=tu_clave_aqui

5. Ejecuta las migraciones (si las hay):
   ```bash
   php artisan migrate

6. Lanza el servidor de desarrollo:
   ```bash
   php artisan serve

🔁 Uso del endpoint
1. Obtener tipo de cambio (Pruebalo con Postman, CURL o lo que veas mejor):
   ```bash
   GET /api/exchange/{base}/{target}

2. Convertir un monto:
   ```bash
   GET /api/exchange/{base}/{target}/100

- Ejemplo:
   ```bash
   GET http://localhost:8000/api/exchange/USD/EUR/50

- Respuesta JSON esperada:
  ```bash
   {
     "base_currency": "USD",
     "target_currency": "EUR",
     "exchange_rate": 0.9047,
     "converted_amount": 45.235
   }   

🧪 Pruebas
   
   Próximamente: se agregarán pruebas unitarias para validar el servicio y el controlador.

✅ Estado del proyecto

   ✔️ MVP funcional con integración de API externa.
   
   🔜 En progreso: documentación Swagger, validaciones, pruebas automáticas.








