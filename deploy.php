<?php
namespace Deployer;

require 'recipe/common.php';

// Nombre de tu aplicación y repositorio git
set('application', 'mi_aplicacion');
set('repository', 'git@github.com:usuario/mi-repo.git');

// Ruta en el servidor remoto donde se desplegará la aplicación
set('deploy_path', '/ruta/en/el/servidor');

// Servidores de destino
host('tu_servidor.com')
    ->user('tu_usuario_ssh')
    ->set('deploy_path', get('deploy_path'));

// Tareas personalizadas
task('deploy:mi_tarea', function () {
    // Tareas personalizadas que desees ejecutar durante el despliegue
});

// Ejecutar tareas después del despliegue
after('deploy', 'deploy:mi_tarea');

// Configuración de otros entornos (por ejemplo, staging, producción)
// Puedes agregar más hosts y configuraciones aquí si lo deseas
