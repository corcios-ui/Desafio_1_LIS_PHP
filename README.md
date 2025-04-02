# Finanzas App 💰

# Integrantes ⭐:

Jose valentin corcios Segovia Cs232913
Fernando Samuel Quijada Arévalo QA190088

## 📁 Estructura del proyecto

```
finanzas_app/
├── index.php                      # Redirecciona al login
├── Database.php                   # Clase de conexión PDO
├── Login.php                      # Clase de autenticación
│
├── controllers/
│   ├── login_controller.php            # Lógica de inicio de sesión
│   ├── dashboard_controller.php        # Panel principal
│   ├── registrar_entrada_controller.php# Formulario para nueva entrada
│   ├── registrar_salida_controller.php # Formulario para nueva salida
│   ├── ver_entradas_controller.php     # Muestra tabla de entradas
│   ├── ver_salidas_controller.php      # Muestra tabla de salidas
│   └── balance_controller.php          # Genera el balance y gráfico
│
├── views/
│   ├── login_view.php                  # Vista de login
│   ├── dashboard_view.php              # Vista de menú principal
│   ├── registrar_entrada_view.php      # Vista del formulario entrada
│   ├── registrar_salida_view.php       # Vista del formulario salida
│   ├── ver_entradas_view.php           # Vista de entradas
│   ├── ver_salidas_view.php            # Vista de salidas
│   └── balance_view.php                # Vista del balance y PDF
│
├── facturas/                      # Carpeta para imágenes subidas
├── crear_usuario.php              # Script para crear usuario de prueba
└── test_conexion.php              # Verifica conexión a la base de datos
```

---

## 🚀 Ejecución del proyecto

Desde la terminal:

```bash
php -S localhost:8000
```

Y accedé desde tu navegador a:

```
http://localhost:8000
```

## Login

![image](https://github.com/user-attachments/assets/75aeca08-5484-449e-a94c-36c86e9a7c8a)

## Menu

![image](https://github.com/user-attachments/assets/5d405127-b7a9-41ae-9f1d-490b4b5e1d57)

## Reporte

![image](https://github.com/user-attachments/assets/7254b31a-ca00-4625-8afc-aa1743a8fb4e)

