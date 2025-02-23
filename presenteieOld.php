<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presentes - Ícaro e Tati</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonte manuscrita -->
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff;
        }

        header {
            background-color: #f5deb3;
            color: #000;
        }

        h1 {
            font-family: 'Great Vibes', cursive;
            color: #000;
            font-size: 6rem;
        }

        .gift-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            text-align: center;
            background-color: #fff;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            position: relative; /* Para posicionar a etiqueta */
        }

        .gift-card img {
            width: 100%;
            height: 200px;
            object-fit: contain; /* Mantém a proporção da imagem */
            border-radius: 10px;
            cursor: pointer;
        }

        .status-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 5px 10px;
            border-radius: 10px;
            font-size: 0.9rem;
            font-weight: bold;
            color: white;
        }

        .badge-azul {
            background-color: #007bff; /* Azul para "Abençoar" */
        }

        .badge-verde {
            background-color: #28a745; /* Verde para "Check! Fomos abençoados!!" */
        }

        footer {
            background-color: #e0eee0;
            color: #000;
        }

        /* Modal escuro */
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .modal-content {
            position: relative;
            max-width: 90%;
            max-height: 90%;
        }

        .modal-content img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .close-modal {
			position: absolute;
			top: 15px;
			right: 25px;
			font-size: 40px; /* Aumentei o tamanho */
			color: white;
			cursor: pointer;
			font-weight: bold;
			padding: 10px; /* Aumenta a área de clique */
			transition: 0.3s; /* Animação suave ao passar o mouse */
		}
		.close-modal:hover {
			color: #ff4d4d; /* Destaca o botão ao passar o mouse */
		}
    </style>
</head>
<body>
    <header class="text-center py-5">
        <h1 class="display-1">Presentes</h1>
        <h1 class="display-4">Para os que querem nos abençoar</h1>
    </header>

    <section class="container my-5">
        <div class="row">
            <?php
			include 'conexao.php';

			// Apenas itens onde "visivel" = 1 serão exibidos
			$sql = "SELECT item, imagem, abençoador FROM presentes WHERE visivel = 1 ORDER BY item";
			$resultado = mysqli_query($conexao, $sql);
			
			if (mysqli_num_rows($resultado) > 0) {
    			while($row = mysqli_fetch_assoc($resultado)) {
					#$imagem = !empty($row["imagem"]) ? $row["imagem"] : "produtos/semImagem.jpeg";
					$imagem = !empty($row["imagem"]) ? "produtos/" . $row["imagem"] : "produtos/semImagem.jpeg";
					$abençoador = trim($row["abençoador"]);

				// Definir legenda da imagem
				if (empty($abençoador)) {	
					$status_texto = "Abençoar";
					$status_classe = "badge-azul";
				} else {
					$status_texto = "Check! Fomos abençoados!!";
					$status_classe = "badge-verde";
				}

				echo '<div class="col-md-4 col-sm-6">';
				echo '  <div class="gift-card">';
				echo '      <span class="status-badge ' . $status_classe . '">' . $status_texto . '</span>';
				echo '      <img src="' . $imagem . '" alt="Imagem do presente" onclick="openModal(this.src)">';
				echo '      <h5 class="mt-3">' . $row["item"] . '</h5>';
				echo '  </div>';
				echo '</div>';
				}			
			} else {
			echo '<p class="text-center">Nenhum presente encontrado.</p>';
			}	

mysqli_close($conexao);
?>

        </div>

        <div class="text-center mt-4">
            <a href="index.html" class="btn btn-secondary">Voltar para Início</a>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">© 2024 Ícaro e Tati. Todos os direitos reservados.</p>
    </footer>

    <!-- Modal para exibir imagem -->
    <div class="modal-overlay" id="modal">
        <span class="close-modal" onclick="closeModal()">&times;</span>
        <div class="modal-content">
            <img id="modal-img" src="" alt="Imagem ampliada">
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function openModal(src) {
            document.getElementById("modal-img").src = src;
            document.getElementById("modal").style.display = "flex";
        }

        function closeModal() {
            document.getElementById("modal").style.display = "none";
        }
    </script>
</body>
</html>
