<?php
/**
 * Plantilla de Home mística para Orakel.
 *
 * Esta plantilla se apoya en clases CSS propias para el layout y deja el contenido
 * editable desde el editor de bloques, pero ya prepara la estructura hero + secciones.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="primary" class="site-main">
	<div class="orakel-page-shell">
		<section class="orakel-hero">
			<div class="orakel-hero-copy">
				<div class="orakel-hero-copy-eyebrow">
					<span class="orakel-chip-pill">
						<span>✨</span> Academia &amp; oráculos digitales
					</span>
				</div>

				<h1 class="orakel-hero-title">
					Explora el mercado místico<br />de tu propio destino
				</h1>

				<p class="orakel-hero-subtitle">
					Cursos, rituales y conocimiento profundo para creadoras, magos digitales y almas curiosas que quieren navegar su camino con claridad.
				</p>

				<div class="orakel-hero-ctas">
					<a href="<?php echo esc_url( site_url( '/cursos' ) ); ?>" class="orakel-cta-main">
						Descubrir cursos
					</a>
					<a href="<?php echo esc_url( site_url( '/sobre-mi' ) ); ?>" class="orakel-cta-ghost">
						Conocer a la guía
					</a>
				</div>

				<div class="orakel-hero-meta">
					<div>
						<strong>+∞</strong><br />
						Capas de profundidad interior
					</div>
					<div>
						<strong>100% online</strong><br />
						Acceso desde cualquier plano
					</div>
					<div>
						<strong>Sin prisa</strong><br />
						Aprende a tu propio ritmo
					</div>
				</div>
			</div>

			<div class="orakel-hero-visual" aria-hidden="true">
				<div class="orakel-hero-glow"></div>
				<div class="orakel-hero-card"></div>
				<div class="orakel-hero-orb orakel-hero-orb--primary"></div>
				<div class="orakel-hero-orb orakel-hero-orb--secondary"></div>
				<div class="orakel-hero-orb orakel-hero-orb--tiny"></div>
			</div>
		</section>

		<section class="orakel-section-shell orakel-section-cursos">
			<header class="orakel-section-heading">
				<div>
					<div class="orakel-chip-pill">🔮 Cursos</div>
					<h2>Explora el grimorio de cursos</h2>
				</div>
				<p>
					Formaciones diseñadas para profundizar en tu práctica, desde iniciación hasta niveles avanzados.
				</p>
			</header>

			<div class="orakel-grid">
				<article class="orakel-card-item">
					<div class="orakel-chip-pill">Nivel I</div>
					<h3>Fundamentos del Tarot Intuitivo</h3>
					<p>Aprende a leer el tarot desde la intuición, conectando símbolos con tu propia voz interior.</p>
					<div class="orakel-card-item-footer">
						<span>8 módulos · Online</span>
						<a href="<?php echo esc_url( site_url( '/cursos' ) ); ?>">Ver curso</a>
					</div>
				</article>

				<article class="orakel-card-item">
					<div class="orakel-chip-pill">Nivel II</div>
					<h3>Arquetipos y Magia Personal</h3>
					<p>Profundiza en los arquetipos que habitan en ti y aprende a trabajar con ellos conscientemente.</p>
					<div class="orakel-card-item-footer">
						<span>6 módulos · Online</span>
						<a href="<?php echo esc_url( site_url( '/cursos' ) ); ?>">Ver curso</a>
					</div>
				</article>

				<article class="orakel-card-item">
					<div class="orakel-chip-pill">Mentoría</div>
					<h3>Acompañamiento 1:1</h3>
					<p>Sesiones personalizadas para trazar tu mapa, integrar procesos y sostener tu práctica.</p>
					<div class="orakel-card-item-footer">
						<span>Cupos limitados</span>
						<a href="<?php echo esc_url( site_url( '/contacto' ) ); ?>">Reservar</a>
					</div>
				</article>
			</div>
		</section>

		<section class="orakel-section-shell orakel-section-noticias">
			<header class="orakel-section-heading">
				<div>
					<div class="orakel-chip-pill">✨ Noticias</div>
					<h2>Últimos presagios y lecturas</h2>
				</div>
				<p>
					Artículos, reflexiones y transmisiones que expanden tu práctica más allá de las clases.
				</p>
			</header>

			<div class="orakel-grid">
				<?php
				$orakel_posts = new WP_Query(
					array(
						'posts_per_page' => 3,
					)
				);

				if ( $orakel_posts->have_posts() ) :
					while ( $orakel_posts->have_posts() ) :
						$orakel_posts->the_post();
						?>
						<article <?php post_class( 'orakel-card-item' ); ?>>
							<div class="orakel-chip-pill">
								<?php echo esc_html( get_the_date() ); ?>
							</div>
							<h3><?php the_title(); ?></h3>
							<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?></p>
							<div class="orakel-card-item-footer">
								<span><?php echo esc_html( get_the_category_list( ', ' ) ); ?></span>
								<a href="<?php the_permalink(); ?>">Leer</a>
							</div>
						</article>
						<?php
					endwhile;
					wp_reset_postdata();
				else :
					?>
					<article class="orakel-card-item">
						<h3>Pronto llegarán nuevas noticias</h3>
						<p>Publica tus primeros artículos para que aparezcan aquí como constelaciones de conocimiento.</p>
						<div class="orakel-card-item-footer">
							<span>Sincronizando con el universo…</span>
						</div>
					</article>
				<?php endif; ?>
			</div>
		</section>

		<section class="orakel-section-shell orakel-section-sobre-mi">
			<header class="orakel-section-heading">
				<div>
					<div class="orakel-chip-pill">🌙 Sobre mí</div>
					<h2>Tu guía en este mercado místico</h2>
				</div>
				<p>
					Un espacio para conocer quién sostiene este templo digital, su recorrido y su manera de acompañar.
				</p>
			</header>

			<div class="orakel-card-glass" style="padding: 2.2rem 2rem;">
				<p style="max-width: 44rem; color: var(--color-text-muted);">
					Aquí puedes contar tu historia: cómo llegaste a este trabajo, qué te mueve, qué formaciones y experiencias te sostienen.
					Podemos reemplazar este texto por bloques editables más adelante, pero de momento sirve como placeholder para ver
					la estructura general.
				</p>
			</div>
		</section>

		<section class="orakel-section-shell orakel-section-contacto">
			<header class="orakel-section-heading">
				<div>
					<div class="orakel-chip-pill">📨 Contacto</div>
					<h2>Abre el círculo</h2>
				</div>
				<p>
					Si sientes que alguna de estas puertas es para ti, puedes escribirme y abrimos el espacio juntas.
				</p>
			</header>

			<div class="orakel-card-glass" style="padding: 2rem;">
				<?php
				// Aquí puedes insertar un shortcode de formulario (Contact Form 7, Gravity Forms, etc.).
				if ( function_exists( 'do_shortcode' ) ) {
					echo do_shortcode( '[contact-form-7 id="1" title="Contacto"]' );
				} else {
					echo '<p style="color: var(--color-text-muted);">Añade aquí tu formulario de contacto mediante shortcode cuando lo tengas listo.</p>';
				}
				?>
			</div>
		</section>
	</div>
</main>

<?php
get_footer();

