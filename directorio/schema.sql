-- ============================================================
-- Directorio de Empresas - Next Boost
-- Base: MySQL 5.7+ / MariaDB 10.3+  |  Collation: utf8mb4
-- Crea la BD, las tablas y las categorías iniciales.
-- El archivo includes/db-directorio.php ya crea las tablas y
-- categorías automáticamente; este SQL es opcional (phpMyAdmin).
-- ============================================================

CREATE DATABASE IF NOT EXISTS nextboost
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;
USE nextboost;

CREATE TABLE IF NOT EXISTS categorias (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL UNIQUE,
  slug VARCHAR(120) NOT NULL UNIQUE,
  icono VARCHAR(50) NOT NULL DEFAULT 'building',
  descripcion VARCHAR(255) DEFAULT NULL,
  orden INT DEFAULT 0,
  activo TINYINT(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS empresas (
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
  FOREIGN KEY (categoria_id) REFERENCES categorias(id) ON DELETE CASCADE,
  INDEX idx_empresas_categoria (categoria_id),
  INDEX idx_empresas_estado (estado),
  INDEX idx_empresas_nombre (nombre)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Categorías iniciales (sectores)
INSERT INTO categorias (nombre, slug, icono, descripcion, orden) VALUES
('Industria', 'industrial', 'factory', 'Plantas, manufactura, logística y producción industrial.', 1),
('Derecho', 'derecho', 'scale', 'Estudios de abogados y servicios legales.', 2),
('Marketing', 'marketing', 'megaphone', 'Agencias de publicidad, SEO y marketing digital.', 3),
('Turismo', 'turismo', 'palmtree', 'Agencias de viajes, hoteles y turismo.', 4),
('Gimnasios', 'gimnasios', 'dumbbell', 'Gimnasios, crossfit y centros deportivos.', 5),
('Gastronomía', 'gastronomia', 'utensils', 'Restaurantes, cafeterías y negocios de comida.', 6),
('Salud', 'salud', 'heart-pulse', 'Clínicas, consultorios y profesionales de la salud.', 7),
('Educación', 'educacion', 'graduation-cap', 'Colegios, institutos y centros de formación.', 8),
('Inmobiliarias', 'inmobiliarias', 'building-2', 'Inmobiliarias y bienes raíces.', 9),
('Retail', 'retail', 'shopping-bag', 'Tiendas, retail y comercio en general.', 10),
('Belleza', 'belleza', 'sparkles', 'Salones de belleza, spas y estética.', 11),
('Tecnología', 'tecnologia', 'cpu', 'Empresas de software, TI y tecnología.', 12),
('Construcción', 'construccion', 'hard-hat', 'Constructoras y servicios de construcción.', 13),
('Transporte', 'transporte', 'truck', 'Transporte, mudanzas y logística de carga.', 14),
('Finanzas', 'finanzas', 'banknote', 'Contabilidad, asesoría financiera y seguros.', 15);

-- Ejemplo de empresa (opcional, borra si no lo necesitas)
INSERT INTO empresas
  (categoria_id, nombre, slug, descripcion, servicios, direccion, ciudad,
   telefono, whatsapp, email, web, horario, estado, destacado)
VALUES
  ((SELECT id FROM categorias WHERE slug = 'industrial'),
   'Corporación Totos SAC', 'corporacion-totos-sac',
   'Empresa industrial con plantas de producción y distribución a nivel nacional.',
   'Producción, Logística, Distribución',
   'Av. Industrial 1500', 'Lima', '+51 1 555 0101', '51999000101',
   'contacto@totos.pe', 'https://totos.pe', 'Lun - Vie 8:00 - 18:00', 1, 1);
