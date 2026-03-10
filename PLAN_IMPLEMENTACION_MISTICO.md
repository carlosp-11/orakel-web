## Plan de implementación estilo “Mystical Marketplace”

Este documento define el roadmap para transformar el sitio WordPress en una experiencia mística con animaciones de scroll y secciones: **Home**, **Cursos**, **Tienda**, **Noticias**, **Sobre mí**, **Contacto**.

Las casillas `[ ]` sirven como checklist; se marcarán como `[x]` a medida que se complete cada tarea.

---

## 1. Fundamentos del tema y diseño global

- [ ] **Auditoría del tema actual**
  - [ ] Identificar tema activo (Astra, GeneratePress, etc.) y si hay child theme.
  - [ ] Revisar cómo se construye la home actual (plantilla PHP, Gutenberg, page builder).
  - [ ] Localizar `header`, `footer` y plantillas de páginas clave.

- [ ] **Crear / ajustar child theme**
  - [ ] Crear child theme si no existe (carpeta, `style.css`, `functions.php` mínimos).
  - [ ] Asegurar que el child theme esté activo y funcionando.
  - [ ] Encadenar correctamente `style.css` y scripts del child.

- [ ] **Definir sistema de diseño místico**
  - [ ] Definir paleta oscura mística (fondos profundos + acentos brillantes).
  - [ ] Definir tipografías (display para títulos, sans para cuerpo).
  - [ ] Crear design tokens (variables CSS en `:root` para colores, fuentes, radios, sombras).
  - [ ] Ajustar estilos base de `body`, `html`, `section` para fondo, espaciados y tipografía.

---

## 2. Arquitectura de contenido y navegación

- [ ] **Estructura de páginas principales**
  - [ ] Crear/verificar páginas: Home, Cursos, Tienda, Noticias, Sobre mí, Contacto.
  - [ ] Configurar la página estática por defecto como Home.
  - [ ] Revisar que los slugs y menús sean coherentes con la arquitectura deseada.

- [ ] **Menú y navegación**
  - [ ] Configurar el menú principal con las secciones: Home, Cursos, Tienda, Noticias, Sobre mí, Contacto.
  - [ ] Aplicar estilo místico al header (fondo, sombra, hover, logo).
  - [ ] Definir comportamiento de header en scroll (fijo, shrink, transparencia, etc.).

- [ ] **Tipo de contenidos**
  - [ ] Decidir si se usa WooCommerce para **Tienda** o un CPT personalizado.
  - [ ] Definir CPT si aplica (por ejemplo: `curso`, `producto_mistico`, `noticia`).
  - [ ] Definir taxonomías (categorías místicas, etiquetas, etc.).

---

## 3. Bloques / componentes reutilizables

- [ ] **Bloques base (Gutenberg / ACF Blocks)**
  - [ ] Diseñar bloque `HeroMístico` para la Home (título, subtítulo, CTA, imagen/ilustración, elementos decorativos).
  - [ ] Diseñar bloque `GridProductosMísticos` (o cursos/tienda dependiendo de la sección).
  - [ ] Diseñar bloque `SecciónHistoria` / `SobreMí` con narrativa y visuales.
  - [ ] Diseñar bloque de `NoticiasDestacadas`.
  - [ ] Diseñar bloque de `Contacto` con formulario y CTA mágico.

- [ ] **Implementación técnica de bloques**
  - [ ] Crear estructura de archivos para bloques (PHP + JS/CSS si aplica).
  - [ ] Registrar bloques con `register_block_type` o ACF Blocks.
  - [ ] Asignar clases CSS semánticas para animaciones posteriores.

---

## 4. Diseño y comportamiento por sección

### 4.1 Home

- [ ] **Hero místico**
  - [ ] Definir copy (título, subtítulo, CTA principal).
  - [ ] Seleccionar/crear ilustraciones o imágenes místicas.
  - [ ] Diseñar layout: posición de texto, CTA, elementos flotantes.
  - [ ] Aplicar estilos de glassmorphism / glows / gradientes.

- [ ] **Bloque de cursos/tienda destacados**
  - [ ] Elegir productos/cursos destacados para la Home.
  - [ ] Definir tarjetas con imagen, título, breve descripción y CTA.
  - [ ] Añadir micro-interacciones de hover (escala, sombra, glow).

- [ ] **Sección de narrativa / “Lore”**
  - [ ] Definir la historia breve del marketplace/academia mística.
  - [ ] Diseñar composición visual (texto + imagen + gradiente).

- [ ] **CTA final**
  - [ ] Definir objetivo principal (suscripción, compra, reserva…).
  - [ ] Crear bloque con gran botón brillante y mensaje claro.

### 4.2 Cursos

- [ ] **Listado de cursos**
  - [ ] Definir estructura de tarjetas de curso (nivel, duración, precio, modalidad).
  - [ ] Diseñar filtros/buscador si es necesario.
  - [ ] Aplicar estilo místico coherente con Home.

- [ ] **Ficha individual de curso**
  - [ ] Definir layout de la ficha (hero del curso, contenido, programa, CTA).
  - [ ] Añadir elementos visuales místicos diferenciadores por tipo de curso.

