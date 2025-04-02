# Desafio_1_LIS_PHP

--> Estructura:

finanzas_app/ ├── index.php # Redirecciona al login ├── Database.php # Clase de conexión PDO ├── Login.php # Clase de autenticación │ ├── controllers/ │ ├── login_controller.php # Lógica de inicio de sesión │ ├── dashboard_controller.php # Panel principal │ ├── registrar_entrada_controller.php# Formulario para nueva entrada │ ├── registrar_salida_controller.php # Formulario para nueva salida │ ├── ver_entradas_controller.php # Muestra tabla de entradas │ ├── ver_salidas_controller.php # Muestra tabla de salidas │ └── balance_controller.php # Genera el balance y gráfico │ ├── views/ │ ├── login_view.php # Vista de login │ ├── dashboard_view.php # Vista de menú principal │ ├── registrar_entrada_view.php # Vista del formulario entrada │ ├── registrar_salida_view.php # Vista del formulario salida │ ├── ver_entradas_view.php # Vista de entradas │ ├── ver_salidas_view.php # Vista de salidas │ └── balance_view.php # Vista del balance y PDF │ ├── facturas/ # Carpeta para imágenes subidas ├── crear_usuario.php # Script para crear usuario de prueba └── test_conexion.php # Verifica conexión a la base de datos
--> Ejecución:

php -S localhost:8000 


