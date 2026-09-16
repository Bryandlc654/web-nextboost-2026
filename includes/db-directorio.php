<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config.php';

function getDBDirectorio() {
    static $db = null;
    if ($db) return $db;

    $dsn = "mysql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME . ";charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    try {
        $db = new PDO($dsn, DB_USER, DB_PASS, $options);
    } catch (PDOException $e) {
        error_log('MySQL directorio: ' . $e->getMessage());
        throw new RuntimeException('No se pudo conectar a la base de datos del directorio. Verifica DB_HOST/DB_NAME/DB_USER/DB_PASS en .env');
    }

    $db->exec("CREATE TABLE IF NOT EXISTS categorias (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(100) NOT NULL UNIQUE,
        slug VARCHAR(120) NOT NULL UNIQUE,
        icono VARCHAR(50) NOT NULL DEFAULT 'building',
        descripcion VARCHAR(255) DEFAULT NULL,
        orden INT DEFAULT 0,
        activo TINYINT(1) DEFAULT 1
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

    $db->exec("CREATE TABLE IF NOT EXISTS empresas (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        categoria_id INT UNSIGNED NOT NULL,
        nombre VARCHAR(160) NOT NULL,
        slug VARCHAR(190) NOT NULL UNIQUE,
        descripcion TEXT,
        servicios TEXT,
        direccion VARCHAR(255) DEFAULT NULL,
        ciudad VARCHAR(100) DEFAULT 'Lima',
        telefono VARCHAR(40) DEFAULT NULL,
        whatsapp VARCHAR(40) DEFAULT NULL,
        email VARCHAR(160) DEFAULT NULL,
        web VARCHAR(255) DEFAULT NULL,
        horario VARCHAR(160) DEFAULT NULL,
        estado TINYINT(1) DEFAULT 1,
        destacado TINYINT(1) DEFAULT 0,
        creado_por VARCHAR(160) DEFAULT NULL,
        creado_en DATETIME DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (categoria_id) REFERENCES categorias(id) ON DELETE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

    seedCategoriasDirectorio($db);

    return $db;
}

function seedCategoriasDirectorio($db) {
    $count = $db->query("SELECT COUNT(*) FROM categorias")->fetchColumn();
    if ($count > 0) return;

    $categorias = [
        ['Industria', 'industrial', 'factory', 'Plantas, manufactura, logística y producción industrial.'],
        ['Derecho', 'derecho', 'scale', 'Estudios de abogados y servicios legales.'],
        ['Marketing', 'marketing', 'megaphone', 'Agencias de publicidad, SEO y marketing digital.'],
        ['Turismo', 'turismo', 'palmtree', 'Agencias de viajes, hoteles y turismo.'],
        ['Gimnasios', 'gimnasios', 'dumbbell', 'Gimnasios, crossfit y centros deportivos.'],
        ['Gastronomía', 'gastronomia', 'utensils', 'Restaurantes, cafeterías y negocios de comida.'],
        ['Salud', 'salud', 'heart-pulse', 'Clínicas, consultorios y profesionales de la salud.'],
        ['Educación', 'educacion', 'graduation-cap', 'Colegios, institutos y centros de formación.'],
        ['Inmobiliarias', 'inmobiliarias', 'building-2', 'Inmobiliarias y bienes raíces.'],
        ['Retail', 'retail', 'shopping-bag', 'Tiendas, retail y comercio en general.'],
        ['Belleza', 'belleza', 'sparkles', 'Salones de belleza, spas y estética.'],
        ['Tecnología', 'tecnologia', 'cpu', 'Empresas de software, TI y tecnología.'],
        ['Construcción', 'construccion', 'hard-hat', 'Constructoras y servicios de construcción.'],
        ['Transporte', 'transporte', 'truck', 'Transporte, mudanzas y logística de carga.'],
        ['Finanzas', 'finanzas', 'banknote', 'Contabilidad, asesoría financiera y seguros.'],
    ];

    $stmt = $db->prepare("INSERT INTO categorias (nombre, slug, icono, descripcion) VALUES (?, ?, ?, ?)");
    $orden = 1;
    foreach ($categorias as $c) {
        $stmt->execute([$c[0], $c[1], $c[2], $c[3]]);
        $orden++;
    }
}

function slugDirectorio($texto) {
    $texto = strtolower(trim($texto));
    $texto = str_replace(
        ['á','é','í','ó','ú','ñ','ü',' '],
        ['a','e','i','o','u','n','u','-'],
        $texto
    );
    $texto = preg_replace('/[^a-z0-9\-]+/', '-', $texto);
    $texto = preg_replace('/-+/', '-', $texto);
    return trim($texto, '-');
}

function slugUnicoDirectorio($db, $nombre, $tabla = 'empresas', $ignorarId = null) {
    $base = slugDirectorio($nombre);
    $slug = $base;
    $n = 2;
    $sql = "SELECT COUNT(*) FROM {$tabla} WHERE slug = ?";
    if ($ignorarId) {
        $sql .= " AND id != ?";
    }
    $stmt = $db->prepare($sql);
    $existe = function ($candidato) use ($stmt, $sql, $ignorarId) {
        if ($ignorarId) {
            $stmt->execute([$candidato, $ignorarId]);
        } else {
            $stmt->execute([$candidato]);
        }
        return $stmt->fetchColumn() > 0;
    };
    while ($existe($slug)) {
        $slug = $base . '-' . $n;
        $n++;
    }
    return $slug;
}