### 4.3 Tienda

- [ ] **Listado de productos**
  - [ ] Integrar con WooCommerce o CPT de productos místicos.
  - [ ] Diseñar tarjetas con énfasis en imagen y rareza/valor místico.
  - [ ] Añadir micro-interacciones de hover y estados de “oferta” o “destacado”.

- [ ] **Ficha de producto**
  - [ ] Componer hero del producto (imagen grande, título, precio, CTA).
  - [ ] Añadir secciones de descripción, beneficios, “energía” o contexto místico.
  - [ ] Asegurar compatibilidad con carrito/checkout estándar.

### 4.4 Noticias

- [ ] **Blog / noticias**
  - [ ] Definir plantilla de listado de entradas (tarjetas o lista).
  - [ ] Añadir estilo místico a fechas, categorías y badges.
  - [ ] Crear plantillas para entrada individual (cabecera visual, tipografía cómoda).

### 4.5 Sobre mí

- [ ] **Presentación personal**
  - [ ] Definir narrativa personal alineada con el universo místico.
  - [ ] Diseñar layout con foto/ilustración + texto + credenciales.
  - [ ] Añadir detalles visuales (orbes, constelaciones, símbolos).

- [ ] **Timeline / hitos**
  - [ ] Opcional: crear una línea de tiempo animada con hitos relevantes.

### 4.6 Contacto

- [ ] **Formulario de contacto**
  - [ ] Integrar con plugin de formularios (Contact Form 7, Gravity Forms, etc.) o bloque nativo.
  - [ ] Personalizar estilos del formulario (inputs, placeholders, botón).
  - [ ] Añadir mensajes de éxito/error con feedback claro.

- [ ] **Información adicional**
  - [ ] Incluir email, redes, ubicación (si aplica).
  - [ ] Añadir un pequeño texto motivador / místico para animar al contacto.

---

## 5. Sistema de animaciones y scroll

- [ ] **Integración de librerías**
  - [ ] Elegir e integrar GSAP + ScrollTrigger para animaciones de scroll.
  - [ ] (Opcional) Integrar librería de scroll suave (Lenis/Locomotive) y conectarla con ScrollTrigger.
  - [ ] Crear archivo JS principal (`theme-animations.js`) para orquestar las animaciones.

- [ ] **Animaciones del Hero**
  - [ ] Entrada orquestada del título, subtítulo, CTA y elementos decorativos.
  - [ ] Parallax suave de elementos flotantes (orbes, símbolos, partículas).
  - [ ] Animaciones en loop lento (respiración / flotación).

- [ ] **Animaciones por sección**
  - [ ] Animar aparición de secciones (fade + translate) al hacer scroll.
  - [ ] Stagger en listas y grids (cursos, productos, noticias).
  - [ ] Efectos de parallax ligeros en fondos y decoraciones.

- [ ] **Cambios de fondo / atmósfera**
  - [ ] Crear capas de fondo globales (gradientes, glows).
  - [ ] Usar ScrollTrigger para cambiar opacidades/colores según sección activa.

- [ ] **Micro-interacciones**
  - [ ] Hover en tarjetas (escala, sombra, glow).
  - [ ] Hover en botones (gradiente animado, borde luminoso).
  - [ ] Pequeños movimientos en iconos o decoraciones al pasar el ratón.

---

## 6. Rendimiento, accesibilidad y SEO

- [ ] **Optimización de assets**
  - [ ] Convertir imágenes a WebP/AVIF donde sea posible.
  - [ ] Definir `srcset` y `sizes` para las imágenes importantes.
  - [ ] Activar lazy loading en imágenes no críticas.

- [ ] **Performance de animaciones**
  - [ ] Usar solo propiedades animables por GPU (`transform`, `opacity`).
  - [ ] Ajustar número de elementos parallax si afecta al rendimiento.
  - [ ] Respetar `prefers-reduced-motion` y ofrecer versión con menos movimiento.

- [ ] **Accesibilidad**
  - [ ] Asegurar contraste suficiente entre texto y fondo.
  - [ ] Añadir textos alternativos a imágenes clave.
  - [ ] Revisar jerarquía de headings y estructura semántica.

- [ ] **SEO básico**
  - [ ] Títulos y metadescripciones por página alineados con el concepto místico.
  - [ ] Slugs limpios y coherentes (sin ruido técnico).
  - [ ] Marcado correcto de breadcrumbs / migas de pan si se usan.

---

## 7. Roadmap sugerido de trabajo

Orden recomendado para avanzar:

1. **Fundamentos del tema y diseño global** (sección 1).
2. **Arquitectura de contenido y navegación** (sección 2).
3. **Bloques / componentes reutilizables** y montaje inicial de **Home** (sección 3 + 4.1).
4. Desarrollo de **Cursos**, **Tienda**, **Noticias**, **Sobre mí** y **Contacto** (secciones 4.2–4.6).
5. Implementación del **sistema de animaciones y scroll** (sección 5).
6. Ronda de **performance, accesibilidad y SEO** (sección 6).

Conforme avancemos, iremos marcando cada tarea con `[x]` en este archivo para tener un control claro del progreso.

