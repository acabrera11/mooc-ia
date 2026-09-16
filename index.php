<?php
$lessons = [
	'Hola mundo',
	'Bienvenido',
	'Aprendiendo Git y GitHub',
	'Prueba final',
	'Práctica de Git con SSH',
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mooc IA | Ruta de aprendizaje</title>
	<style>
		:root {
			--ink: #17202a;
			--muted: #65717c;
			--paper: #f7f3ec;
			--card: rgba(255, 255, 255, 0.82);
			--coral: #e56b55;
			--teal: #167d7f;
			--line: rgba(23, 32, 42, 0.12);
		}

		* { box-sizing: border-box; }

		body {
			margin: 0;
			min-height: 100vh;
			color: var(--ink);
			font-family: Georgia, 'Times New Roman', serif;
			background:
				radial-gradient(circle at 12% 16%, rgba(229, 107, 85, 0.2), transparent 28%),
				radial-gradient(circle at 88% 84%, rgba(22, 125, 127, 0.2), transparent 30%),
				var(--paper);
		}

		.page {
			width: min(1120px, calc(100% - 40px));
			min-height: 100vh;
			margin: 0 auto;
			display: grid;
			align-items: center;
			padding: 56px 0;
		}

		.shell {
			display: grid;
			grid-template-columns: 1.15fr 0.85fr;
			overflow: hidden;
			border: 1px solid var(--line);
			border-radius: 24px;
			background: var(--card);
			box-shadow: 0 24px 70px rgba(23, 32, 42, 0.12);
			backdrop-filter: blur(12px);
			animation: rise 700ms ease-out both;
		}

		.intro { padding: clamp(34px, 7vw, 82px); }

		.eyebrow {
			margin: 0 0 24px;
			color: var(--teal);
			font: 700 0.78rem/1.2 Arial, sans-serif;
			letter-spacing: 0.16em;
			text-transform: uppercase;
		}

		h1 {
			max-width: 620px;
			margin: 0;
			font-size: clamp(3rem, 7vw, 6.4rem);
			font-weight: 400;
			line-height: 0.92;
			letter-spacing: -0.04em;
		}

		h1 span { color: var(--coral); }

		.lead {
			max-width: 500px;
			margin: 32px 0 0;
			color: var(--muted);
			font: 1.12rem/1.65 Arial, sans-serif;
		}

		.actions { display: flex; flex-wrap: wrap; gap: 12px; margin-top: 36px; }

		.button {
			display: inline-flex;
			align-items: center;
			min-height: 46px;
			padding: 0 20px;
			border-radius: 999px;
			font: 700 0.9rem Arial, sans-serif;
			text-decoration: none;
			transition: transform 180ms ease, box-shadow 180ms ease;
		}

		.button:hover { transform: translateY(-3px); box-shadow: 0 10px 20px rgba(23, 32, 42, 0.13); }
		.button.primary { color: #fff; background: var(--ink); }
		.button.secondary { color: var(--teal); border: 1px solid rgba(22, 125, 127, 0.35); }

		.journey {
			display: flex;
			flex-direction: column;
			justify-content: center;
			padding: 42px;
			color: #fff;
			background: var(--teal);
		}

		.journey h2 { margin: 0 0 10px; font-size: 1.8rem; font-weight: 400; }
		.journey p { margin: 0 0 28px; color: rgba(255, 255, 255, 0.72); font: 0.9rem/1.5 Arial, sans-serif; }

		.lesson-list { display: grid; gap: 0; margin: 0; padding: 0; list-style: none; }
		.lesson { display: flex; gap: 16px; align-items: center; padding: 16px 0; border-top: 1px solid rgba(255, 255, 255, 0.2); }
		.lesson:last-child { border-bottom: 1px solid rgba(255, 255, 255, 0.2); }
		.number { color: #a8e0d1; font: 700 0.78rem Arial, sans-serif; }
		.lesson-text { font-size: 1.05rem; }

		@keyframes rise { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }

		@media (max-width: 760px) {
			.page { width: min(100% - 24px, 560px); padding: 24px 0; }
			.shell { grid-template-columns: 1fr; }
			.intro { padding: 42px 28px 34px; }
			.journey { padding: 32px 28px; }
			h1 { font-size: clamp(3.2rem, 16vw, 5.4rem); }
		}
	</style>
</head>
<body>
	<main class="page">
		<section class="shell">
			<div class="intro">
				<p class="eyebrow">Mooc IA · laboratorio digital</p>
				<h1>Hola, <span>mundo.</span></h1>
				<p class="lead">Un pequeño espacio para aprender, experimentar y convertir cada comando en un paso hacia algo nuevo.</p>
				<div class="actions">
					<a class="button primary" href="yii/web/index.php">Entrar a Yii</a>
					<a class="button secondary" href="https://github.com/" target="_blank" rel="noopener">Explorar Git</a>
				</div>
			</div>
			<aside class="journey">
				<h2>Lo que ya construimos</h2>
				<p>Cinco estaciones, una misma curiosidad.</p>
				<ol class="lesson-list">
					<?php foreach ($lessons as $index => $lesson): ?>
						<li class="lesson">
							<span class="number"><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
							<span class="lesson-text"><?= htmlspecialchars($lesson, ENT_QUOTES, 'UTF-8') ?></span>
						</li>
					<?php endforeach; ?>
				</ol>
			</aside>
		</section>
	</main>
</body>
</html>
