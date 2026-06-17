<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Paquetes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="mb-4 text-primary fw-bold">Dashboard de Paquetes</h2>

    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header bg-white">
                    <h5 class="mb-0">Registrar Paquete</h5>
                </div>
                <div class="card-body">
                    <div id="mensaje-alerta"></div> <form id="form-paquete">
                        <div class="mb-3">
                            <label class="form-label text-muted small">Código de Tracking</label>
                            <input type="text" id="codigo" class="form-control" maxlength="30" placeholder="Ej: EC-XYZ-0001" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted small">Destinatario</label>
                            <input type="text" id="destinatario" class="form-control" maxlength="100" placeholder="Nombre completo" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted small">Fecha de Ingreso</label>
                            <input type="date" id="fechaIngreso" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 fw-bold">Registrar (POST)</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="mb-3">Inventario Actual</h5>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Código</th>
                                    <th>Destinatario</th>
                                    <th>Fecha Ingreso</th>
                                </tr>
                            </thead>
                            <tbody id="tabla-paquetes">
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Apuntamos a la ruta de tu API en Laravel
    const API_URL = '/api/paquetes';

    // Función para mostrar mensajes de éxito o error
    function mostrarMensaje(texto, tipo) {
        const alerta = document.getElementById('mensaje-alerta');
        alerta.innerHTML = `<div class="alert alert-${tipo} py-2 text-center small">${texto}</div>`;
        setTimeout(() => alerta.innerHTML = '', 4000);
    }

    // 1. Obtener y mostrar los paquetes (GET)
    async function cargarPaquetes() {
        try {
            const respuesta = await fetch(API_URL);
            const paquetes = await respuesta.json();
            
            const tbody = document.getElementById('tabla-paquetes');
            tbody.innerHTML = ''; // Limpiamos la tabla

            paquetes.forEach(p => {
                tbody.innerHTML += `
                    <tr>
                        <td><span class="badge bg-secondary">${p.id}</span></td>
                        <td class="fw-bold">${p.codigo}</td>
                        <td>${p.destinatario}</td>
                        <td>${p.fechaIngreso}</td>
                    </tr>
                `;
            });
        } catch (error) {
            console.error("Error al cargar los datos:", error);
        }
    }

    // 2. Enviar un nuevo paquete (POST)
    document.getElementById('form-paquete').addEventListener('submit', async (e) => {
        e.preventDefault(); // Evitamos que la página se recargue

        // Construimos el objeto con los datos del formulario
        const nuevoPaquete = {
            codigo: document.getElementById('codigo').value,
            destinatario: document.getElementById('destinatario').value,
            fechaIngreso: document.getElementById('fechaIngreso').value
        };

        try {
            const respuesta = await fetch(API_URL, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json' // Importante para Laravel
                },
                body: JSON.stringify(nuevoPaquete)
            });

            // Evaluamos los códigos de estado HTTP que programaste en el backend
            if (respuesta.status === 201) {
                mostrarMensaje('¡Paquete registrado con éxito!', 'success');
                document.getElementById('form-paquete').reset(); // Limpiar formulario
                cargarPaquetes(); // Recargar la tabla
            } 
            else if (respuesta.status === 409) {
                mostrarMensaje('Error: El código de tracking ya existe.', 'danger');
            } 
            else if (respuesta.status === 400 || respuesta.status === 422) {
                mostrarMensaje('Error: Revisa los campos ingresados.', 'warning');
            }
        } catch (error) {
            mostrarMensaje('Error de conexión con el servidor.', 'danger');
        }
    });

    // Cargar los paquetes apenas se abra la página
    cargarPaquetes();
</script>
</body>
</html>